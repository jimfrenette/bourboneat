<?php
/**
 * The template part for displaying results in search pages
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php Bourboneat\post_thumbnail(); ?>

	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<?php
		if ( 'post' == get_post_type() ) : ?>

		<footer class="entry-footer">
			<?php 
				Bourboneat\entry_meta();
				edit_post_link( __( 'Edit', 'bourboneat' ), '<span class="edit-link">', '</span>' );
			?>
		</footer><!-- .entry-footer -->

	<?php
		else :
			edit_post_link( __( 'Edit', 'bourboneat' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' );
		endif;
	?>

</article><!-- #post-## -->
