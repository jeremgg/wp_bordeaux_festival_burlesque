<?php
/**
 * Template Name: accueil
*/


get_header(); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
										<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
										<h2><em>Au programme cette année,</em></h2>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->



		<!-- BOOKING SECTION -->
				<section id="home" class="home-section">
						<div class="container">

							<!-- CAROUSSEL -->
							<div class="row slider">
									<div class="col-md-12">
											<div class="carousel carousel-showsixmoveone slide" id="carousel123">
													<div class="carousel-inner">
															<div class="item active">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="/Bordeaux-burlesque-festival/site2/wp-content/uploads/2016/11/home-mascaron-1.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-1.jpg" class="img-responsive first"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="/Bordeaux-burlesque-festival/site2/wp-content/uploads/2016/11/home-mascaron-2.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-2.jpg" class="img-responsive second"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="/Bordeaux-burlesque-festival/site2/wp-content/uploads/2016/11/home-mascaron-3.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-3.jpg" class="img-responsive third"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="assets/images/home-mascaron-1.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-1.jpg" class="img-responsive first"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="assets/images/home-mascaron-2.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-2.jpg" class="img-responsive second"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="assets/images/home-mascaron-3.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-3.jpg" class="img-responsive third"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="assets/images/home-mascaron-1.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-1.jpg" class="img-responsive first"></a>
																</div>
															</div>
															<div class="item">
																<div class="col-xs-12 col-sm-6 col-md-4 artist">
																		<img src="assets/images/home-mascaron-2.png" class="img-responsive">
																		<a href="#" class="img-oval"><img src="assets/images/home-artistes-2.jpg" class="img-responsive second"></a>
																</div>
															</div>
														</div>
														<a class="left carousel-control" href="#carousel123" data-slide="prev"><img src="assets/images/chevron-g.png" alt="" /></a>
														<a class="right carousel-control" href="#carousel123" data-slide="next"><img src="assets/images/chevron-d.png" alt="" /></a>

														<!-- Indicators -->
														<div class="row indicator">
																<ol class="carousel-indicators">
																		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
																		<li data-target="#myCarousel" data-slide-to="1"></li>
																		<li data-target="#myCarousel" data-slide-to="2"></li>
																		<li data-target="#myCarousel" data-slide-to="3"></li>
																		<li data-target="#myCarousel" data-slide-to="4"></li>
																		<li data-target="#myCarousel" data-slide-to="5"></li>
																		<li data-target="#myCarousel" data-slide-to="6"></li>
																		<li data-target="#myCarousel" data-slide-to="7"></li>
																</ol>
														</div><!-- /.row indicator -->
												</div><!-- /.carousel -->
										</div><!-- /.col-md-12 -->
								</div><!-- /.row slider -->


									<!-- DERNIERS BILLETS DU BLOG -->
									<div class="row blog">

											<?php
											$args = array(
													'showposts' => 2,
													'orderby'  => 'date', // ordre par date
											);
													$recentPosts = new WP_Query();
													$recentPosts->query($args);
											?>

											<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

												<?php $imageData = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_large'); ?>
												<!-- post -->
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 post-1" style="background-image: url('<?php echo $imageData[0]?>'); background-size: 110%;">
																<div class="col-sm-6 col-md-6 col-lg-6">
																		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
																		<span class="date">le <?php the_date('j F Y'); ?> par <?php the_author(); ?></span>
																		<p><?php the_excerpt(); ?></p>
																		<a href="<?php the_permalink() ?>" class="btn btn-default">lire la suite ...</a>
																</div>
														</div>
												</div>
												<?php endwhile; ?>


									</div><!-- /.row -->

									<div class="content-title">
										<?php
												// Contrôler si ACF est actif
												if ( !function_exists('get_field') ) return;
										?>
										<h1><?php the_field('titre_secondaire'); ?></h1>
									</div>
				</div><!-- /.container -->
		</section><!-- /.home-section -->

<?php get_footer(); ?>
