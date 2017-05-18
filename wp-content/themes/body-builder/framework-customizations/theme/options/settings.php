<?php
$options = array(
       'header_option' => array(
            'type' => 'box',
            'title' => __('Header Settings', '{domain}'),
            'options' => array(
                 
                    
                    
         
        ),
    ),
   'footer_option' => array(
        'type' => 'box',
        'title' => __('Footer settings', '{domain}'),
        'options' => array(
             
                'footer_copy_right' => array(
                    'type'  => 'text',
                    'label' => __('Footer Text', 'body-builder'),
                    'desc'  => __('Footer Text Description', 'body-builder'),
                ),
      
            ),
    ),
   'gmap_option' => array(
        'type' => 'box',
        'title' => __('Google Map Settings', '{domain}'),
        'options' => array(
              'google_map_api' => array(
                    'type'  => 'text',
                    'label' => __('Google Map API', 'body-builder'),
                ),
            ),
    ),
   'box_id' => array(
    'type' => 'box',
    'options' => array(
        'option_id'  => array( 'type' => 'text' ),
    ),
    'title' => __('Box Title', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),

    /**
     * When used in Post Options on the first array level
     * the ``box`` container accepts additional parameters
     */
    //'context' => 'normal|advanced|side',
    //'priority' => 'default|high|core|low',
),
   'tab_id' => array(
    'type' => 'tab',
    'options' => array(
        'option_id'  => array( 'type' => 'text' ),
    ),
    'title' => __('Tab Title', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
'tab_id_2' => array(
    'type' => 'tab',
    'options' => array(
        'option_id_2'  => array( 'type' => 'text' ),
    ),
    'title' => __('Tab Title #2', '{domain}'),
    'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
),
);

