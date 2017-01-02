<?php
/**
 * Template Name: basics
*/


get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
										<img src="http://placehold.it/1200x725" class="img-responsive" alt="Responsive image">
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->



		<!-- BOOKING SECTION -->
				<section id="home" class="home-section">
						<div class="container">

									<?php the_content(); ?>



				</div><!-- /.container -->
		</section><!-- /.home-section -->

		<?php get_template_part( 'content', 'footer' ); ?>

<?php get_footer(); ?>
