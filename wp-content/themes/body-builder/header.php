<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package body-builder
 */




if (defined('FW')):
$body_logo = fw_get_db_settings_option('logo');
$breadcrumbs = fw_get_db_settings_option('breadcrumbs');
endif;



?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>	
		 <nav class="main-menu menu-transparent menu-fixed animated fadeInDown">
		        <div class="container">
		          <!-- Brand and toggle get grouped for better mobile display -->
			          <div class="navbar-header">
				            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				              <span class="sr-only">Toggle navigation</span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				              <span class="icon-bar"></span>
				            </button>
				            <?php if(!empty($body_logo['url'])) :?>
				            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_attr($body_logo['url']); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
				             <?php else : ?>
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>"><h1 class="site-title"><?php echo esc_attr(get_bloginfo('name')); ?></h1></a>
				        	<?php endif; ?>
				       
			          </div>
		          <!-- Collect the nav links, forms, and other content for toggling -->
			          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <?php
							if( has_nav_menu( 'primary-menu' ) ) :
								wp_nav_menu( array(
									'menu_class'	=> 'menu-bar',
									'container'		=> false,
									'walker'		=> new BB_Walker_Nav_Menu()
								) );
							endif;
						
							?>
			          </div><!-- navbar-collapse -->
		        </div><!-- container -->
      	</nav>
	</header><!-- #masthead -->
 <!--Page Header start here -->


 <?php if(!is_front_page()) : ?>
    <section class="page-header" <?php if (!empty($breadcrumbs['url'])): echo 'style="background-image:url('.esc_url($breadcrumbs['url']).')"'; endif; ?>>
      <div class="container">
      <h3 class="page-title"><?php
                        if( is_archive()  ) {
                            the_archive_title();
                        } else if (is_home()) {
                            wp_title('');
                        } else if(is_page()) {
                            the_title();
                        } else if(is_search()) {
                            printf( esc_html__( 'Search Results for: %s', 'body-builder' ), '<span>' . get_search_query() . '</span>' );
                        } else {
                            the_title();
                        }                             
                    ?></h3>
        <?php body_builder_breadcrumbs() ?>
      </div><!-- container -->
    </section><!-- page-header -->
    <!--Page Header end here -->
<?php endif; ?>