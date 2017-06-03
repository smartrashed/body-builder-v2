<?php 
if (!defined('FW')) die('Forbidden');


if(defined('FW')):
$section_title = $atts['section_title'];

$see_more = $atts['see_more'];
$post_limit = $atts['post_limit'];

$extraclass = $atts['extra_body_class'];
endif;

?>

<!--Trainers start here -->
<div class="trainers trainers-two <?php echo esc_attr($extraclass) ?>">
<div class="overlay">
  <div class="container">
    <?php if(!empty($section_title)): ?>
    <h2 class="section-header"><?php echo esc_html($section_title); ?></h2>
    <?php endif; ?>

    <div class="trainer-items">
      <?php
        $trainer_info = new Wp_Query(array(
         'post_type'=>'body_trainer',
         'posts_per_page' => $post_limit
      
        )); 
         while($trainer_info->have_posts()): $trainer_info->the_post(); 

          $trainer_twitter  = fw_get_db_post_option(get_the_ID(),'trainer_twitter'); 
          $trainer_facebook  = fw_get_db_post_option(get_the_ID(),'trainer_facebook');
          $trainer_linkedin  = fw_get_db_post_option(get_the_ID(),'trainer_linkedin'); 
                           ?>

      <div class="trainer-item">
        <div class="trainer-image">
            <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('body-builder-custom-trainer'); ?>
             <?php endif; ?>
          <div class="overlay"></div>

              <div class="trainer-social">
                 <div class="trainer-social">
                              <?php if($trainer_twitter ): ?>
                                <a href="<?php echo esc_url($trainer_twitter); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                              <?php endif; ?> 
                              <?php if($trainer_facebook ): ?> 
                                <a href="<?php echo esc_url($trainer_facebook); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <?php endif; ?> 
                                <?php if($trainer_linkedin ): ?>
                                <a href="<?php echo esc_url($trainer_linkedin); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <?php endif; ?> 
                               
                              </div>
              </div>

        </div><!-- trainer image -->
        <div class="trainer-details">
          <h4><a href="<?php esc_url(the_permalink());?>"><?php the_title(); ?></a></h4>
          <p><?php echo esc_html($trainer_designation  = fw_get_db_post_option(get_the_ID(), 'trainer_designation')); ?></p>
        </div><!-- trainer-details -->
      </div><!-- trainer-item -->
      
      <?php endwhile; ?>
    </div><!-- trainer-items -->
    <div class="trainers-button">
      <a href="<?php esc_url($see_more);  ?>" class="default-button hover-effect-two"><?php echo esc_html__('See More','body-builder');?></a>
    </div><!-- trainers-button -->
  </div><!-- container -->
</div><!-- overlay -->
</div><!-- trainers -->
<!--Trainers end here -->
