<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'router' => [
        'routes' => [
        	'melis-backoffice' => [
                'child_routes' => [
                    'application-CmTestRender' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'CmTestRender',
                            'defaults' => [
                                '__NAMESPACE__' => 'CmTestRender\Controller',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'default' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'    => '/[:controller[/:action]]',
                                    'constraints' => [
                                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                                    ],
                                    'defaults' => [
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
        	],
        ],
    ],
    'service_manager' => [
        'aliases' => [
            // Service
            'CmTestRenderService' => \CmTestRender\Service\CmTestRenderService::class,
            // Table
            'CmTestRenderTable' => \CmTestRender\Model\Tables\CmTestRenderTable::class
        ]
    ],
    'controllers' => [
        'invokables' => [
            'CmTestRender\Controller\List'         => \CmTestRender\Controller\ListController::class,
            'CmTestRender\Controller\Properties'   => \CmTestRender\Controller\PropertiesController::class,
        ],
    ],
    'view_manager' => [
        'template_map' => [
        ],
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];
