<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package body-builder
 */

get_header(); ?>

	<section <?php post_class('blog-posts padding-130'); ?>>
      	<div class="container">
       		 <div class="row">
          		<div class="col-md-8 col-sm-12 col-xs-12">

						<?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );


							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>
						
				</div>

				<?php get_sidebar(); ?>
			</div><!--Row-->
		</div><!-- #container -->
	</section><!-- #primary -->

<?php

get_footer();