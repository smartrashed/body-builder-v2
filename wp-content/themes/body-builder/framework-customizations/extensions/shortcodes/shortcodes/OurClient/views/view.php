<?php 
if (!defined('FW')) die('Forbidden');

if(defined('FW')):
$partner_logos = $atts['logos'];
$extraclass = $atts['extra_body_class'];
endif;
?>
<!--Client start here -->
<div class="client <?php echo esc_attr($extraclass); ?>">
  <div class="container">
    <div class="client-slider swiper-container">
      <div class="swiper-wrapper">
       <?php foreach ($partner_logos as $logo) :  ?>
        <div class="swiper-slide">
          <div class="client-item">
          <?php if($logo['logo_link']) : ?>
            <a href="<?php esc_url($logo['logo_link']) ?>"><img src="<?php echo esc_url($logo['ithumb']['url']); ?>" alt="client image" class="img-responsive"></a>
          <?php else: ?>
            <img src="<?php echo esc_url($logo['ithumb']['url']); ?>" alt="client image" class="img-responsive">
          <?php endif; ?>
          
          </div><!-- client-item -->
        </div><!-- swiper-slide -->
       <?php endforeach; ?>
      </div>
    </div>
  </div><!-- container -->
</div><!-- client -->
<!--Client end here -->
    