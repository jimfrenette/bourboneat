<form role="search" type="search" action="/" method="get">
	<input type="search" placeholder="<?php esc_attr_e( 'Enter Search', 'bourboneat' ); ?>" name="s" />
	<button type="submit">
		<img src="<?php echo get_template_directory_uri() . bourboneat_dist_dir; ?>/styles/images/search-icon.png" alt="<?php esc_attr_e( 'Search Icon', 'bourboneat' ); ?>">
	</button>
</form>