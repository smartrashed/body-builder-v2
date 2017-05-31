<?php 
if (!defined('FW')) die('Forbidden');

if(defined('FW')):
$extraclass = $atts['extra_body_class'];
$post_limit = $atts['post_limit'];
endif;
?>

<!--Pricing start here -->
<div class="pricing <?php echo esc_attr($extraclass) ?>">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <?php 
        $price_info = new Wp_Query(array(
          'post_type'=>'price_table',
          'posts_per_page' => $post_limit
        ));

        while ($price_info->have_posts()): $price_info->the_post() ?>
        <div class="col-md-4 col-sm-6 col-xs-12 price_ex_class">
          
          <div class="pricing-item">
           
            <h4><?php the_title(); ?></h4>
            <h3><?php echo fw_get_db_post_option(get_the_ID(), 'price'); ?></h3>
            <p><?php echo esc_html($membership  = fw_get_db_post_option(get_the_ID(), 'membership')); ?></p>
            <p><?php echo esc_html($days_access  = fw_get_db_post_option(get_the_ID(), 'days_access')); ?></p>
            <p><?php echo esc_html($training_days  = fw_get_db_post_option(get_the_ID(), 'training_days')); ?></p>
            <p><?php echo esc_html($access_instuments  = fw_get_db_post_option(get_the_ID(), 'access_instuments')); ?></p>
            <p><?php echo esc_html($fitness_book  = fw_get_db_post_option(get_the_ID(), 'fitness_book')); ?></p>
            <p><?php echo esc_html($fitness_tutorials  = fw_get_db_post_option(get_the_ID(), 'fitness_tutorials')); ?></p>
            <p><?php echo esc_html($attend_compitions  = fw_get_db_post_option(get_the_ID(), 'attend_compitions')); ?></p>
           
            <a href="<?php the_permalink(); ?>"><?php esc_heml__('Join Now','body-builder') ?></a>
          </div><!-- pricing-item -->
          
        </div>
        <?php endwhile; ?>

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- overlay -->
</div><!-- pricing -->
<!--Pricing end here -->
