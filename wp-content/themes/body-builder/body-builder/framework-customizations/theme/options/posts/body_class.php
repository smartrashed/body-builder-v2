<?php if (!defined( 'FW' )) die('Forbidden');

$options= array(
        'class_info' => array(
        'type' => 'box',
        'title' => __('Class Information', 'body-builder'),
        'options' => array(
                'class_time' => array(
                    'type' => 'text',
                    'label' => __('Class  Time', 'body-builder')
                ),
            	
                'trainer_name' => array(
                    'type' => 'text',
                    'label' => __('Trainer Name', 'body-builder')
                ),
                'course_duration' => array(
                    'type' => 'text',
                    'label' => __('Course Duration', 'body-builder')
                ),
                'benifit_title' => array(
                    'type' => 'text',
                    'label' => __('Benifit Title', 'body-builder')
                ),
                'class_benifits' => array(
                    'type' => 'wp-editor',
                    'label' => __('Class Benifits', 'body-builder')
                ),
                'join_now' => array(
                    'type' => 'text',
                    'label' => __('Join Now', 'body-builder'),
                    'desc'  =>'Put a Link Here',
                    'help'=>'Example: http://example.com'
                ),
                
                
            ),
         ),

);