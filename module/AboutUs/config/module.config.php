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
                    'application-AboutUs' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'AboutUs',
                            'defaults' => [
                                '__NAMESPACE__' => 'AboutUs\Controller',
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
            'AboutUsService' => \AboutUs\Service\AboutUsService::class,
            // Table
            'AboutUsTable' => \AboutUs\Model\Tables\AboutUsTable::class
        ]
    ],
    'controllers' => [
        'invokables' => [
            'AboutUs\Controller\List' => \AboutUs\Controller\ListController::class,
            'AboutUs\Controller\Properties'   => \AboutUs\Controller\PropertiesController::class,
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
    ]
];
