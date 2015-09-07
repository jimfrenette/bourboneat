<?php

namespace Bourboneat;

/**
 * Determine whether blog/site has more than one category.
 */
function categorized_blog() {
	if ( false === ( $categories = get_transient( 'bourboneat_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$categories = count( $categories );

		set_transient( 'bourboneat_categories', $categories );
	}

	if ( $categories > 1 ) {
		// This blog has more than 1 category so bourboneat_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so bourboneat_categorized_blog should return false.
		return false;
	}
}
add_action('categorized_blog', __NAMESPACE__ . '\\categorized_blog');


/**
 * Prints HTML with meta information for the categories, tags.
 */
function entry_meta() {
	if ( is_sticky() && is_home() && ! is_paged() ) {
		printf( '<span class="sticky-post">%s</span>', esc_attr__( 'Featured', 'bourboneat' ) );
	}

	$format = get_post_format();
	if ( current_theme_supports( 'post-formats', $format ) ) {
		printf( '<span class="entry-format">%1$s<a href="%2$s">%3$s</a></span>',
			sprintf( '<span class="screen-reader-text">%s </span>', esc_html_x( 'Format', 'Used before post format.', 'bourboneat' ) ),
			esc_url( get_post_format_link( $format ) ),
			esc_html( get_post_format_string( $format ) )
		);
	}

	if ( in_array( get_post_type(), array( 'post', 'attachment' ) ) ) {

		$allowed_time_html = array(
		    'time' => array(
		        'class' => array(),
		        'datetime' => array()
		    )
		);

		$time_string = wp_kses( '<time class="entry-date published updated" datetime="%1$s">%2$s</time>', $allowed_time_html );

		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = wp_kses( '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>', $allowed_time_html );
		}

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			get_the_date(),
			esc_attr( get_the_modified_date( 'c' ) ),
			get_the_modified_date()
		);

		printf( '<span class="posted-on"><span class="screen-reader-text">%1$s </span><a href="%2$s" rel="bookmark">%3$s</a></span>',
			esc_html_x( 'Posted on', 'Used before publish date.', 'bourboneat' ),
			esc_url( get_permalink() ),
			$time_string
		);
	}

	if ( 'post' == get_post_type() ) {
		if ( is_singular() || is_multi_author() ) {
			printf( '<span class="byline"><span class="author vcard"><span class="screen-reader-text">%1$s </span><a class="url fn n" href="%2$s">%3$s</a></span></span>',
				esc_html_x( 'Author', 'Used before post author name.', 'bourboneat' ),
				esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
				get_the_author()
			);
		}

		$categories_list = get_the_category_list( esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'bourboneat' ) );
		if ( $categories_list && categorized_blog() ) {
			printf( '<span class="cat-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				esc_html_x( 'Categories', 'Used before category names.', 'bourboneat' ),
				$categories_list
			);
		}

		$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'Used between list items, there is a space after the comma.', 'bourboneat' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links"><span class="screen-reader-text">%1$s </span>%2$s</span>',
				esc_html_x( 'Tags', 'Used before tag names.', 'bourboneat' ),
				$tags_list
			);
		}
	}

	if ( is_attachment() && wp_attachment_is_image() ) {
		// Retrieve attachment metadata.
		$metadata = wp_get_attachment_metadata();

		printf( '<span class="full-size-link"><span class="screen-reader-text">%1$s </span><a href="%2$s">%3$s &times; %4$s</a></span>',
			esc_html_x( 'Full size', 'Used before full size attachment link.', 'bourboneat' ),
			esc_url( wp_get_attachment_url() ),
			esc_html( $metadata['width'], $metadata['height'] )
		);
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_attr__( 'Leave a comment', 'bourboneat' ), esc_attr__( '1 Comment', 'bourboneat' ), esc_attr__( '% Comments', 'bourboneat' ) );
		echo '</span>';
	}
}
add_action('entry_meta', __NAMESPACE__ . '\\entry_meta');


/**
 * Display an optional post thumbnail.
 * Wraps the post thumbnail in an anchor element on index views, or a div
 * element when on single views.
 */
function post_thumbnail() {
	if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
		return;
	}

	if ( is_singular() ) :
	?>

	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
	</div><!-- .post-thumbnail -->

	<?php else : ?>

	<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
		<?php
			the_post_thumbnail( 'post-thumbnail', array( 'alt' => get_the_title() ) );
		?>
	</a>

	<?php endif; // End is_singular()
}
add_action('post_thumbnail', __NAMESPACE__ . '\\post_thumbnail');


/**
 * Return the post URL.
 * Falls back to the post permalink if no URL is found in the post.
 */
function get_link_url() {
	$has_url = get_url_in_content( get_the_content() );

	return $has_url ? $has_url : apply_filters( 'the_permalink', get_permalink() );
}
add_action('get_link_url', __NAMESPACE__ . '\\get_link_url');