<?php
/**
 * Template Name: blog
*/

get_header(); ?>

<?php get_sidebar(); ?>

<div class="container-blog">
    <div class="col-lg-12 posts">

        <?php
            $args = array(
                'post_type' => 'post',
                'orderby'  => 'date', // ordre par date
            );
                $recentPosts = new WP_Query();
                $recentPosts->query($args);
        ?>

        <?php if ($recentPosts->have_posts()) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

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

            <?php _tk_content_nav( 'nav-below' ); ?>

        <?php else : ?>

          <?php get_template_part( 'no-results', 'archive' ); ?>
        <?php endif; ?>

    </div><!-- .posts -->

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

</div><!-- .container -->


<?php get_footer(); ?>
