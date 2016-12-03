<?php
/**
 * Template Name: organisatrices
*/


get_header(); ?>

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
												<?php
														// Contrôler si ACF est actif
														if ( !function_exists('get_field') ) return;
												?>
												<p><?php the_field('intro'); ?></p>
										</div>
				        </div><!-- /.row -->




		        <!-- BLOC ORGANISATRICES MOBILE-->
		            <div class="row organisatrices">
										<?php $organisatrices = new WP_Query(array(
												'post_type' => 'organisatrices'
										));  ?>

										<?php while ($organisatrices->have_posts()) : $organisatrices->the_post(); ?>
												<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 photos">
														<?php $image = get_field('photo'); if (!empty($image)): ?>
																<div class="col-xs-12">
						                        <img class="img-oval" src="<?php echo $image['url']; ?>">
						                    </div>
				                    <div class="col-xs-12 col-md-12 col-lg-12">
				                        <h4><?php the_title(); ?></h4>
				                        <div class="bg-content">
																	<p><?php the_content(); ?></p>
																	<?php $link_1 = get_field('lien_1'); if (!empty($link_1)): ?>
																			<p><a href="<?php the_field('lien_1'); ?>" target="_blank"><?php the_field('lien_1'); ?></a></p>
																	<?php endif; ?>
																	<?php $link_2 = get_field('lien_2'); if (!empty($link_2)): ?>
																			<p><a href="<?php the_field('lien_2'); ?>" target="_blank"><?php the_field('lien_2'); ?></a></p>
																	<?php endif; ?>
																	<?php $link_3 = get_field('lien_3'); if (!empty($link_3)): ?>
																			<p><a href="<?php the_field('lien_3'); ?>" target="_blank"><?php the_field('lien_3'); ?></a></p>
																	<?php endif; ?>
																</div>
				                    </div>
														<?php endif ?>
												</div>
										<?php endwhile; ?>

		            </div>

										<?php $organisatrices = new WP_Query(array(
												'post_type' => 'organisatrices'
										));  ?>

										<!-- BLOC ORGANISATRICES DESKOP-->
		                <div class="row photos-deskop">
												<?php while ($organisatrices->have_posts()) : $organisatrices->the_post(); ?>
													<?php $image = get_field('photo'); if (!empty($image)): ?>
				                    <div class="col-sm-4 col-md-4 col-lg-4">
				                        <img class="img-oval" src="<?php echo $image['url']; ?>">
				                    </div><!-- /.col-lg-4 -->
													<?php endif; ?>
												<?php endwhile; ?>
		                </div><!-- /.row -->


		                <!-- BLOC BIO -->
		                <div class="row bio-deskop">
												<?php while ($organisatrices->have_posts()) : $organisatrices->the_post(); ?>
														<div class="col-sm-4 col-md-4 col-lg-4">
																<h4><?php the_title(); ?></h4>
																<div class="bg-content">
																		<p><?php the_content(); ?></p>
																		<?php $link_1 = get_field('lien_1'); if (!empty($link_1)): ?>
																				<p><a href="<?php the_field('lien_1'); ?>" target="_blank"><?php the_field('lien_1'); ?></a></p>
																		<?php endif; ?>
																		<?php $link_2 = get_field('lien_2'); if (!empty($link_2)): ?>
																				<p><a href="<?php the_field('lien_2'); ?>" target="_blank"><?php the_field('lien_2'); ?></a></p>
																		<?php endif; ?>
																		<?php $link_3 = get_field('lien_3'); if (!empty($link_3)): ?>
																				<p><a href="<?php the_field('lien_3'); ?>" target="_blank"><?php the_field('lien_3'); ?></a></p>
																		<?php endif; ?>
																</div>
				                    </div><!-- /.col-lg-4 -->
												<?php endwhile; ?>
		                </div><!-- /.row bio -->

		            </div><!-- /.container -->
		        </section><!-- /.presentation-section -->

<?php get_footer(); ?>
