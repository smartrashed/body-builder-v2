<?php 
if (!defined( 'FW' )) die('Forbidden');
$options = array(
    array(
        'type'    => 'box',
        'options' => array(
        	'header' => array(
		    'type' => 'tab',
		    'options' => array(
		        'logo'  => array( 'type' => 'upload','label'=>'Logo' ),
		        'breadcrumb_image'  => array( 'type' => 'upload','label'=>'Breadcrumbs' ),
		        'default_breadcrumbs'  => array( 
		        	'type' => 'switch',
		        	'label'=>'Default Vreadcrumbs',
		        	'left-choice' => array(
				        'value' => '1',
				        'label' => esc_html__('Yes', 'body-builder'),
				    ),
				    'right-choice' => array(
				        'value' => '0',
				        'label' => esc_html__('No', 'body-builder'),
				    ),
				    

		        ),
		    ),
		    'title' => esc_html__('Header Settings', 'body-builder'),
			),
			/* Blog settings */
			'blog_settings' => array(
			    'type' => 'tab',
			    'options' => array(
		        'blog_style' =>array(
                        'type'  => 'radio',
					    'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
					    'label' => __('Default Blog Style', 'body-builder'),
					    'desc'  => __('This section will default show on blog pages', 'body-builder'),
					    'help'  => __('Select an option for blog style', 'body-builder'),
					    'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
					        '1' => __('Grid', 'body-builder'),
					        '2' => __('List', 'body-builder'),
					        '3' => __('large', 'body-builder'),
					    ),
					    // Display choices inline instead of list
					    'inline' => false,
                    ),
			   	),
			    'title' => esc_html__('Blog Settings', 'body-builder'),
			),
			/* Map  settings */
			'gmap_api' => array(
			    'type' => 'tab',
			    'options' => array(
			        'gmapapi'  => array( 
			        'type' => 'text', 
			        'label' => esc_html__('Googl Map Api','body-builder') 
			        ),
			   	),
			    'title' => esc_html__('Google Map Api', 'body-builder'),
			),
			
			/* Footer  settings */
			'footer' => array(
			    'type' => 'tab',
			    'options' => array(
			        'footer'  => array( 
			        'type' => 'textarea', 
			        'label' => esc_html__('Footer Text ','body-builder') ,
			        ),
			   	),
			    	'title' => esc_html__('Footer Settings', 'body-builder'),
			),
			

        ),
    ),

    
);