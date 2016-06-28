<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
namespace Documentation\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use ZF\Apigility\Provider\ApigilityProviderInterface;
use Zend\View\Model\ViewModel;
use ZF\Apigility\Documentation\Api;
use ZF\Apigility\Documentation\Service;
use Zend\ModuleManager\ModuleManager;


class IndexController extends AbstractActionController
{
    /**
     * @var ModuleManager
     */
    protected $moduleManager;
    
    /**
     * @var array
     */
    protected $config;
    
    /**
     * @var ConfigModuleUtils
     */
    protected $configModuleUtils;
    
    /**
     * @var array
     */
    protected $docs = array();
    
    /**
     * @var array();
     */
    protected $moduleData = array();

    public function indexAction()
    {        
        $this->setConfigVar();
        $apiList = $this->createApiList();
        $moduleData = $apiList;
        $service = array();
        foreach($apiList as $key=>$value) {
            $service = $this->createServiceList($value['name'], 1);
            $apiList[$key]['service'] = $service->toArray();
        }
        $this->layout('layout/doclayout');
        
        return new ViewModel(
            array(
              'menu' => $apiList
        ));
    }
    
    public function docsAction()
    {
       $apiName = $this->params()->fromQuery('api');
       $apiVersion = $this->params()->fromQuery('v', '1');
       $serviceName = $this->params()->fromQuery('service'); 
       $doc = $this->getDocumentationConfig($apiName, $serviceName, $apiVersion);
       $config = $this->getApiModuleConfig($apiName, $serviceName, $apiVersion);
       $hosturl = $this->getHostUrl();
       $view = new ViewModel(array('doc'=>$doc, 'api'=>$apiName, 'service'=>$serviceName,'config'=>$config,'hosturl'=>$hosturl));
       $view->setTerminal(true);
       return $view;
    }
    
    
    public function createApiList()
    {
        $apigilityModules = array();
        $q = preg_quote('\\');
        foreach ($this->moduleManager->getModules() as $moduleName) {
            $module = $this->moduleManager->getModule($moduleName);
            
            if ($module instanceof ApigilityProviderInterface) {
                $versionRegex = '#' . preg_quote($moduleName) . $q . 'V(?P<version>[^' . $q . ']+)' . $q . '#';
                $versions = array();
                $serviceConfigs = array();
                if ($this->config['zf-rest']) {
                    $serviceConfigs = array_merge($serviceConfigs, $this->config['zf-rest']);
                }
                if ($this->config['zf-rpc']) {
                    $serviceConfigs = array_merge($serviceConfigs, $this->config['zf-rpc']);
                }
    
                foreach ($serviceConfigs as $serviceName => $serviceConfig) {
                    if (!preg_match($versionRegex, $serviceName, $matches)) {
                        continue;
                    }
                    $version = $matches['version'];
                    if (!in_array($version, $versions)) {
                        $versions[] = $version;
                    }
                }
    
                $apigilityModules[] = array(
                    'name'     => $moduleName,
                    'versions' => $versions,
                );
            }
        }
        return $apigilityModules;
    }
    
    public function createServiceList($apiName, $apiVersion = 1)
    {

        $api = new Api();

        $api->setVersion($apiVersion);
        $api->setName($apiName);
        $serviceConfigs = array();
        if ($this->config['zf-rest']) {
            $serviceConfigs = array_merge($serviceConfigs, $this->config['zf-rest']);
        }
        if ($this->config['zf-rpc']) {
            $serviceConfigs = array_merge($serviceConfigs, $this->config['zf-rpc']);
        }
        
        foreach ($serviceConfigs as $serviceName => $serviceConfig) {
            if (strpos($serviceName, $apiName . '\\') === 0
                && strpos($serviceName, '\V' . $api->getVersion() . '\\')
                && isset($serviceConfig['service_name'])
            ) {                
                $service = $this->createService($api, $serviceConfig['service_name']);
                
                if ($service) {
                    $api->addService($service);
                }
            }
        }
        
        return $api;

    }
    
    /**
     * Retrieve the documentation for a given API module
     *
     * @param string $apiName
     * @return array
     */
    protected function getDocumentationConfig($apiName, $seriveName, $version)
    {
        $this->setConfigVar();
        
        $moduleConfigPath = $this->configModuleUtils->getModuleConfigPath($apiName);
        $docConfigPath = dirname($moduleConfigPath) . '/documentation.config.php';
        if (file_exists($docConfigPath)) {
            $this->docs[$apiName] = include $docConfigPath;
        } else {
            $this->docs[$apiName] = array();
        }
        
        $sap = '\\';
        $key = $apiName . $sap . 'V' . $version . $sap . 'Rest' . $sap . ucfirst($seriveName) . $sap . 'Controller';
        
        return $this->docs[$apiName][$key];
    }
    
    
    
    /**
     * Create documentation details for a given service in a given version of
     * an API module
     *
     * @param string $apiName
     * @param int|string $apiVersion
     * @param string $serviceName
     * @return Service
     */
    public function createService(Api $api, $serviceName)
    {
        $service = new Service();
        $service->setApi($api);
        
        $serviceData = null;
        $isRest      = false;
        $isRpc       = false;
        $hasSegments = false;
        $hasFields   = false;
        
        foreach ($this->config['zf-rest'] as $serviceClassName => $restConfig) {
            if ((strpos($serviceClassName, $api->getName() . '\\') === 0)
                && isset($restConfig['service_name'])
                && ($restConfig['service_name'] === $serviceName)
                && (strstr($serviceClassName, '\\V' . $api->getVersion() . '\\') !== false)
            ) {
                $serviceData = $restConfig;
                $isRest = true;
                $hasSegments = true;
                break;
            }
        }
        
        if (!$serviceData) {
            foreach ($this->config['zf-rpc'] as $serviceClassName => $rpcConfig) {
                if ((strpos($serviceClassName, $api->getName() . '\\') === 0)
                    && isset($rpcConfig['service_name'])
                    && ($rpcConfig['service_name'] === $serviceName)
                    && (strstr($serviceClassName, '\\V' . $api->getVersion() . '\\') !== false)
                ) {
                    $serviceData = $rpcConfig;
                    $serviceData['action'] = $this->marshalActionFromRouteConfig(
                        $serviceName,
                        $serviceClassName,
                        $rpcConfig
                    );
                    $isRpc = true;
                    break;
                }
            }
        }
        
        if (!$serviceData || !isset($serviceClassName)) {
            return false;
        }
        
        $service->setName($serviceData['service_name']);
        
        $route = $this->config['router']['routes'][$serviceData['route_name']]['options']['route'];
        $service->setRoute(str_replace('[/v:version]', '', $route)); // remove internal version prefix, hacky
        if ($isRpc) {
            $hasSegments = $this->hasOptionalSegments($route);
        }
    
        if (isset($serviceData['route_identifier_name'])) {
            $service->setRouteIdentifierName($serviceData['route_identifier_name']);
        }
        
        if (isset($this->config['zf-content-negotiation']['accept_whitelist'][$serviceClassName])) {
            $service->setRequestAcceptTypes(
                $this->config['zf-content-negotiation']['accept_whitelist'][$serviceClassName]
            );
        }
    
        if (isset($this->config['zf-content-negotiation']['content_type_whitelist'][$serviceClassName])) {
            $service->setRequestContentTypes(
                $this->config['zf-content-negotiation']['content_type_whitelist'][$serviceClassName]
            );
        }
        
        return $service;
    }   
        
    public function getModulePath($moduleName) {
        $moduleName = str_replace(['.', '/'], '\\', $moduleName);
        
        if (isset($this->moduleData[$moduleName])
            && isset($this->moduleData[$moduleName]['path'])
        ) {
            return $this->moduleData[$moduleName]['path'];
        }
    }
    
    protected function setConfigVar() {
        $services = $this->getServiceLocator ();
        $this->moduleManager = $services->get ('ModuleManager');
        $this->config = $services->get ('config');
        $this->configModuleUtils = $services->get ( 'ZF\Configuration\ModuleUtils' );
    }
    
    /**
     * Retrieve the module configuration for a given API module
     *
     * @param string $apiName
     * @return array
     */
    protected function getApiModuleConfig($apiName, $seriveName, $version)
    {
        $this->setConfigVar();
    
        $moduleConfigPath = $this->configModuleUtils->getModuleConfigPath($apiName);
        $docConfigPath = dirname($moduleConfigPath) . '/module.config.php';
        if (file_exists($docConfigPath)) {
            $this->docs[$apiName] = include $docConfigPath;
        } else {
            $this->docs[$apiName] = array();
        }
        
        $sap = '\\';
        $key = $apiName . $sap . 'V' . $version . $sap . 'Rest' . $sap . ucfirst($seriveName) . $sap . 'Controller';
    
        return $this->docs[$apiName]['zf-rest'][$key];
    }
    
    public function getHostUrl() {
        try {
            $hosturl = null;
            $https = ((!empty($_SERVER['HTTPS'])) && ($_SERVER['HTTPS'] != 'off')) ? true : false;
            
            if($https) {
                $hosturl = "https://".$_SERVER['HTTP_HOST'];
            } else {
                $hosturl = "http://".$_SERVER['HTTP_HOST'];
            }
            
            return $hosturl;
            
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
        
    }
}
