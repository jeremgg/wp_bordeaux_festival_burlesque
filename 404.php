<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section content-padder error-404 not-found">
				<div class="container">
						<div class="row">
								<h2 class="page-title"><?php _e( 'Erreur 404, La page demandé n\'existe pas', 'bfb' ); ?></h2>

								<div class="page-content">
										<img src="http://localhost:8888/Bordeaux-burlesque-festival/site/wp-content/uploads/2016/12/nippiesBFB6.gif" alt="" class="img-responsive nippies">

										<p><?php _e( 'Mais vous n\'êtes pas venu pour rien !', 'bfb' ); ?></p>

										<?php //get_search_form(); ?>

								</div><!-- .page-content -->
						</div><!--/.row  -->
				</div><!--/.container  -->
		</section><!--/.intro-section  -->

		<header>





<?php get_footer(); ?>
