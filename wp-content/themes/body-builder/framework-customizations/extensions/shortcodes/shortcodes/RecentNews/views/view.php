<?php 
if (!defined('FW')) die('Forbidden');


if(defined('FW')):
$section_title = $atts['section_title'];
$post_limit = $atts['post_limit'];
$extraclass = $atts['extra_body_class'];
endif;


?>

<!--News start here -->
<div class="news <?php echo esc_attr($extraclass) ?>">
  <div class="container">
    <?php if(!empty($section_title)) : ?>
    <h2 class="section-header"><?php echo  esc_html( $section_title); ?></h2>
    <?php endif; ?>
    <div class="news-items">
      <div class="row">
        <?php
          $recent_post = new WP_Query(array(
              'post_type' => 'post',
              'order'     => 'decending',
              'posts_per_page' => $post_limit

            ));
         while($recent_post->have_posts()): $recent_post->the_post()  ?>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="news-item">
            <div class="image">
              <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail('body-builder-blog-grid'); ?>
              <?php endif; ?>
            </div><!-- image -->
            <div class="content">
              <h3><a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a></h3>
              <ul class="post-meta">
                <li><?php body_builder_posted_on(); ?></li>
              </ul>
              <p><?php echo wp_trim_words( get_the_content(), 10, false ); ?></p>
            </div><!-- content -->
          </div><!-- news item -->
        </div>
       
       <?php wp_reset_postdata();  endwhile; ?>
      </div><!-- row -->
    </div><!-- news items -->
  </div><!-- container -->
</div><!-- news -->
<!--News end here -->
