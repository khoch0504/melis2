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
                                'cmtestservices_conf' => [
                                    'conf' => [
                                        'id' => 'id_cmtestservices_leftmenu',
                                        'melisKey' => 'cmtestservices_leftmenu',
                                        'name' => 'tr_cmtestservices_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'cmtestservices_tool' => [
                                            'conf' => [
                                                'id' => 'id_cmtestservices_tool',
                                                'melisKey' => 'cmtestservices_tool',
                                                'name' => 'tr_cmtestservices_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'CmTestServices',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'cmtestservices_header' => [
                                                    'conf' => [
                                                        'id' => 'id_cmtestservices_header',
                                                        'melisKey' => 'cmtestservices_header',
                                                        'name' => 'tr_cmtestservices_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmTestServices',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'cmtestservices_content' => [
                                                    'conf' => [
                                                        'id' => 'id_cmtestservices_content',
                                                        'melisKey' => 'cmtestservices_content',
                                                        'name' => 'tr_cmtestservices_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmTestServices',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [
                                                        'cmtestservices_modal' => [
                                                            'conf' => [
                                                                'id' => 'id_cmtestservices_modal',
                                                                'melisKey' => 'cmtestservices_modal',
                                                                'name' => 'tr_cmtestservices_modal',
                                                            ],
                                                            'forward' => [
                                                                'module' => 'CmTestServices',
                                                                'controller' => 'List',
                                                                'action' => 'render-modal-form',
                                                                'jscallback' => '',
                                                                'jsdatas' => []
                                                            ],
                                                            'interface' => [
                                                                'cmtestservices_properties_form' => [
                                                                    'conf' => [
                                                                        'id' => 'id_cmtestservices_properties_form',
                                                                        'melisKey' => 'cmtestservices_properties_form',
                                                                        'name' => 'tr_cmtestservices_properties',
                                                                        'icon' => 'cogwheel'
                                                                    ],
                                                                    'forward' => [
                                                                        'module' => 'CmTestServices',
                                                                        'controller' => 'Properties',
                                                                        'action' => 'render-properties-form',
                                                                        'jscallback' => '',
                                                                        'jsdatas' => []
                                                                    ]
                                                                ],
#TCTOOLINTERFACE
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