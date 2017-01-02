<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12'); ?>>

	<div class="post-image">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
	</div>

	<div class="post-header section medium-padding">
			<a href="<?php the_permalink(); ?>">
					<h1 class="post-title"><?php the_title(); ?></h1>

					<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
							<span class="posted-on"><?php the_date(); ?></span>
							<?php if ( comments_open() ) : echo '<span class="nb-comments">/</span> '; ?>
									<?php  if ( is_single() ) : comments_popup_link( '0 commentaire', '1 commentaire', '% commentaires', 'post-comments' ); ?>
									<?php else : comments_number( '0 commentaire', '1 commentaire', '% commentaires' ); ?>
									<?php endif; ?>
							<?php endif; ?>
					</div><!-- .entry-meta -->

					<?php endif; ?>

					<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
					<div class="entry-summary">
							<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
					<?php else : ?>
			</a>
	</div><!-- .post-header section medium-padding -->
	<?php endif; ?>
</article><!-- #post-## -->
