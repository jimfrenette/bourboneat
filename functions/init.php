<?php

namespace Bourboneat;

function setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'primary' 	=> esc_attr__('Primary Menu', 'bourboneat'),
		'social'  	=> esc_attr__('Social Links Menu', 'bourboneat'),
		'footer' 	=> esc_attr__('Footer Menu', 'bourboneat'), 
		'terms' => esc_attr__('Terms Footer Menu', 'bourboneat') // typically for terms and conditions and privacy policy
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	/*
	 * Enable support for Post Formats.
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	));

	//TODO
	//Fatal error: Call to undefined function Bourboneat\bourboneat_get_color_scheme()
	//$color_scheme  = bourboneat_get_color_scheme();
	//$default_color = trim( $color_scheme[0], '#' );
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register widget area.
 */
function widgets_init() {
	register_sidebar( array(
		'name'          => esc_attr__('Widget Area', 'bourboneat'),
		'id'            => 'sidebar-1',
		'description'   => esc_attr__('Add widgets here to appear in your sidebar.', 'bourboneat'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');
