<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'bn' ); ?></a>

		<header id="masthead" class="site-header" role="banner">

			<div class="navigation-wrapper">
			    <a href="/" class="logo" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
			    	<img src="<?php echo get_template_directory_uri() . DIST_DIR; ?>styles/images/placeholder_logo_1.png" alt="Logo Image">
			    </a>
			    <a href="javascript:void(0)" class="navigation-menu-button icon-menu" id="menu-main-mobile"></a>
					
				<?php if ( has_nav_menu('primary')) : ?>
				<nav id="menu" role="navigation">
					<?php
						// Primary navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'primary'
						));
					?>
				</nav>
				<?php endif; ?>

				<div class="navigation-tools">
					<div class="search-bar">
						<?php get_search_form(); ?>
					</div>
				</div>
			</div>

			<section id="branding">
				<img src="<?php echo get_template_directory_uri() . DIST_DIR; ?>styles/images/mountains.png" alt="">
				<div id="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'bn' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1></div>
				<div id="site-description"><?php bloginfo( 'description' ); ?></div>
			</section>

		</header>
		<div id="content" class="site-content">