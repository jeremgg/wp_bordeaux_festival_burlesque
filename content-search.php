<?php
/**
 * The template part for displaying results in search pages
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
				<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<?php if ( 'post' == get_post_type() ) : ?>
				<footer class="entry-footer">
						<?php edit_post_link( __( 'Modifier', 'bfb' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-footer -->
		<?php else : ?>
				<?php edit_post_link( __( 'Modifier', 'bfb' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>
		<?php endif; ?>
</article><!-- #post-## -->
