<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package body-builder
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('news-item'); ?>>
    
    <div class="content">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <ul class="post-meta">
        <?php body_builder_posted_on(); ?>
      </ul>
      <p><?php echo wp_trim_words( get_the_content(), 35, false ); ?></p>
    </div><!-- content -->
</div><!-- post item -->
           