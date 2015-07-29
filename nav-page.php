<?php
	// Previous/next page navigation.
	the_posts_pagination( array(
		'prev_text'          => __( 'Previous page', 'bourboneat' ),
		'next_text'          => __( 'Next page', 'bourboneat' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bourboneat' ) . ' </span>',
	) );
?>