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




$blog_style = '3';
if (defined('FW')):
$blog_style = fw_get_db_settings_option('blog_style');
endif;



get_header(); ?>

<?php get_template_part('template-parts/blogs/blog', $blog_style);

get_footer();
