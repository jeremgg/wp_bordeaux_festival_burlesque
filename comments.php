<?php if ( post_password_required() )
	return;
?>

	<?php if ( have_comments() ) : ?>

		<a name="comments"></a>

		<div class="comments section bg-grey">

			<div class="comments-inner section-inner thin">

				<div class="comments-title-container">

					<h2 class="comments-title fleft">

						  <?php printf( _nx( '1 commentaire', '%1$s commentaires', get_comments_number(), 'comments title', 'bfb' ), number_format_i18n( get_comments_number() ) ); ?>
					</h2>

					<h4 class="add-comment-title fright"><a href="#respond"><?php _e('Add yours','bfb'); ?> &rarr;</a></h4>

					<div class="clear"></div>

				</div> <!-- /comments-title-container -->

				<div class="clear"></div>

				<ol class="commentlist">
				    <?php wp_list_comments( array( 'type' => 'comment', 'callback' => 'bfb_comment' ) ); ?>
				</ol>

				<?php if (!empty($comments_by_type['pings'])) : ?>

					<div class="pingbacks">

						<div class="pingbacks-inner">

							<h3 class="pingbacks-title">

								<?php echo count($wp_query->comments_by_type[pings]) . ' ';
								echo _n( 'Pingback', 'Pingbacks', count($wp_query->comments_by_type[pings]), 'bfb' ); ?>

							</h3>

							<ol class="pingbacklist">
							    <?php wp_list_comments( array( 'type' => 'pings', 'callback' => 'bfb_comment' ) ); ?>
							</ol>

						</div>

					</div>

				<?php endif; ?>

				<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

					<div class="comments-nav-below" role="navigation">

						<div class="fleft">

							<?php previous_comments_link( '&laquo; ' . __( 'Anciens commentaires', 'bfb' ) ); ?>

						</div>

						<div class="fright">

							<?php next_comments_link( __( 'Nouveaux commentaires', 'bfb' ) . ' &raquo;' ); ?>

						</div>

						<div class="clear"></div>

					</div> <!-- /comment-nav-below -->

				<?php endif; ?>

			</div> <!-- /comments-inner -->

		</div> <!-- /comments -->

	<?php endif; ?>

	<?php if ( ! comments_open() && ! is_page() ) : ?>

		<p class="nocomments section bg-grey"><?php _e( 'Comments are closed.', 'bfb' ); ?></p>

	<?php elseif ( comments_open() ) : ?>

		<div class="respond section bg-grey">

			<a name="respond"></a>

			<div class="section-inner thin">

				<?php $comments_args = array(

					'comment_notes_before' =>
						'<p class="comment-notes">' . __( 'Your email address will not be published.', 'bfb' ) . '</p>',

					'comment_field' =>
						'<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="6" required>' . '</textarea></p>',

					'fields' => apply_filters( 'comment_form_default_fields', array(

						'author' =>
							'<div class="thirds">
								<div class="third">
									<p class="comment-form-author">' . '<input id="author" name="author" type="text" placeholder="' . __('Name','bfb') . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" /></p>
								</div>',

						'email' =>
							'<div class="third">
								<p class="comment-form-email">' . '<input id="email" name="email" type="text" placeholder="' . __('Email','bfb') . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" /></p>
							</div>',

						'url' =>
							'<div class="third">
								<p class="comment-form-url">' . '<input id="url" name="url" type="text" placeholder="' . __('Website','bfb') . '" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>
							</div>
							<div class="clear"></div>
						</div>')
					),
				);

				comment_form($comments_args);

				?>

			</div>

		</div>

	<?php endif; ?>
