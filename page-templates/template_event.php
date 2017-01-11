<?php
/**
 * Template Name: event
*/


get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro-header" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
									<div class="entry-content-thumbnail">
											<?php $events = new WP_Query(array(
													'post_type' => 'events',
											));  ?>

											<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

											<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
											<div class="row">
													<h1><?php the_title(); ?></h1>
													<?php
															// Contrôler si ACF est actif
															if ( !function_exists('get_field') ) return;
													?>
													<?php
	                            $date_d = get_field('date');

	                            // Extraire Y,M,D
	                            $y = substr($date_d, 0, 10);
	                            $m = substr($date_d, 4, 2);
	                            $d = substr($date_d, 6, 2);

	                            // Créer le format UNIX
	                            $time_d = strtotime("{$d}-{$m}-{$y}");
	                        ?>
													<p class="date"><?php echo date_i18n('l d F \/ G\hi / ', $time_d); the_field('lieu'); ?></p>
													<p class="price">tarifs unique : <?php the_field('tarif'); ?> euros</p>
											</div>
									</div>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->

		<!-- PRESENTATION SECTION -->
				<section id="about" class="event-section">
		        <div class="container">

		        <!-- BLOC INTRO -->
				        <div class="row">
										<div class="col-xs-12">
												<h2><?php the_field('sous_titre'); ?></h2>

												<p><?php the_content(); ?></p>

												<p class="content"><?php the_field('contenu'); ?></p>
												<p class="artists"><?php the_field('artistes'); ?></p>


												<div class="row">
														<div class="col-xs-4 prev">
																<?php previous_post_link('%link', '<img src="' . get_bloginfo("template_directory") . '/assets/images/chevron-g.png" />'); ?>
														</div>
														<div class="col-xs-4">
																<a href="<?php get_template_directory_uri() .  the_field('lien_reservation'); ?>" class="interessed">Je veux y aller</a>
														</div>
														<div class="col-xs-4 next">
																<?php next_post_link('%link', '<img src="' . get_bloginfo("template_directory") . '/assets/images/chevron-d.png" />'); ?>
														</div>
												</div>
										</div>

				        </div><!-- /.row -->
						</div><!-- /.container -->
		    </section><!-- /.presentation-section -->
			<?php endwhile; ?>
		<?php endif; ?>


<?php get_template_part( 'content', 'footer' ); ?>

<?php get_footer(); ?>
