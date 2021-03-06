<?php
if (!defined('FW')) die('Forbidden');


$options = array(
    'section_title'   => array(
        'label'   => esc_html__('Section title', 'body-builder'),
        'desc'    => esc_html__('Home Two Images and Gallery Section Title ', 'body-builder'),
        'type'    => 'text'
    ),
    'gallery' => array(
        'type'  => 'addable-box',
        'label' => esc_html__('Video List', 'body-builder'),
        'box-options' => array(
            'vthumb' => array( 
                'type' => 'upload',
                'image_only' => true,
                'label' => esc_html__('Video Thumb', 'body-builder'),                
            ),
            'vthumb_icon' => array( 
                'type' => 'upload',
                'image_only' => true,
                'label' => esc_html__('Video Thumb Icon', 'body-builder'),                
            ),
            'vurl' => array( 
                'type' => 'text',
                'label' => esc_html__('Embed Video URL', 'body-builder'),                
            ),
                  
        ),
        'desc' => esc_html__('Please visit this url to know how to get youtube embaded url "https://ck12support.zendesk.com/hc/en-us/articles/204354764-How-to-get-a-YouTube-Embed-code"', 'body-builder'),
        'template' => '{{- title }}', // box title
        'box-controls' => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-images-alt2"></small>',
        ),
        'limit' => 2, // limit the number of boxes that can be added
        'add-button-text' => esc_html__('Add Video', 'body-builder'),
        'sortable' => false,
    ),
    'images' => array(
        'type'  => 'addable-box',
        'label' => esc_html__('Image List', 'body-builder'),
        'box-options' => array(
            'ithumb' => array( 
                'type' => 'upload',
                'image_only' => true,
                'label' => esc_html__('Image Thumb', 'body-builder'),                
            ),
            'ithumb_icon' => array( 
                'type' => 'upload',
                'image_only' => true,
                'label' => esc_html__('Image Thumb Icon', 'body-builder'),                
            ),
            'pop_up' => array( 
                'type' => 'upload',
                'label' => esc_html__('Popup Image', 'body-builder'),                
            ),
                  
        ),
        'desc' => esc_html__('Please visit this url to know how to get youtube embaded url "https://ck12support.zendesk.com/hc/en-us/articles/204354764-How-to-get-a-YouTube-Embed-code"', 'body-builder'),
        'template' => '{{- title }}', // box title
        'box-controls' => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-images-alt2"></small>',
        ),
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => esc_html__('Add Image', 'body-builder'),
        'sortable' => true,
    ),
    
);