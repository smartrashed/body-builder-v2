<?php 
if (!defined('FW')) die('Forbidden');


if(defined('FW')):
$gallery_image_title = $atts['gallery_image_title'];
$gallery_images = $atts['images'];
$video_image = $atts['video_image'];
$video_popup_icon = $atts['video_popup_icon'];
$video_popup_link = $atts['video_popup_link'];
$popup_image = $atts['popup_image'];
$extraclass = $atts['extra_body_class'];
endif;

?>
  <!--Gallery start here -->
<div class="gallery <?php echo esc_attr($extraclass) ?>">
      <div class="gallery-bottom">
        <div class="gallery-item">
          <?php foreach ($gallery_images as $images ) :?>
          <img src="<?php echo esc_url($images['ithumb']['url']); ?>" alt="gallery image" class="img-responsive">
          <a href="<?php echo esc_url($images['ithumb']['url']); ?>" class="overlay" data-rel="lightcase:myCollection"><?php echo esc_html($gallery_image_title); ?></a>
          <?php endforeach; ?>
        </div><!-- gallery-item -->

        
         <div class="gallery-item">
            <div>
              <img src="<?php echo esc_url($video_image['url']) ?>" alt="gallery image" class="img-responsive">
              <a href="<?php echo esc_url($video_popup_link) ?>" class="gvideo-icon" data-rel="lightcase"><img src="<?php echo esc_url($video_popup_icon['url']); ?>" alt="video icon" class="img-reaponsive"></a>
            </div>
          </div><!-- gallery-item -->

        <div class="gallery-item">
          <a href="<?php echo esc_url($popup_image['url']); ?>" data-rel="lightcase"><img src="<?php echo esc_url($popup_image['url']); ?>" alt="gallery image" class="img-responsive"></a>
        </div><!-- gallery-item -->
      </div><!-- gallery bottom -->

</div><!-- gallery -->
    <!--Gallery end here -->
    