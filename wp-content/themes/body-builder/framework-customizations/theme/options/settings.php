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
			'footer' => array(
			    'type' => 'tab',
			    'options' => array(
			        'footer'  => array( 'type' => 'text', 'label' => esc_html__('footer') ),
			    ),
			    'title' => esc_html__('Footer Settings', 'body-builder'),
			    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
			),
        	)
    ),
    /* Footer  */
    array(
        'type'    => 'box',
        'options' => array()
    ),
    /* Footer  */
    array(
        'type'    => 'box',
        'options' => array()
    )
);