<?php
/**
 * The Template for displaying all single posts.
 */
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="container-single">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>
		<?php endwhile; // end of the loop. ?>

		<div class="clear"></div>

		<?php
				//credit display in the footer
				get_template_part( 'content', 'credits' );
		?>
</div>

<?php get_footer(); ?>
