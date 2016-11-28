<?php
/**
 * Template Name: reservation
*/


get_header(); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
									<div class="entry-content-thumbnail">
										<?php the_post_thumbnail(); ?>
									</div>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->


		<!-- BOOKING SECTION -->
		<section id="about" class="booking-section">
				<div class="container">

		        <!-- BLOC INTRO -->
				        <div class="row">
										<div class="col-lg-12">
												<?php
														// Contrôler si ACF est actif
														if ( !function_exists('get_field') ) return;
												?>
												<h1><?php the_field('titre_secondaire'); ?></h1>
												<p><?php the_field('intro'); ?></p>
										</div>
				        </div><!-- /.row -->

						<!-- BLOC DE RESERVATION -->
                <div class="row booking first">
									<?php $reserv = new WP_Query(array(
											'post_type' => 'reservations',
											'posts_per_page' => 4,
									));  ?>

									<?php while ($reserv->have_posts()) : $reserv->the_post(); ?>
                    <!-- /.BLOC FIRST -->
                    <div class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-4 col-md-offset-2 col-lg-4 col-lg-offset-2">
                        <?php $image = get_field('image'); if (!empty($image)): ?>
														<img src="<?php echo $image['url']; ?>" class="img-responsive logo" >
                        <?php endif; ?>
												<h2><?php the_title(); ?></h2>
                        <div class="col-sm-4 col-md-4 col-lg-4 links fnac">
                            <?php $link_1 = get_field('logo_lien_1'); if (!empty($link_1)): ?>
																<a href="<?php the_field('lien_1'); ?>" target="_blank">
		                                <img src="<?php echo $link_1['url']; ?>" class="img-responsive logo">
		                            </a>
														<?php endif; ?>
                        </div>

                        <div class="col-sm-4 col-md-4 col-lg-4 links digitick">
                            <?php $link_2 = get_field('logo_lien_2'); if (!empty($link_2)): ?>
																<a href="<?php the_field('lien_2'); ?>" target="_blank">
		                                <img src="<?php echo $link_2['url']; ?>" class="img-responsive logo">
		                            </a>
														<?php endif; ?>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4 links ticketmaster">
                            <?php $link_3 = get_field('logo_lien_3'); if (!empty($link_3)): ?>
																<a href="<?php the_field('lien_3'); ?>" target="_blank">
		                                <img src="<?php echo $link_3['url']; ?>" class="img-responsive logo">
		                            </a>
														<?php endif; ?>
                        </div>
                    </div><!-- /.bloc first -->
										<?php endwhile; ?>
                </div><!-- /.row booking first -->

            </div><!-- /.container -->
        </section><!-- /.booking-section -->

<?php get_footer(); ?>
