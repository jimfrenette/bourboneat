<?php
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_attr__( 'Next', 'bourboneat' ) . '</span> ' .
			'<span class="screen-reader-text">' . esc_attr__( 'Next post:', 'bourboneat' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_attr__( 'Previous', 'bourboneat' ) . '</span> ' .
			'<span class="screen-reader-text">' . esc_attr__( 'Previous post:', 'bourboneat' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
?>