<?php
/**
 * The blog content part
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
?>

<div <?php post_class('col-md-6 col-sm-6 col-xs-12'); ?>>
    <div class="news-item">
        <div class="image">
          <?php
          if( has_post_thumbnail() ) :
            the_post_thumbnail('body-builder-blog-grid');
          endif; ?>
        </div><!-- image -->
        <div class="content">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <ul class="post-meta">
            <li><?php body_builder_posted_on(); ?></li>
          </ul>
          <p><?php echo wp_trim_words( get_the_content(), 100, false ); ?></p>
         
        </div><!-- content -->
    </div><!-- post item -->
</div>
