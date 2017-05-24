<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	
	<div class="content">
	<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
	<p><?php the_excerpt(); ?></p>
	</div><!-- .entry-summary -->

	
</div><!-- #post-## -->


