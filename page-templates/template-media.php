<?php
/**
 * Template Name: media
*/


get_header(); ?>

<!-- INFOS PRATIQUES SECTION -->
<section id="media" class="media-section">
    <div class="container">

        <!-- HEADER GALERIE -->
            <div class="row">
              <div class="entry-content">
            			<?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    	<header>
                    		<h1 class="page-title"><?php the_title(); ?></h1>
                        <p><?php the_ID(); ?></p>
                    	</header><!-- .entry-header -->

                    	<div class="entry-content">
                    			<?php the_post_thumbnail(); ?>

<?php do_shortcode('[aigpl-gallery-slider]'); ?>
                    		<?php the_content(); ?>
                    		<?php
                    			wp_link_pages( array(
                    				'before' => '<div class="page-links">' . __( 'Pages:', '_tk' ),
                    				'after'  => '</div>',
                    			) );
                    		?>
                    	</div><!-- .entry-content -->
                    	<?php edit_post_link( __( 'Edit', '_tk' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
                    </article><!-- #post-## -->
              <?php endwhile; // end of the loop. ?>

            </div>

    </div><!-- /.container -->
</section><!-- /.infos-section -->



<?php get_footer(); ?>
