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
                                'cmservices_conf' => [
                                    'conf' => [
                                        'id' => 'id_cmservices_leftmenu',
                                        'melisKey' => 'cmservices_leftmenu',
                                        'name' => 'tr_cmservices_title',
                                        'icon' => 'fa fa-puzzle-piece',
                                    ],
                                    'interface' => [
                                        'cmservices_tool' => [
                                            'conf' => [
                                                'id' => 'id_cmservices_tool',
                                                'melisKey' => 'cmservices_tool',
                                                'name' => 'tr_cmservices_title',
                                                'icon' => 'fa fa-puzzle-piece',
                                            ],
                                            'forward' => [
                                                'module' => 'CmServices',
                                                'controller' => 'List',
                                                'action' => 'render-tool',
                                                'jscallback' => '',
                                                'jsdatas' => []
                                            ],
                                            'interface' => [
                                                'cmservices_header' => [
                                                    'conf' => [
                                                        'id' => 'id_cmservices_header',
                                                        'melisKey' => 'cmservices_header',
                                                        'name' => 'tr_cmservices_header',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmServices',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-header',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                ],
                                                'cmservices_content' => [
                                                    'conf' => [
                                                        'id' => 'id_cmservices_content',
                                                        'melisKey' => 'cmservices_content',
                                                        'name' => 'tr_cmservices_content',
                                                    ],
                                                    'forward' => [
                                                        'module' => 'CmServices',
                                                        'controller' => 'List',
                                                        'action' => 'render-tool-content',
                                                        'jscallback' => '',
                                                        'jsdatas' => []
                                                    ],
                                                    'interface' => [
                                                        'cmservices_modal' => [
                                                            'conf' => [
                                                                'id' => 'id_cmservices_modal',
                                                                'melisKey' => 'cmservices_modal',
                                                                'name' => 'tr_cmservices_modal',
                                                            ],
                                                            'forward' => [
                                                                'module' => 'CmServices',
                                                                'controller' => 'List',
                                                                'action' => 'render-modal-form',
                                                                'jscallback' => '',
                                                                'jsdatas' => []
                                                            ],
                                                            'interface' => [
                                                                'cmservices_properties_form' => [
                                                                    'conf' => [
                                                                        'id' => 'id_cmservices_properties_form',
                                                                        'melisKey' => 'cmservices_properties_form',
                                                                        'name' => 'tr_cmservices_properties',
                                                                        'icon' => 'cogwheel'
                                                                    ],
                                                                    'forward' => [
                                                                        'module' => 'CmServices',
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