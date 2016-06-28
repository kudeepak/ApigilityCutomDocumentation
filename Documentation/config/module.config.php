<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2014 Zend Technologies USA Inc. (http://www.zend.com)
 */
return array(
    'router' => array(
        'routes' => array(
            'documentation' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/documentation',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Documentation\Controller',
                        'controller' => 'Documentation\Controller\Index',
                        'action' => 'index'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array()
                        )
                    )
                )
            )
        )
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Db\Adapter\AdapterAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory'
        ),/*
 	'factories' => array(
            'Application\\Controller\\CommonResource' => 'Application\\Controller\\CommonResource',
    	),
	*/
),
    'controllers' => array(
        'invokables' => array(
            'Documentation\Controller\Index' => 'Documentation\Controller\IndexController',           
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/doclayout' => __DIR__ . '/../view/layout/doc-layout.phtml',
            'documentation/index/index' => __DIR__ . '/../view/documentation/index/index.phtml',
            'documentation/index/docs' => __DIR__ . '/../view/documentation/index/docs.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml'
        )
    )
);
