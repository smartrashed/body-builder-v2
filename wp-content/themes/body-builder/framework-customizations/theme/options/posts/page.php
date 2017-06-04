<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'header_info' => array(
        'type' => 'box',
        'title' => __('Page Breadcrumbs', 'body-builder'),
        'options' => array(
               'page_breadcrumbs' => array(
                        'type' => 'multi-picker',
                        'label' => false,
                        'desc' => false,
                        'picker' => array(
                            'enable' => array(
                                'label' => esc_html__('Header breadcrumb', 'body-builder'),
                                 'desc'         => esc_html__('Choose Enable if you want to custom Page Breadcrumbs for this page only.', 'body-builder'),
                                'help'          => esc_html__('Selcet for individual page breadcrumbs', 'body-builder'),
                                'type' => 'switch',
                                'value' => 'yes',
                                'right-choice' => array(
                                    'value' => 'yes',
                                    'label' => esc_html__('Enable', 'body-builder'),
                                ),
                                'left-choice' => array(
                                    'value' => 'no',
                                    'label' => esc_html__('Disable', 'body-builder')
                                )
                            )
                        ),
                'choices' => array(
                    'yes' => array(
                         'header_breadcrumb' => array(
                            'label' => esc_html__('Show header Breadcrumbs', 'excite'),
                            'type' => 'switch',
                            'right-choice' => array(
                                'value' => 'yes',
                                'label' => esc_html__('Yes', 'excite')
                            ),
                            'left-choice' => array(
                                'value' => 'no',
                                'label' => esc_html__('No', 'excite'),
                            ),
                            'value' => 'yes'
                        ),
                        'breadcrumb_image' => array(
                            'label' => esc_html__('Breadcrumbs Image', 'body-builder'),
                            'type' => 'upload',
                            'desc'  => esc_html__('Upload Your Breadcouns image', 'body-builder')
                        ),

                    ),

                ),
            )
            	
                
   
        ),
     ),

);