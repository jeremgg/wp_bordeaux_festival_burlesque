<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */
?>

<?php get_header(); ?>
<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
									<div class="entry-content-thumbnail">
											<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
									</div>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->

		<!-- PRESENTATION SECTION -->
				<section id="about" class="presentation-section">
		        <div class="container">

		        <!-- BLOC INTRO -->
				        <div class="row">
										<div class="col-lg-12">
												<h1><?php the_title(); ?></h1>
										</div>
								</div>
						</div>

						<?php while ( have_posts() ) : the_post(); ?>
							<div class="col-xs-12">
									<?php the_content(); ?>

							</div>

						<?php endwhile; // end of the loop. ?>
				</section>


<?php get_template_part( 'content', 'footer' ); ?>
<?php get_footer(); ?>
