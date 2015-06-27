<?php
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'bn' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'bn' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'bn' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'bn' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
?>