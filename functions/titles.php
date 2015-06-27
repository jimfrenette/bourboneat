<?php

namespace Bourboneat;

// This function is attached to the 'wp_title' filter hook
add_filter('wp_title', __NAMESPACE__ . '\\filter_wp_title');
function filter_wp_title( $title ) {
	global $post;

	if ( is_feed() )
		return $title;

	$filtered_title = $title;

	//prepend title with parent
	if (intval( $post->post_parent ) > 0) {
		$filtered_title = get_the_title( $post->post_parent ) . ' - ' . $title;
	}

	return $filtered_title . esc_attr( get_bloginfo('name'));
}
