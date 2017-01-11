<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 */

get_header(); ?>
<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section content-padder error-404 not-found">
				<div class="container">
						<div class="row">
								<header>
										<h2 class="page-title"><?php _e( '<i>Erreur 404, </br>La page demandé n\'existe pas</i>', 'bfb' ); ?></h2>
								</header>

								<div class="page-content">
										<img src="http://localhost:8888/Bordeaux-burlesque-festival/site/wp-content/uploads/2016/12/nippies404.gif" alt="" class="img-responsive nippies">

										<p><?php _e( '<i>Mais vous n\'êtes pas venu pour rien !</i>', 'bfb' ); ?></p>

										<?php //get_search_form(); ?>

								</div><!-- .page-content -->
						</div><!--/.row  -->
				</div><!--/.container  -->
		</section><!--/.intro-section  -->




<?php get_template_part( 'content', 'footer' ); ?>
<?php get_footer(); ?>
