<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Training;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/training',
                    'defaults' => array(
                        'controller' => 'Training\Controller\Index',
                        'action' => 'show',
                    ),
                ),
            ),
        // The following is a route to simplify getting started creating
// new controllers and actions without needing to create a new
// module. Simply drop new controllers in, and you can access them
// using the path /application/:controller/:action
        ),
    ),
    'service_manager' => [
        'services' => [
        ],
        'invokables' => [
            'service.resume' => Service\ResumeService::class
        ],
//            'factories' => [
//                'service.resume' => function () {
//                    $service= new ResumeService();
//                    return $service;
//                }
//            ]
        'factories' => array(
//            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory',
//            'service.resume' => ResumeServiceFactory::class
//            'service.resume' => function() {
//                $service = new Service\ResumeService();
//
//                return $service;
//}
        ),
//        'shared' => [
//            'service.resume' => true
//]
        'initializers' => [
            Initializer\TimeProviderInitializer::class
        ],
    ],
    'controllers' => array(
        'invokables' => array(
            'Training\Controller\Index' => Controller\CvController::class,
            'Training\Initializer\TimeProviderInitializer' => Initializer\TimeProviderInitializer::class
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/training/index/index.phtml',
            'error/404' => __DIR__ . '/../view/error/404.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'test' => __DIR__ . '/../view/test/testrouting.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(),
        ),
    ),
);
