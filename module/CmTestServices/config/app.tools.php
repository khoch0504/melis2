<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'cmtestservices' => [
            'tools' => [
                'cmtestservices_tools' => [
                    'conf' => [
                        'title' => 'tr_cmtestservices_templates',
                        'id' => 'id_cmtestservices_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolCmTestServices',
                        'ajaxUrl' => '/melis/CmTestServices/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'cmtestservices-tbl-filter-limit' => [
                                    'module' => 'CmTestServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'cmtestservices-tbl-filter-search' => [
                                    'module' => 'CmTestServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'cmtestservices-tbl-filter-refresh' => [
                                    'module' => 'CmTestServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
                            ],
                        ],
                        'columns' => [
                            'DT_RowId' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'section_name' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'section_id' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'title' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'content' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'file' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'link_url' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
								'css' => ['width' => '13%'],
								'sortable' => true
							],
                            'updated_at' => [
								'text' => 'tr_aboutus_input_lang_cms_name',
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
                                  'module' => 'CmTestServices',
                                  'controller' => 'List',
                                  'action' => 'render-table-action-edit',
                            ],
                            'delete' => [
                                'module' => 'CmTestServices',
                                'controller' => 'List',
                                'action' => 'render-table-action-delete',
                            ],
                        ]
                    ],
                    'forms' => [
                        'cmtestservices_property_form' => [
                            'attributes' => [
                                'name' => 'cmTestServicesForm',
                                'id' => 'cmTestServicesForm',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
                                            'filestyle_options' => [
                                                'buttonBefore' => true,
                                                'buttonText' => 'tr_aboutus_common_choose_file',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                            'label' => 'tr_cmtestservices_title',
                                            'tooltip' => 'tr_cmtestservices_title',
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
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestservices_value_must_not_is_empty',
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
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestservices_value_must_not_is_empty',
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
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmtestservices_value_must_not_is_empty',
                                                ],
                                            ],
                                        ],
                                        [
                                            'name' => 'Regex',
                                            'options' => [
                                                'pattern' => '/^[-0-9]+(.[0-9]{1,2})?$/',
                                                'messages' => [
                                                    \Laminas\Validator\Regex::NOT_MATCH => 'tr_cmtestservices_value_must_not_is_empty'
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