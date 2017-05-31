<?php 
if (!defined('FW')) die('Forbidden');

if(defined('FW')):
$section_title = $atts['section_title'];
$gallery_items = $atts['gallery'];
$image_items = $atts['images'];
endif;
?>
   <!--Gallery start here -->
<div class="gallery-two <?php echo esc_attr($extraclass) ?>">
  <div class="overlay">
    <div class="container">
      <?php if(!empty($section_title)): ?>
      <h2 class="section-header"><?php echo esc_html( $section_title ); ?></h2>
      <?php endif; ?>
      
      <div class="gallery-top">
        <?php foreach ($gallery_items as $gallery) : ?>
        <div class="gallery-item">
          <div>
          <?php if(!empty($gallery_items)): ?>
           <img src="<?php echo esc_url($gallery['vthumb']['url']);  ?>" alt="gallery image" class="img-responsive">
         <?php endif; ?>
            <div class="overlay"></div>
            <a href="<?php echo esc_url($gallery['vurl']);  ?>" class="gvideo-icon" data-rel="lightcase">
            <img src="<?php echo esc_url($gallery['vthumb_icon']['url']);  ?>" alt="video icon" class="img-reaponsive"></a>
          </div>
        </div><!-- gallery-item -->
       <?php  endforeach ; ?>
      </div><!-- gallery-top -->
      
        <div class="gallery-images">
          <?php foreach ($image_items as $image) : ?>
          <div class="gallery-item">
            <div>
             <img src="<?php echo esc_url($image['ithumb']['url']); ?>" alt="gallery image" class="img-responsive">
              <div class="overlay"></div><!-- overlay -->
              <a href="<?php echo esc_url($image['pop_up']['url']); ?>" class="image-icon" data-rel="lightcase:myCollection">
              <img src="<?php echo esc_url($image['ithumb_icon']['url']); ?>" alt="image-icon" class="img-reaponsive"></a>
            </div>
          </div><!-- gallery-item -->
          <?php endforeach; ?>
        </div><!-- gallery-images -->

    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- gallery-two -->
<!--Gallery end here -->
    