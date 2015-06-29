<?php

/**
 * set the content width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 768;
}

/**
 * bourboneat only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

/**
 * bourboneat includes
 *
 * $bn_includes array determines the functions included in the theme.
 *
 */
$bn_includes = [
	'functions/init.php',		// Initial theme setup and constants
	'functions/conditional-tag-check.php', // ConditionalTagCheck class
	'functions/config.php',                // Configuration
	'functions/titles.php',                // Titles
	'functions/entry.php',                 // Posts, pages, categories, tags
	'functions/assets.php',                // Scripts and stylesheets
	'functions/comments.php',              // Comments
  	'functions/custom.php'		// Custom functions
];

foreach ($bn_includes as $file) {
	if (!$filepath = locate_template($file)) {
		trigger_error(sprintf(__('Error locating %s for inclusion', 'bourboneat'), $file), E_USER_ERROR);
	}

	require_once $filepath;
}
unset($file, $filepath);
