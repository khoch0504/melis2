<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'cmtestrender' => [
            'tools' => [
                'cmtestrender_tools' => [
                    'conf' => [
                        'title' => 'tr_cmtestrender_templates',
                        'id' => 'id_cmtestrender_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolCmTestRender',
                        'ajaxUrl' => '/melis/CmTestRender/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'cmtestrender-tbl-filter-limit' => [
                                    'module' => 'CmTestRender',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'cmtestrender-tbl-filter-search' => [
                                    'module' => 'CmTestRender',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'cmtestrender-tbl-filter-refresh' => [
                                    'module' => 'CmTestRender',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
                            ],
                        ],
                        'columns' => [
                            'DT_RowId' => [
								'text' => 'tr_cmtestrender_input_id',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'section_name' => [
								'text' => 'tr_cmtestrender_input_section_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'section_id' => [
								'text' => 'tr_cmtestrender_input_section_id',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'title' => [
								'text' => 'tr_cmtestrender_input_title',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'content' => [
								'text' => 'tr_cmtestrender_input_content',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'file' => [
								'text' => 'tr_cmtestrender_input_file',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'link_url' => [
								'text' => 'tr_cmtestrender_input_link_url',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'updated_at' => [
								'text' => 'tr_cmtestrender_input_updated_at',
								'css' => ['width' => '13%'],
								'sortable' => true
							]
                        ],
                        // define what columns can be used in searching
                        'searchables' => [
							'id',
							'section_name',
							'title',
							'content',
							'file',
							'link_url',
							'section_id',
							'updated_at'
                        ],
                        'actionButtons' => [
                            'edit' => [
                                  'module' => 'CmTestRender',
                                  'controller' => 'List',
                                  'action' => 'render-table-action-edit',
                            ],
                            'delete' => [
                                'module' => 'CmTestRender',
                                'controller' => 'List',
                                'action' => 'render-table-action-delete',
                            ],
                        ]
                    ],
                    'forms' => [
                        'cmtestrender_property_form' => [
                            'attributes' => [
                                'name' => 'cmTestRenderForm',
                                'id' => 'cmTestRenderForm',
                                'method' => 'POST',
                                'action' => '',
                            ],
                            'hydrator'  => 'Laminas\Hydrator\ArraySerializableHydrator',
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'id',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_id',
                                            'tooltip' => 'tr_cmtestrender_input_id_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'id',
                                            'class' => 'form-control',
                                            'required' => false,
                                            'disabled' => 'disabled'
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'section_name',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_section_name',
                                            'tooltip' => 'tr_cmtestrender_input_section_name_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'section_name',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'title',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_title',
                                            'tooltip' => 'tr_cmtestrender_input_title_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'title',
                                            'class' => 'form-control',
                                            'required' => false,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'content',
                                        'type' => 'MelisCoreTinyMCE',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_content',
                                            'tooltip' => 'tr_cmtestrender_input_content_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'content',
                                            'class' => 'form-control',
                                            'required' => false,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'file',
                                        'type' => 'File',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_file',
                                            'tooltip' => 'tr_cmtestrender_input_file_tooltip',
                                            'filestyle_options' => [
                                                'buttonBefore' => true,
                                                'buttonText' => 'tr_cmtestrender_common_choose_file',
                                            ]
                                        ],
                                        'attributes' => [
                                            'id' => 'file',
                                            'class' => 'form-control',
                                            'required' => false,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'link_url',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_link_url',
                                            'tooltip' => 'tr_cmtestrender_input_link_url_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'link_url',
                                            'class' => 'form-control',
                                            'required' => false,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'section_id',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmtestrender_input_section_id',
                                            'tooltip' => 'tr_cmtestrender_input_section_id_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'section_id',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ]
                            ],
                            'input_filter' => [
                                'section_name' => [
                                    'name'     => 'section_name',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestrender_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'title' => [
                                    'name'     => 'title',
                                    'required' => false,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestrender_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'content' => [
                                    'name'     => 'content',
                                    'required' => false,
                                    'validators' => [

                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'file' => [
                                    'name'     => 'file',
                                    'required' => false,
                                    'validators' => [

                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'link_url' => [
                                    'name'     => 'link_url',
                                    'required' => false,
                                    'validators' => [

                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'section_id' => [
                                    'name'     => 'section_id',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestrender_value_must_not_is_empty',
                                                ],
                                            ],
                                        ],
                                        [
                                            'name' => 'Regex',
                                            'options' => [
                                                'pattern' => '/^[-0-9]+(.[0-9]{1,2})?$/',
                                                'messages' => [
                                                    \Laminas\Validator\Regex::NOT_MATCH => 'tr_cmtestrender_value_must_numeric'
                                                ],
                                                'encoding' => 'UTF-8',
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ]
                            ]
                        ],

                    ]
                ]
            ]
        ]
    ]
];