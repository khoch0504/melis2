<?php

return [
    'plugins' => [
        'melisfront' => [
            'plugins' => [
                'CmTestRenderPlugin' => [
                    'front' => [
                        'template_path' => ['CmTestRender/plugins/cm-test-render-plugin'],
                        'id' => 'CmTestRender',

                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/CmTestRender/plugins/css/plugin.cmTestRender.css',
                            ],
                            'js' => [
                                '/CmTestRender/plugins/js/plugin.cmTestRender.init.js',
                            ],
                        ],
                    ],
                    'melis' => [
                        'subcategory' => array(
                            'id' => 'cmTestRenderPlugin',
                            'title' => 'tr_cmtestrender_plugin'
                        ),
                        'name' => 'tr_cmtestrender_plugin_section_1',
                        'thumbnail' => '/CmTestRender/plugins/images/CmTestRenderPlugin_thumb.jpg',
                        'description' => 'tr_cmtestrender_plugin_desc_section_1',
                        'section' => 'CustomProjects',
                        'files' => [
                            'css' => [
                                '/CmTestRender/plugins/css/plugin.cmTestRender.css',
                            ],
                            'js' => [
                                '/CmTestRender/plugins/js/plugin.cmTestRender.init.js',
                            ],
                        ],
                        'js_initialization' => [],
                        'modal_form' => [
                            'cm_test_render_plugin_settings_form' => [
                                'tab_title' => 'tr_cmtestrender_plugin_properties',
                                'tab_icon' => 'fa fa-cog',
                                'tab_form_layout' => 'MelisFront/modal-template-form',
                                'attributes' => [
                                    'name' => 'cm_test_render_plugin_settings_form',
                                    'id' => 'id_cm_test_render_plugin_settings_form',
                                    'method' => 'POST',
                                    'action' => '',
                                ],
                                'hydrator' => 'Laminas\Hydrator\ArraySerializableHydrator',
                                'elements' => [
                                    [
                                        'spec' => [
                                            'name' => 'template_path',
                                            'type' => 'MelisEnginePluginTemplateSelect',
                                            'options' => [
                                                'label' => 'tr_melis_Plugins_Template',
                                                'tooltip' => 'tr_melis_Plugins_Template tooltip',
                                                'empty_option' => 'tr_melis_Plugins_Choose',
                                                'disable_inarray_validator' => true,
                                            ],
                                            'attributes' => [
                                                'id' => 'id_page_tpl_id',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
                                ],
                                'input_filter' => [
                                    'template_path' => [
                                        'name' => 'template_path',
                                        'required' => true,
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_template_path_empty',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'filters' => [],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'CmTestRender2Plugin' => [
                    'front' => [
                        'template_path' => ['CmTestRender/plugins/cm-test-render-plugin'],
                        'id' => 'CmTestRender',

                        // List the files to be automatically included for the correct display of the plugin
                        // To overide a key, just add it again in your site module
                        // To delete an entry, use the keyword "disable" instead of the file path for the same key
                        'files' => [
                            'css' => [
                                '/CmTestRender/plugins/css/plugin.cmTestRender.css',
                            ],
                            'js' => [
                                '/CmTestRender/plugins/js/plugin.cmTestRender.init.js',
                            ],
                        ],
                    ],
                    'melis' => [
                        'subcategory' => array(
                            'id' => 'cmTestRenderPlugin',
                            'title' => 'tr_cmtestrender_plugin'
                        ),
                        'name' => 'tr_section_1_title',
                        'thumbnail' => '/CmTestRender/plugins/images/CmTestRenderPlugin_thumb.jpg',
                        'description' => 'tr_section_1_desc',
                        'section' => 'CustomProjects',
                        'files' => [
                            'css' => [
                                '/CmTestRender/plugins/css/plugin.cmTestRender.css',
                            ],
                            'js' => [
                                '/CmTestRender/plugins/js/plugin.cmTestRender.init.js',
                            ],
                        ],
                        'js_initialization' => [],
                        'modal_form' => [
                            'cm_test_render_plugin_settings_form' => [
                                'tab_title' => 'tr_cmtestrender_plugin_properties',
                                'tab_icon' => 'fa fa-cog',
                                'tab_form_layout' => 'MelisFront/modal-template-form',
                                'attributes' => [
                                    'name' => 'cm_test_render_plugin_settings_form',
                                    'id' => 'id_cm_test_render_plugin_settings_form',
                                    'method' => 'POST',
                                    'action' => '',
                                ],
                                'hydrator' => 'Laminas\Hydrator\ArraySerializableHydrator',
                                'elements' => [
                                    [
                                        'spec' => [
                                            'name' => 'template_path',
                                            'type' => 'MelisEnginePluginTemplateSelect',
                                            'options' => [
                                                'label' => 'tr_melis_Plugins_Template',
                                                'tooltip' => 'tr_melis_Plugins_Template tooltip',
                                                'empty_option' => 'tr_melis_Plugins_Choose',
                                                'disable_inarray_validator' => true,
                                            ],
                                            'attributes' => [
                                                'id' => 'id_page_tpl_id',
                                                'class' => 'form-control',
                                                'required' => 'required',
                                            ],
                                        ],
                                    ],
                                ],
                                'input_filter' => [
                                    'template_path' => [
                                        'name' => 'template_path',
                                        'required' => true,
                                        'validators' => [
                                            [
                                                'name' => 'NotEmpty',
                                                'options' => [
                                                    'messages' => [
                                                        \Laminas\Validator\NotEmpty::IS_EMPTY => 'tr_front_template_path_empty',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'filters' => [],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
