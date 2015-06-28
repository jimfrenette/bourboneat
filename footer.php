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
				<img src="<?php echo get_template_directory_uri() . DIST_DIR; ?>styles/images/placeholder_logo_1.png" alt="Logo image">
			</div>
			<ul>
				<li><a href="javascript:void(0)">About</a></li>
				<li><a href="javascript:void(0)">Contact</a></li>
				<li><a href="javascript:void(0)">Products</a></li>
			</ul>

			<div class="footer-secondary-links">

				<?php if ( has_nav_menu( 'social' ) ) : ?>
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
				<?php endif; ?>
			
				<ul>
					<li><a href="javascript:void(0)">Terms and Conditions</a></li>
					<li><a href="javascript:void(0)">Privacy Policy</a></li>
				</ul>

			</div>
		</footer>

	</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>