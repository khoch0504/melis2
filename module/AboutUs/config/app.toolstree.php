<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'meliscore' => [
            'interface' => [
                'meliscore_leftmenu' => [
                    'interface' => [
                        'meliscustom_toolstree_section' => [
                            'interface' => [
                                'aboutus_conf' => [
                                    'conf' => [
                                        'id' => 'id_aboutus_leftmenu',
                                        'melisKey' => 'aboutus_leftmenu',
                                        'name' => 'tr_aboutus_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'aboutus_tool' => [
                                            'conf' => [
                                                'id' => 'id_aboutus_tool',
                                                'melisKey' => 'aboutus_tool',
                                                'name' => 'tr_aboutus_title',
                                                'icon' => 'fa fa fa-book',
                                            ],
                                            'forward' => [
                                                'module' => 'AboutUs',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'aboutus_header' => [
                                                    'conf' => [
                                                        'id' => 'id_aboutus_header',
                                                        'melisKey' => 'aboutus_header',
                                                        'name' => 'tr_aboutus_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'AboutUs',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'aboutus_content' => [
                                                    'conf' => [
                                                        'id' => 'id_aboutus_content',
                                                        'melisKey' => 'aboutus_content',
                                                        'name' => 'tr_aboutus_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'AboutUs',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [
                                                        'aboutus_modal' => [
                                                            'conf' => [
                                                                'id' => 'id_aboutus_modal',
                                                                'melisKey' => 'aboutus_modal',
                                                                'name' => 'tr_aboutus_modal',
                                                            ],
                                                            'forward' => [
                                                                'module' => 'AboutUs',
                                                                'controller' => 'List',
                                                                'action' => 'render-modal-form',
                                                                'jscallback' => '',
                                                                'jsdatas' => []
                                                            ],
                                                            'interface' => [
                                                                'aboutus_properties_form' => [
                                                                    'conf' => [
                                                                        'id' => 'id_aboutus_properties_form',
                                                                        'melisKey' => 'aboutus_properties_form',
                                                                        'name' => 'tr_aboutus_properties',
                                                                        'icon' => 'cogwheel'
                                                                    ],
                                                                    'forward' => [
                                                                        'module' => 'AboutUs',
                                                                        'controller' => 'Properties',
                                                                        'action' => 'render-properties-form',
                                                                        'jscallback' => '',
                                                                        'jsdatas' => []
                                                                    ]
                                                                ],
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];