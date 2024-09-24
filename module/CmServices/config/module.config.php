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
                    'application-CmServices' => [
                        'type'    => 'Literal',
                        'options' => [
                            'route'    => 'CmServices',
                            'defaults' => [
                                '__NAMESPACE__' => 'CmServices\Controller',
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
            'CmServicesService' => \CmServices\Service\CmServicesService::class,
            // Table
            'CmServicesTable' => \CmServices\Model\Tables\CmServicesTable::class
        ]
    ],
    'controllers' => [
        'invokables' => [
            'CmServices\Controller\List'         => \CmServices\Controller\ListController::class,
            'CmServices\Controller\Properties'   => \CmServices\Controller\PropertiesController::class,
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
