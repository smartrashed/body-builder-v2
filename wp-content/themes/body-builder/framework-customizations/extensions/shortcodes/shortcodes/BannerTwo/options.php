<?php
if (!defined('FW')) die('Forbidden');


$options = array(
   
    'banner_title'   => array(
        'label'   => esc_html__('Banner Title', 'body-builder'),
        'type'    => 'text'
    ),
    'banner_sub_title'   => array(
        'label'   => esc_html__('Banner Sub Title', 'body-builder'),
        'type'    => 'text'
    ),
    'readmore_link'   => array(
        'label'   => esc_html__('Read More', 'body-builder'),
        'type'    => 'text'
    ),
     
 
 
  

  'extra_body_class'   => array(
        'label'   => esc_html__('Extra Class', 'body-builder'),
        'type'    => 'text',
        'desc' => esc_html__('This options is for developer to put custom class', 'body-builder'),
    ),
     
);