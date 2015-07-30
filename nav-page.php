<?php
	// Previous/next page navigation.
	the_posts_pagination( array(
		'prev_text'          => esc_attr__( 'Previous page', 'bourboneat' ),
		'next_text'          => esc_attr__( 'Next page', 'bourboneat' ),
		'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_attr__( 'Page', 'bourboneat' ) . ' </span>',
	) );
?>