<?php
/**
 * Template Name: media
*/


get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

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
                    	</header><!-- .entry-header -->

                    	<div class="entry-content">
                      		<?php
                              $content = get_the_content();
                              if(empty($content)) : ?>
                                  <h2>COMING SOON</h2>
                              <?php else :
                                  the_content();
                              endif;
                          ?>
                      		<?php
                      			wp_link_pages( array(
                      				'before' => '<div class="page-links">' . __( 'Pages:', 'bfb' ),
                      				'after'  => '</div>',
                      			) );
                      		?>
                    	</div><!-- .entry-content -->
                  </article><!-- #post-## -->
              <?php endwhile; // end of the loop. ?>

            </div>

    </div><!-- /.container -->
</section><!-- /.infos-section -->

<?php get_template_part( 'content', 'footer' ); ?>

<?php get_footer(); ?>
