<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
namespace Documentation;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{

    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $services = $e->getApplication()->getServiceManager();
        
        
       /* $eventManager->attach(MvcEvent::EVENT_DISPATCH_ERROR, function ($event) use($services) {
            $exception = $event->getResult()->exception;
            $response = $event->getResponse();
            if (! $exception) {
                return;
            }
            $service = $services->get('Zend\Log');
            
            $service->ERR($exception->getMessage() . " in " . $exception->getFile() . ' line ' . $exception->getLine());
            $service->__destruct();            
            $response->setStatusCode(302);
            $response->sendHeaders();
            return $response;
        });
        
        
        
        $logger = $services->get('Zend\Log');
        $logger->registerErrorHandler($logger);
        $logger->registerExceptionHandler($logger);
        register_shutdown_function(function () use($logger) {
            if ($error = error_get_last()) {
                if (($error['type'] & error_reporting())) {
                    $logger->ERR($error['message'] . " in " . $error['file'] . ' line ' . $error['line']);
                    $logger->__destruct();
                }
            }
        });*/
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }

   /* public function getServiceConfig()
    {
        return array(
            'factories' => array(                
                'Zend\Log' => function ($sm) {
                    $fileName = 'log_' . date('m-d-Y') . '.txt';
                    $log = new Logger();
                    $writer = new LogWriterStream('./data/logs/' . $fileName);
                    $log->addWriter($writer);
                    $format = '%timestamp%
                   %priorityName% (%priority%): %message%' . PHP_EOL;
                    $formatter = new Simple($format);
                    $writer->setFormatter($formatter);
                    return $log;
                }
            )
        );
    }*/
    /*public function getServiceConfig()
    {
        return array('factories' => array(
            'ZF\Apigility\Documentation\ApiFactory' => function ($services) {
                return new DocFactory(
                    $services->get('ModuleManager'),
                    $services->get('Config'),
                    $services->get('ZF\Configuration\ModuleUtils')
                );
            }
        ));
    }*/
}
