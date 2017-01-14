<?php
/**
 * The template for displaying Archive pages.
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'nav' ); ?>

<?php //get_sidebar(); ?>


	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div class="container-archive">
			<div class="col-lg-12 posts">

		<?php if ( have_posts() ) : ?>

			<header class="page-title section light-padding">
				<div class="section-inner">
						<h1 class="title-page">
					<?php
						if ( is_category() ) :
							single_cat_title( __( 'Catégorie : ', 'bfb' ) );

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							/* Queue the first post, that way we know
							 * what author we're dealing with (if that is the case).
							*/
							the_post();
							printf( __( 'Auteur : %s', 'bfb' ), '<span class="vcard">' . get_the_author() . '</span>' );
							/* Since we called the_post() above, we need to
							 * rewind the loop back to the beginning that way
							 * we can run the loop properly, in full.
							 */
							rewind_posts();

						elseif ( is_day() ) :
							printf( __( 'Date : %s', 'bfb' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Mois : %s', 'bfb' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Année : %s', 'bfb' ), '<span>' . get_the_date( 'Y' ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides', 'bfb' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images', 'bfb');

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos', 'bfb' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes', 'bfb' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links', 'bfb' );

						else :
							_e( 'Archives', 'bfb' );

						endif;
					?>
				</h1>
				</div>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					//get_template_part( 'content', get_post_format() );
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12'); ?>>
						<div class="post-image">
								<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
						</div>

						<div class="post-header section medium-padding">
								<a href="<?php the_permalink(); ?>">
										<h1 class="post-title"><?php the_title(); ?></h1>

										<div class="entry-meta">
												<span class="posted-on"><?php the_date(); ?></span>
												<?php if ( comments_open() ) : echo '<span class="nb-comments">/</span> '; ?>
														<?php  if ( is_single() ) : comments_popup_link( '0 commentaire', '1 commentaire', '% commentaires', 'post-comments' ); ?>
														<?php else : comments_number( '0 commentaire', '1 commentaire', '% commentaires' ); ?>
														<?php endif; ?>
											<?php endif; ?>

										</div><!-- .entry-meta -->

										<div class="entry-summary">
											<?php the_excerpt(); ?>
										</div><!-- .entry-summary -->

								</a>
						</div><!-- .post-header section medium-padding -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php _tk_content_nav( 'archive-nav' ); ?>

		<?php else : ?>
			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</div><!-- .posts -->

		<?php
				//credit display in the footer
				get_template_part( 'content', 'credits' );
		?>

</div><!-- .container -->

<?php get_template_part( 'content', 'footer' ); ?>
 <?php get_footer(); ?>
