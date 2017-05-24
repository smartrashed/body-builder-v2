<?php
/**
 * The template for displaying all single class post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package body-builder
 */

get_header(); ?>

	<section class="class-single padding-130">
	      	<div class="container">
	       		 <div class="row"">
          		

						<?php
						while ( have_posts() ) : the_post(); ?>
							

							<?php 
							get_template_part( 'template-parts/content', 'class' );


						endwhile; // End of the loop.
						?>
						
				
			</div>

			<?php get_sidebar(); ?>
			
		</div><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();


