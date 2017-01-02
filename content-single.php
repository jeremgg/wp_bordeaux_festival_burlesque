<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-12 col-md-8 col-lg-8'); ?>>
		<div class="entry-content">
			<div class="entry-content-thumbnail">
				<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
			</div>

			<header>
					<div class="post-header section">

							<div class="post-header-inner section-inner medium">
									<p class="post-meta-top">
											<a href="<?php the_permalink(); ?>" title="<?php the_time('h:i'); ?>"><?php the_time(get_option('date_format')); ?></a> <?php if ( comments_open() ) { echo '<span class="sep">/</span> '; comments_popup_link( '0 commentaire', '1 commentaire', '% commentaires', 'post-comments' ); } ?> <?php edit_post_link( 'Modifier l\'article', '<span class="sep">/</span> ' ); ?>
									</p>
									<h1 class="post-title"><?php the_title(); ?></h1>
							</div> <!-- /post-header-inner section-inner -->

					</div> <!-- /post-header section -->
		</header><!-- .entry-header -->

		<div class="content-single-f">

			    <div class="post-content section-inner thin">
				    	<?php the_content(); ?>

				    	<div class="clear"></div>

				    	<?php wp_link_pages('before=<p class="page-links">' . __('Pages:','bfb') . ' &after=</p>&separator=<span class="sep">/</span>'); ?>
			    </div><!-- /post-content section-inner thin -->

					<div class="post-meta section-inner thin">
							<div class="meta-block post-author">
									<h3 class="meta-title"><?php _e('Auteur de l\'article','bfb'); ?></h3>

									<div class="post-author-container">
											<?php echo get_avatar( get_the_author_meta('email'), '160' ); ?>

											<div class="post-author-inner">
													<h3><?php the_author_posts_link(); ?></h3>
													<p class="author-description"><?php the_author_meta('description'); ?></p>

													<div class="author-links">
															<a class="author-link-posts" title="<?php _e('Author archive','bfb'); ?>" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php _e('Author archive','bfb'); ?></a>

															<?php $author_url = get_the_author_meta('user_url');

															$author_url = preg_replace('#^https?://#', '', rtrim($author_url,'/'));

															if (!empty($author_url)) : ?>
																	<a class="author-link-website" title="<?php _e('Author website','bfb'); ?>" href="<?php the_author_meta('user_url'); ?>"><?php _e('Author website','bfb'); ?></a>
															<?php endif; ?>
													</div> <!-- /author-links -->
											</div><!-- /post-author-inner -->

											<div class="clear"></div>

									</div><!-- /post-author-container -->
							</div> <!-- /meta-block post-author -->

							<div class="meta-block post-cat-tags">
									<h3 class="meta-title"><?php _e('Infos sur l\'article','bfb'); ?></h3>
									<p class="post-categories">
											<?php the_category(', '); ?>
									</p>

									<?php if ( has_tag() ) : ?>
											<p class="post-tags">
													<?php the_tags('', ', '); ?>
											</p>
									<?php endif; ?>

									<div class="post-nav">
											<?php
											$next_post = get_next_post();
											if (!empty( $next_post )): ?>
													<p class="post-nav-next">
															<a title="<?php _e('Article suivant :', 'bfb'); echo ' ' . get_the_title($next_post); ?>" href="<?php echo get_permalink( $next_post->ID ); ?>"><?php echo get_the_title($next_post); ?></a>
													</p>
											<?php endif; ?>

											<?php
											$prev_post = get_previous_post();
											if (!empty( $prev_post )): ?>
													<p class="post-nav-prev">
															<a title="<?php _e('Article précédent :', 'bfb'); echo ' ' . get_the_title($prev_post); ?>" href="<?php echo get_permalink( $prev_post->ID ); ?>"><?php echo get_the_title($prev_post); ?></a>
													</p>
											<?php endif; ?>

											<div class="clear"></div>

									</div> <!-- /post-nav -->

							</div> <!-- /meta-block post-cat-tags -->

							<div class="clear"></div>

					</div> <!-- /post-meta section-inner thin -->

			</div><!-- /content-single-f -->



		</div><!-- .entry-content -->
</article>
