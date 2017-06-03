<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'header_info' => array(
        'type' => 'box',
        'title' => __('Page Breadcrumbs', 'body-builder'),
        'options' => array(
               'is_breadcrumbs' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'enable' => array(
                                'label' => esc_html__('Header breadcrumb', 'body-builder'),
                                 'desc'         => esc_html__('Choose Enable if you want to custom Page Header for this page only.', 'body-builder'),
                                'help'          => esc_html__('Selcet for individual page breadcrumbs', 'body-builder'),
                                'type' => 'switch',
                                'value' => '1',
                                'right-choice' => array(
                                    'value' => '1',
                                    'label' => esc_html__('Enable', 'body-builder'),
                                ),
                                'left-choice' => array(
                                    'value' => '0',
                                    'label' => esc_html__('Disable', 'body-builder')
                                )
                            )
                        ),
                'choices' => array(
                    '1' => array(
                        'frame' => array(
                            'label' => esc_html__('Page Breadcrumbs', 'body-builder'),
                            'desc' => esc_html__('A Transparent background around overlay', 'body-builder'),
                            'type' => 'switch',
                            'right-choice' => array(
                                'value' => '1',
                                'label' => esc_html__('Yes', 'body-builder')
                            ),
                            'left-choice' => array(
                                'value' => '0',
                                'label' => esc_html__('No', 'body-builder'),
                            ),
                            'value' => 'yes'
                        ),
                        'image' => array(
                            'label' => esc_html__('Breadcrumbs Image', 'body-builder'),
                            'type' => 'upload',
                            'desc'  => esc_html__('Upload Your Breadcouns image', 'body-builder')
                        )
                    )
                ),
            )
            	
                
   
        ),
     ),

);