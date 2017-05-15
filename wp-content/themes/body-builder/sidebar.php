<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */
if ( ! is_active_sidebar( 'body-builder-right-widget' ) ) {
	return;
}

?>

<div class="col-md-4 col-sm-12 col-xs-12">
    <?php dynamic_sidebar( 'body-builder-right-widget' ); ?> 
</div>
