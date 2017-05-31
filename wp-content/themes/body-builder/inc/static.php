<?php 
/**
 * Enqueue all theme scripts and styles
 *
 * @package body-builder
 * @author CodexCoder
 */

/**
 * Enqueue scripts and styles.
 */


function body_builder_scripts() {

    wp_enqueue_style('body-builder-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('bootstrapp', BODYBUILDER_ASSETS . '/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', BODYBUILDER_ASSETS . '/css/font-awesome.min.css');
    wp_enqueue_style('flexslider', BODYBUILDER_ASSETS . '/css/flexslider.css');
    wp_enqueue_style('swiper', BODYBUILDER_ASSETS . '/css/swiper.min.css');
    wp_enqueue_style('lightcase', BODYBUILDER_ASSETS . '/css/lightcase.css');
    wp_enqueue_style('reset-css', BODYBUILDER_ASSETS . '/css/wp-reset.css');
    wp_enqueue_style('body-builder-responsive', BODYBUILDER_ASSETS . '/css/responsive.css');  
    wp_enqueue_style('body-builder-style', BODYBUILDER_ASSETS . '/css/style.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i' );       

    
    wp_enqueue_script('bootstrap', BODYBUILDER_ASSETS . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('lightcase', BODYBUILDER_ASSETS . '/js/lightcase.js', array('jquery'), false, true);
    wp_enqueue_script('cloud-fair', 'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js', array('jquery') ,false, true);
    wp_enqueue_script('counterup', BODYBUILDER_ASSETS . '/js/jquery.counterup.min.js', array('jquery'), '1.0.0', false, true);
    wp_enqueue_script('swiper', BODYBUILDER_ASSETS . '/js/swiper.jquery.min.js', array('jquery'), false, true);
    wp_enqueue_script('flexslider', BODYBUILDER_ASSETS . '/js/jquery.flexslider-min.js', array('jquery'), false, true); 
    wp_enqueue_script('custom', BODYBUILDER_ASSETS . '/js/custom.js', array('jquery'), false, true);
   
}

add_action( 'wp_enqueue_scripts', 'body_builder_scripts', 90);

/*//Google Map
    $gmapapi ='';
   if(defined('FW')):
    $gmapapi = fw_get_db_settings_option('gmapapi');
    endif; //Unyson Endif //*/
   /*  function body_builder_gmap_init() {
        $gmap_api = $gmapapi ;
        wp_enqueue_script('gmap', BODYBUILDER_ASSETS . '/js/gmap.js', array('jquery'), false, true);
        wp_enqueue_script( 'gmaps-api', 'http://maps.google.com/maps/api/js?key='.$gmap_api, null, null, true );
    }


add_action( 'wp_enqueue_scripts', 'body_builder_gmap_init', 90 );

 if (function_exists('fw_get_db_settings_option')):
    $gmap_api = $gmapapi;
    if(!empty($gmap_api)) :
       add_action( 'wp_enqueue_scripts', 'body_builder_gmap_init', 90 );
    endif;
endif;*/


