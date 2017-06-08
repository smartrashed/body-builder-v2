<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */
if(defined('FW')):
$footer_text = fw_get_db_settings_option('footer');
endif;


if ( ! is_active_sidebar( 'body-builder-footer-widget' ) ) {
  return;
}

?>
 <!--Footer start here -->
    <footer>
    
      <div class="footer-top">
        <div class="overlay">
          <div class="container">
            <div class="row">
              <?php dynamic_sidebar( 'body-builder-footer-widget' ); ?> 
            </div><!-- row -->
          </div><!-- container -->
        </div><!-- overlay -->
      </div><!-- footer top -->
    
      <div class="footer-bottom">
        <div class="container">
          <p><?php echo wp_kses_post($footer_text); ?></p>
        </div><!-- container -->
      </div><!-- footer-bottom -->
    </footer>
    <!--Footer end here -->

<?php wp_footer(); ?>

</body>
</html>
