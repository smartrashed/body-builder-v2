<?php 
if (!defined('FW')) die('Forbidden');

if(defined('FW')):
$section_title = $atts['section_title'];
$post_limit = $atts['post_limit'];
$extraclass = $atts['extra_body_class'];

endif;

?>
<div class="products">
      <div class="container">
        <?php if(!empty($section_title)): ?>
        <h2 class="section-header"><?php esc_html($section_title); ?></h2>
        <?php  endif ;?>
        <div class="product-items">
          <div class="product-slider swiper-container swiper-container-horizontal">
            <div class="swiper-wrapper">

           
             <?php 
              $product_query = new WP_QUERY(array(
              'post_type' =>'product',
              'posts_per_page' => $post_limit

              ));

             ?>
              <?php while($product_query->have_posts()) : $product_query->the_post(); ?>
              <div class="swiper-slide">
                <div class="product-item">
                  <div class="image">
                    <?php the_post_thumbnail(); ?>
                  </div><!-- image -->
                  <div class="content">
                    <?php the_title('<h4>','</h4>'); ?>
                    <span><?php echo esc_html($price); ?></span>
                  </div><!-- content -->
                </div><!-- product-item -->
              </div><!-- swiper-slide -->
             <?php  endwhile; wp_reset_postdata(); ?>
            </div><!-- swiper-wrapper -->
          </div><!-- product-slider swiper-container -->

          <div class="slider-icons">
            <div class="product-button-prev swiper-button-disabled"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
            <div class="product-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
          </div>
        </div><!-- product items -->
      </div><!-- container -->
</div>