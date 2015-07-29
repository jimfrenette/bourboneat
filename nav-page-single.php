<?php
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'bourboneat' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'bourboneat' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'bourboneat' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'bourboneat' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
?>