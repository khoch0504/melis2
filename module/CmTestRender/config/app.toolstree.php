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
                                'cmtestrender_conf' => [
                                    'conf' => [
                                        'id' => 'id_cmtestrender_leftmenu',
                                        'melisKey' => 'cmtestrender_leftmenu',
                                        'name' => 'tr_cmtestrender_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'cmtestrender_tool' => [
                                            'conf' => [
                                                'id' => 'id_cmtestrender_tool',
                                                'melisKey' => 'cmtestrender_tool',
                                                'name' => 'tr_cmtestrender_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'CmTestRender',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'cmtestrender_header' => [
                                                    'conf' => [
                                                        'id' => 'id_cmtestrender_header',
                                                        'melisKey' => 'cmtestrender_header',
                                                        'name' => 'tr_cmtestrender_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmTestRender',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'cmtestrender_content' => [
                                                    'conf' => [
                                                        'id' => 'id_cmtestrender_content',
                                                        'melisKey' => 'cmtestrender_content',
                                                        'name' => 'tr_cmtestrender_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmTestRender',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [
                                                        'cmtestrender_modal' => [
                                                            'conf' => [
                                                                'id' => 'id_cmtestrender_modal',
                                                                'melisKey' => 'cmtestrender_modal',
                                                                'name' => 'tr_cmtestrender_modal',
                                                            ],
                                                            'forward' => [
                                                                'module' => 'CmTestRender',
                                                                'controller' => 'List',
                                                                'action' => 'render-modal-form',
                                                                'jscallback' => '',
                                                                'jsdatas' => []
                                                            ],
                                                            'interface' => [
                                                                'cmtestrender_properties_form' => [
                                                                    'conf' => [
                                                                        'id' => 'id_cmtestrender_properties_form',
                                                                        'melisKey' => 'cmtestrender_properties_form',
                                                                        'name' => 'tr_cmtestrender_properties',
                                                                        'icon' => 'cogwheel'
                                                                    ],
                                                                    'forward' => [
                                                                        'module' => 'CmTestRender',
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