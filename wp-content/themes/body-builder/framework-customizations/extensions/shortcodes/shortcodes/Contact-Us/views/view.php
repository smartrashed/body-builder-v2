<?php 
if (!defined('FW')) die('Forbidden');



$contact_us = $atts['contact_us'];

/*  Address Info */
$address_title = $atts['address_title'];
$address_description = $atts['address_description'];
$address_icon = $atts['address_icon'];

/*  Phone Info */
$contact_title = $atts['contact_title'];
$contact_description = $atts['contact_description'];
$contact_icon = $atts['contact_icon'];

/*  Phone Info */
$email_title = $atts['email_title'];
$email_description = $atts['email_description'];
$email_icon = $atts['email_icon'];


$contact_form = $atts['contact_form'];


/* Map Info */
$map_title = $atts['map_title'];
$latitude = $atts['latitude'];
$longitude = $atts['longitude'];
$map_icon = $atts['map_icon'];
$map_Zoom = $atts['map_Zoom'];

$extraclass = $atts['extra_body_class'];

?>
<!--Contact us start here -->
<div class="contact-us <?php echo esc_attr($extraclass) ?>">
  <div class="padding-130">
    <div class="container">
      <div class="contact-info">
          <div class="row">
                      <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="icon">
                          <?php if(!empty($address_icon))  : ?>
                          <span><i class="<?php echo esc_attr($address_icon['icon-class']); ?>" aria-hidden="true"></i></span>
                           <?php endif; ?>
                        </div>
                        <div class="content">
                          <?php if(!empty($address_title)): ?>
                          <h4><?php echo esc_html($address_title) ?></h4>
                          <?php endif; ?>
                          <?php if(!empty($address_description)): ?>
                          <p><?php echo esc_html($address_description) ?></p>
                          <?php endif; ?>
                        </div>
                      </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="icon">
                <?php if(!empty($contact_icon))  : ?>
                <span><i class="<?php echo esc_attr($contact_icon['icon-class']); ?>" aria-hidden="true"></i></span>
                 <?php endif; ?>
              </div>
              <div class="content">
                <?php if(!empty($contact_title)): ?>
                <h4><?php echo esc_html($contact_title); ?></h4>
                <?php endif; ?>
                <?php if(!empty($contact_description)): ?>
                <p><?php echo esc_html($contact_description); ?></p>
                <?php endif; ?>
              </div>
            </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="icon">
                  <?php if(!empty($email_icon))  : ?>
                  <span><i class="<?php echo esc_attr($email_icon['icon-class']); ?>" aria-hidden="true"></i></span>
                   <?php endif; ?>
                </div>
                <div class="content">
                  <?php if(!empty($email_title)) :  ?>
                  <h4><?php echo esc_html($email_title); ?></h4>
                  <?php endif; ?>
                  <?php if(!empty($email_description)) : ?>
                  <p><?php  echo esc_html($email_description); ?></p>
                  <?php endif; ?>
                </div>
              </div>
          </div><!-- row -->
      </div><!-- contact-info -->
        <div class="contact-form">
          <?php if(!empty($contact_us)): ?>
          <h3><?php echo esc_html($contact_us); ?></h3>
          <?php endif; ?>

          <?php echo do_shortcode($contact_form); ?>
        
        </div><!-- contact-form -->
    </div><!-- container -->
  </div>
  
  <div  class="contact-map" id="map_canvas" data-map-title="<?php echo esc_attr( $map_title ); ?>"  data-map-icon="<?php echo esc_url( $map_icon['url'] ); ?>" data-map-latitute="<?php echo esc_html( $latitude ); ?>" data-map-longitude="<?php echo esc_html( $longitude ); ?>" data-map-zoom="<?php echo esc_html( $map_Zoom ); ?>" ></div>
    
  </div><!-- contact-map -->

    <!--Contact us end here -->