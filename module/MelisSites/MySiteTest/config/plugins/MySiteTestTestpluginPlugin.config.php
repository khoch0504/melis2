<?php

return [
    'plugins' => [
        'melisfront' => [
            'plugins' => [
                'MySiteTestTestpluginPlugin' => [
                    'front' => [
                        'template_path' => ['MySiteTest/plugins/test-plugin'],
                        'title' => 'Title',
						'date_create' => '2024-09-25',
                        'id' => 'testplugin',                                                         
                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/MySiteTest/plugins/css/plugin.Testplugin.css',
                            ],
                            'js' => [
                                '/MySiteTest/plugins/js/plugin.Testplugin.init.js',
                            ],
                        ],                       
                    ],
                    'melis' => [
                        'subcategory' => [
                            'id' => 'BASICS',
                            'title' => 'tr_MelisFrontSubcategoryPageBasics_Title'
                        ],
                        'name' => 'tr_MySiteTestTestpluginPlugin_Name',
                        'thumbnail' => '/MySiteTest/plugins/images/MySiteTestTestpluginPlugin_thumbnail.jpg',
                        'description' => 'tr_MySiteTestTestpluginPlugin_Description',
                        'files' => [
                            'css' => [
                                '/MySiteTest/plugins/css/plugin.Testplugin.css',
                            ],
                            'js' => [
                                '/MySiteTest/plugins/js/plugin.Testplugin.init.js',
                            ],
                        ],
                        'js_initialization' => [],
                        /*
                        * if set to empty, plugin menu will be shown under 'Others' section                       
                        *  - available section for templating plugins as of 2019-05-16
                        *    - MelisCms
                        *    - MelisMarketing
                        *    - MelisSite
                        *    - Others
                        *    - CustomProjects
                        */
                        'section' => '',
                        'modal_form' => [
                            'plugin_testplugin_tab_1' => [
                                'tab_title' => 'tr_mysitetest_testplugin_plugin_tab_properties',
                                'tab_icon'  => 'fa fa-cog',
                                'tab_form_layout' => 'MySiteTest/plugins/plugin-test-plugin-tab-1-modal-form',
                                'attributes' => [
                                    'name' => 'plugin_testplugin_tab_1',
                                    'id' => 'plugin_testplugin_tab_1',
                                    'method' => '',
                                    'action' => '',
                                ],
                                'hydrator'  => 'Laminas\Hydrator\ArraySerializableHydrator',
                                'elements' => [
                                    [
                                        'spec' => [
                                            'name' => 'template_path',
                                            'type' => 'Select',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_testplugin_template_path_label',
                                                'tooltip' => 'tr_melis_mysitetest_testplugin_template_path tooltip',												'value_options' => [
													'MySiteTest/plugins/test-plugin'=> 'tr_melis_mysitetest_testplugin_template_path_MySiteTestpluginstestplugin_label',
												],
												'empty_option' => 'tr_meliscore_common_choose',
												'disable_inarray_validator' => true,
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'template_path',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'title',
                                            'type' => 'MelisText',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_testplugin_title_label',
                                                'tooltip' => 'tr_melis_mysitetest_testplugin_title tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'title',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
									[
                                        'spec' => [
                                            'name' => 'date_create',
                                            'type' => 'MelisText',
                                            'options' => [
                                                'label' => 'tr_melis_mysitetest_testplugin_date_create_label',
                                                'tooltip' => 'tr_melis_mysitetest_testplugin_date_create tooltip',
                                                                                               
                                            ],
                                            'attributes' => [
                                                'id' => 'date_create',
                                                'class' => 'form-control',
                                                'required' => '',
                                            ],
                                        ],
                                    ],

                                ],
                                'input_filter' => [
                                    'template_path' => [
                                        'name'     => 'template_path',
                                        'required' => true,    
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_common_input_empty',
                                                    ],
                                                ],
                                            ],
    
        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],

									'title' => [
                                        'name'     => 'title',
                                        'required' => true,    
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_common_input_empty',
                                                    ],
                                                ],
                                            ],
    
        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],

									'date_create' => [
                                        'name'     => 'date_create',
                                        'required' => false,    
                                        'validators' => [        
                                        ],
                                        'filters'  => [
                                        ],
                                    ],


                                ],
                            ],
                                                  
                        ]
                    ],
                ],
            ],
        ],
    ],
];