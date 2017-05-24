<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'logos' => array(
        'type'  => 'addable-box',
        'label' => esc_html__('Image List', 'body-builder'),
        'box-options' => array(
            'ithumb' => array( 
                'type' => 'upload',
                'image_only' => true,
                'label' => esc_html__('Image Thumb', 'body-builder'),                
            ),
            'logo_link' => array(
                'label'   => esc_html__('Image Link', 'body-builder'),
                'type'    => 'text',
                'desc' => esc_html__('Put Here The Logo Link', 'body-builder'),
            ),
        ),
        
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => esc_html__('Add Images', 'body-builder'),
        'sortable' => true,
    ),  
   'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
   

);