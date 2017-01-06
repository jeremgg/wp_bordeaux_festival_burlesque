<?php
/**
 * Template Name: formulaire
*/

?>

<?php get_header();  ?>
<?php get_sidebar(); ?>

<div class="container-page">
		<?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-12 col-md-8 col-lg-8'); ?>>
          <div class="entry-content">
            <div class="entry-content-thumbnail">
              <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
            </div>

            <header>
                <div class="post-header section">

                    <div class="post-header-inner section-inner medium">
                        <h1 class="post-title"><?php the_title(); ?></h1>
                    </div> <!-- /post-header-inner section-inner -->

                </div> <!-- /post-header section -->
          </header><!-- .entry-header -->

          <div class="content-single-f">

                <div class="post-content section-inner thin">
                    <?php the_content(); ?>

                    <div class="clear"></div>
                </div><!-- /post-content section-inner thin -->

            </div><!-- /content-single-f -->



          </div><!-- .entry-content -->
      </article>


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
