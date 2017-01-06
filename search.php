<?php
/**
 * The template for displaying Search Results pages.
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
		<section id="intro" class="intro-section results-found">
				<div class="container">
						<div class="row">
								<header>
										<h2 class="page-title"><?php printf( __( 'Résultats de recherches pour : %s', 'bfb' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
								</header><!-- .page-header -->

								<?php // start the loop. ?>
								<?php while ( have_posts() ) : the_post(); ?>
										<?php get_template_part( 'content', 'search' ); ?>
								<?php endwhile; ?>
						</div><!-- .page-content -->
				</div>
		</section>

		<?php _tk_content_nav( 'nav-below' ); ?>

<?php else : ?>
		<?php get_template_part( 'no-results', 'search' ); ?>

<?php endif; // end of loop. ?>

<?php get_footer(); ?>
