<?php

/**
 * Melis Technology (http://www.melistechnology.com]
 *
 * @copyright Copyright (c] 2015 Melis Technology (http://www.melistechnology.com]
 *
 */

return [
    'plugins' => [
        'cmservices' => [
            'tools' => [
                'cmservices_tools' => [
                    'conf' => [
                        'title' => 'tr_cmservices_templates',
                        'id' => 'id_cmservices_templates',
                    ],
                    'table' => [
                        // table ID
                        'target' => '#tableToolCmServices',
                        'ajaxUrl' => '/melis/CmServices/List/getList',
                        'dataFunction' => '',
                        'ajaxCallback' => '',
                        'filters' => [
                            'left' => [
                                'cmservices-tbl-filter-limit' => [
                                    'module' => 'CmServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-limit',
                                ],
                            ],
                            'center' => [
                                'cmservices-tbl-filter-search' => [
                                    'module' => 'CmServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-search',
                                ],
                            ],
                            'right' => [
                                'cmservices-tbl-filter-refresh' => [
                                    'module' => 'CmServices',
                                    'controller' => 'List',
                                    'action' => 'render-table-filter-refresh',
                                ],
                            ],
                        ],
                        'columns' => [
                            'DT_RowId' => [
								'text' => 'tr_cmservices_input_lang_cms_id',
								'css' => ['width' => '33%'],
								'sortable' => true
							],
                            'lang_cms_locale' => [
								'text' => 'tr_cmservices_input_lang_cms_locale',
								'css' => ['width' => '33%'],
								'sortable' => true
							],
                            'lang_cms_name' => [
								'text' => 'tr_cmservices_input_lang_cms_name',
								'css' => ['width' => '33%'],
								'sortable' => true
							]
                        ],
                        // define what columns can be used in searching
                        'searchables' => [
							'lang_cms_id',
							'lang_cms_locale',
							'lang_cms_name'
                        ],
                        'actionButtons' => [
                            'edit' => [
                                  'module' => 'CmServices',
                                  'controller' => 'List',
                                  'action' => 'render-table-action-edit',
                            ],
                            'delete' => [
                                'module' => 'CmServices',
                                'controller' => 'List',
                                'action' => 'render-table-action-delete',
                            ],
                        ]
                    ],
                    'forms' => [
                        'cmservices_property_form' => [
                            'attributes' => [
                                'name' => 'cmServicesForm',
                                'id' => 'cmServicesForm',
                                'method' => 'POST',
                                'action' => '',
                            ],
                            'hydrator'  => 'Laminas\Hydrator\ArraySerializableHydrator',
                            'elements' => [
                                [
                                    'spec' => [
                                        'name' => 'lang_cms_id',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmservices_input_lang_cms_id',
                                            'tooltip' => 'tr_cmservices_input_lang_cms_id_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'lang_cms_id',
                                            'class' => 'form-control',
                                            'required' => false,
                                            'disabled' => 'disabled'
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'lang_cms_locale',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmservices_input_lang_cms_locale',
                                            'tooltip' => 'tr_cmservices_input_lang_cms_locale_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'lang_cms_locale',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ],
                                [
                                    'spec' => [
                                        'name' => 'lang_cms_name',
                                        'type' => 'MelisText',
                                        'options' => [
                                            'label' => 'tr_cmservices_input_lang_cms_name',
                                            'tooltip' => 'tr_cmservices_input_lang_cms_name_tooltip',
                                        ],
                                        'attributes' => [
                                            'id' => 'lang_cms_name',
                                            'class' => 'form-control',
                                            'required' => true,
                                            
                                        ],
                                    ],
                                ]
                            ],
                            'input_filter' => [
                                'lang_cms_locale' => [
                                    'name'     => 'lang_cms_locale',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmservices_value_must_not_is_empty',
                                                ],
                                            ],
                                        ]
                                    ],
                                    'filters'  => [
                                        ['name' => 'StripTags'],
                                        ['name' => 'StringTrim'],
                                    ],
                                ],
                                'lang_cms_name' => [
                                    'name'     => 'lang_cms_name',
                                    'required' => true,
                                    'validators' => [
                                        [
                                            'name' => 'NotEmpty',
                                            'options' => [
                                                'messages' => [
                                                    \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_cmservices_value_must_not_is_empty',
                                                ],
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