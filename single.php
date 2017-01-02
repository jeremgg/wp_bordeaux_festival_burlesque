<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

<?php get_sidebar(); ?>

	<div class="container-single">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php //_tk_content_nav( 'nav-below' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
	<div class="clear"></div>

	<div class="credits section">

	<div class="credits-inner section-inner">

		<p class="fleft">

			&copy; <?php echo date("Y") ?> <a href="<?php echo home_url(); ?>" title="<?php esc_attr( bloginfo('name') ); ?>"><?php bloginfo('name'); ?></a>

		</p>

		<p class="fright">

			<a title="<?php _e('To the top', 'bfb'); ?>" href="#" class="tothetop"><?php _e('Up', 'bfb' ); ?> &uarr;</a>

		</p>

		<div class="clear"></div>

	</div> <!-- /credits-inner -->

</div> <!-- /credits -->
</div>

<?php get_footer(); ?>
