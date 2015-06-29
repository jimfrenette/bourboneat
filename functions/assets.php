<?php

namespace Bourboneat;

/**
 * Scripts and stylesheets
 *
 * Enqueue stylesheets in the following order:
 * 1. /theme/dist/styles/main.css
 *
 * Enqueue scripts in the following order:
 * 1. /theme/dist/scripts/modernizr.js
 * 2. /theme/dist/scripts/main.js
 */

function asset_path($filename) {
	$dist_path = get_template_directory_uri() . DIST_DIR;
	$directory = dirname($filename) . '/';
	$file = basename($filename);
    return $dist_path . $directory . $file;
}

function assets() {
	wp_enqueue_style('bn_css', asset_path('styles/main.css'), false, null);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	//wp_enqueue_script('modernizr', asset_path('scripts/modernizr.js'), [], null, true);
	wp_enqueue_script('bn_js', asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);
