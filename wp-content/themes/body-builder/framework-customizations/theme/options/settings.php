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
		        'breadcrumbs'  => array( 'type' => 'upload','label'=>'Breadcrumbs' ),
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
                        'label' => esc_html__('Select Default Blog style', 'body-builder'),
                        'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
                            '1' => esc_html__('Blog Grid', 'body-builder'),
                            '2' => esc_html__('Blog List', 'body-builder'),
                            '3' => esc_html__('Blog Large', 'body-builder'),
                        ),
                        // Display choices inline instead of list
                        'inline' => true,
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
			        'label' => esc_html__('Googl Map Api') 
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
			        'label' => esc_html__('Footer Text ') 
			        ),
			   	),
			    	'title' => esc_html__('Footer Settings', 'body-builder'),
			),
        	),
    ),
    
);