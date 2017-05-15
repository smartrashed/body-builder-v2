<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'gallery_image'   => array(
        'label'   => esc_html__('Image Gallery', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Gallery Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    'gallery_image_title'   => array(
        'label'   => esc_html__('Gallery Image Over Title', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Gallery Image Title', 'body-builder'),
        'type'    => 'text'
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
        ),
        
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => esc_html__('Add Image', 'body-builder'),
        'sortable' => true,
    ),    
    'video_image'   => array(
        'label'   => esc_html__('Video Image', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Video Image ', 'body-builder'),
        'type'    => 'upload'  
    ),
    'video_popup_icon'   => array(
        'label'   => esc_html__('Third Image Over Icon', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Third Image Icon', 'body-builder'),
        'type'    => 'icon-v2',
        'preview_size' => 'medium',
        'attr'  => array( 'class' => 'gvideo-icon'), 
    ),
    'video_popup_link'   => array(
        'label'   => esc_html__('Video Popup Link', 'body-builder'),
        'desc'    => esc_html__('Video Popup Link add here', 'body-builder'),
        'type'    => 'text'
    ),
    'popup_image'   => array(
        'label'   => esc_html__('Popup Image', 'body-builder'),
        'desc'    => esc_html__('Home Page One About Section Popup Image ', 'body-builder'),
        'type'    => 'upload'
    ),
    'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
);