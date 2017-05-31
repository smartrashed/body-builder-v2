 <?php
if (!defined('FW')) die('Forbidden');


$title  = '';
$subtitle  = '';
$readmore_link  = '';
$extraclass = '';

if(defined('FW')):
$title  = $atts['banner_title'];
$subtitle  = $atts['banner_sub_title'];
$readmore_link  = $atts['readmore_link'];
$extraclass = $atts['extra_body_class'];
endif;
 ?>
  <!--Banner start here -->
    <section class="banner-two<?php esc_attr($extraclass);?>">
      <div class="container">
        <div class="banner-content">
          <?php if(!empty($subtitle)): ?>
          <h2><?php echo wp_kses_post($title) ?></h2>
          <?php endif; ?>
          <?php if(!empty($subtitle)): ?>
          <p><?php echo esc_html($subtitle); ?></p>
         <?php endif; ?>
         <?php if(!empty($readmore_link)): ?>
          <a href="<?php echo esc_url(); ?>" class="default-button hover-effect-two"><?php echo esc_html($readmore_link); ?></a>
          <?php endif; ?>
        </div>
      </div><!-- container -->
    </section><!-- banner -->
    <!--Banner end here -->
