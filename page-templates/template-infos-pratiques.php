<?php
/**
 * Template Name: infos-pratiques
*/


get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
									<div class="entry-content-thumbnail">
										<?php echo do_shortcode("[huge_it_maps id='1']"); ?>
									</div>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->


		<!-- INFOS PRATIQUES SECTION -->
				<section id="about" class="infos-section">
						<div class="container">

								<!-- BLOC ADRESSE -->
								<div class="row lieu">
										<?php $adresse = new WP_Query(array(
												'post_type' => 'lieux',
												'showposts' => 3,
										));  ?>


                    <?php $count = wp_count_posts('lieux')->publish; ?>

										<?php while ($adresse->have_posts()) : $adresse->the_post(); ?>
								            <?php if($count == 1){  ?>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
																    <h2><?php the_title(); ?></h2>
																    <p>
																        <?php the_field('adresse'); ?><br>
																        <a href="<?php the_field('site_web'); ?>" target="_blank"><?php the_field('site_web'); ?></a><br>
																        <?php the_field('telephone'); ?>
																    </p>
																</div><!-- /.col-lg-4 -->
                            <?php } ?>

                            <?php if($count == 2){  ?>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
																    <h2><?php the_title(); ?></h2>
																    <p>
																        <?php the_field('adresse'); ?><br>
																        <a href="<?php the_field('site_web'); ?>" target="_blank"><?php the_field('site_web'); ?></a><br>
																        <?php the_field('telephone'); ?>
																    </p>
																</div><!-- /.col-lg-4 -->
                            <?php } ?>

                            <?php if($count == 3){  ?>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
																    <h2><?php the_title(); ?></h2>
																    <p>
																        <?php the_field('adresse'); ?><br>
																        <a href="<?php the_field('site_web'); ?>" target="_blank"><?php the_field('site_web'); ?></a><br>
																        <?php the_field('telephone'); ?>
																    </p>
																</div><!-- /.col-lg-4 -->
                            <?php } ?>

										<?php endwhile; ?>
								</div><!-- /.row lieu -->

								<!-- BLOC PRATIQUES -->

							<div class="row pratique">
									<?php $page = new WP_Query(array(
											'post_type' => 'pages',
									)); ?>

									<?php $page->the_post(); ?>
									<h1><?php the_field('intro'); ?></h1>

									<?php $transports = new WP_Query(array(
											'post_type' => 'transports',
											'showposts' => 4,
											'orderby'  => 'order', // ordre par date
											//'order'  => 'desc', // ordre décendant
									));  ?>
									<?php while ($transports->have_posts()) : $transports->the_post(); ?>
											<div class="row transport">
													<?php $image = get_field('image'); if (!empty($image)): ?>
															<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
																	<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="" />
															</div>
															<div class="col-xs-12 col-sm-6 col-sm-offset-1 col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1">
																	<span><?php the_field('vehicule'); ?> : </span>
																	<p><?php the_field('adresse'); ?></p>
															</div>
													<?php endif ?>
									</div><!-- row transport -->
									<?php endwhile; ?>
							</div><!-- /.row pratique -->

		      </div><!-- /.container -->
		  </section><!-- /.presentation-section -->

			<?php get_template_part( 'content', 'footer' ); ?>

<?php get_footer(); ?>
