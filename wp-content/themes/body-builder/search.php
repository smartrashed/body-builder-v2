<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package body-builder
 */

get_header(); ?>
<section class="blog-large-image padding-130">
		<div class="container">
			<div class="row">
          		<div class="col-md-8 col-sm-12 col-xs-12">
          			
		             
						<?php
							if ( have_posts() ) :

								if ( is_home() && ! is_front_page() ) : ?>
									<header>
										<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
									</header>

								<?php
								endif;

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
								get_template_part( 'template-parts/content', 'search' );

								endwhile;

								body_builder_numeric_pagination(); 
						
							else :

								get_template_part( 'template-parts/content', 'none' );

						endif; 			?>			
					
				</div>
					
					<?php  get_sidebar(); ?>
			</div>
		</div><!-- #container -->
	</section><!-- #section -->

<?php get_footer(); ?>


