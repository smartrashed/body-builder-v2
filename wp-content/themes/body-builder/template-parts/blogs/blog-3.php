<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */


$blog_style = fw_get_db_settings_option('blog_style');





get_header(); ?>

	<section <?php post_class('blog-large-image padding-130') ?> >
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
								?>	
								<div class="news-item">
							    <div class="image">
							      <?php
							      if( has_post_thumbnail() ) :
							        the_post_thumbnail('body-builder-blog-full-single');
							      endif; ?>
							    </div><!-- image -->
							    <div class="content">
							      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							      <ul class="post-meta">
							        <?php body_builder_posted_on(); ?>
							      </ul>
							      <p><?php echo wp_trim_words( get_the_content(), 15, false ); ?></p>
							      <a href="<?php the_permalink();?>" class="default-button"><?php echo  esc_html__('Read More','body-builder'); ?></a>
							    </div><!-- content -->
							</div><!-- post item -->
								<?php
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

<?php
get_footer();
