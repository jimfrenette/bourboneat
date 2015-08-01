<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>
		</div><!-- .site-content -->

		<footer class="site-footer" role="contentinfo">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri() . DIST_DIR; ?>styles/images/placeholder_logo_1.png" alt="<?php esc_attr_e( 'Logo Image', 'bourboneat' ); ?>">
			</div>

			<?php if ( has_nav_menu('footer') ) : ?>
			<nav id="footer-navigation" role="navigation">
				<?php
					// Footer navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'footer'
					));
				?>
			</nav>
			<?php endif; ?>

			<div class="footer-secondary-links">

				<?php if ( has_nav_menu('social') ) : ?>
				<nav id="social-navigation" class="social-navigation" role="navigation">
					<?php
						// Social links navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'social',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
				</nav><!-- .social-navigation -->
				<?php endif;

				if ( has_nav_menu('terms') ) : ?>
				<nav id="terms-navigation" role="navigation">
					<?php
						// Small footer navigation menu.
						wp_nav_menu( array(
							'theme_location' => 'terms'
						));
					?>
				</nav>
				<?php endif; ?>

			</div>
		</footer>

	</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>