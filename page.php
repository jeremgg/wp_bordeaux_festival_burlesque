<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<?php if (is_page( 'mapage' )) : ?>

		<section id="programming" class="programming-section">
				<div class="container">
						<div class="row">
								<div id="menu-controls" class="col-xs-12 col-md-2 col-md-offset-2 is-closed">
									<!-- CONTROL DU FILTRAGE -->
									<div class="col-xs-2 col-md-2">
											<a class="btn-control" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron-g.png" alt=""></a>
									</div>

										<div id="options" class="col-xs-10 col-md-12">
												<?php
														//check to see if our custom tag cloud exists and display it
														if( function_exists( 'jss_tag_cloud' )) {
																jss_tag_cloud( $args = '' );
														} else {
																//funny error message. probably need to replace this in your build.
																echo 'Something has gone terribly wrong here!';
														}
												?>
										</div>
								</div>

								<div class="col-xs-12 col-md-7 col-md-offset-4">
										<div class="scroll">
												<div id="contenu" class="col-xs-12">
														<ul class="photogal">
																<?php
																		//setup new WP_Query
																		$wp_query = new WP_Query(
																				array(
																						'posts_per_page'	=>	-1,
																						'post_type'			=>	'gallery'
																				)
																		);
																?>

																<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
																		<li class="element <?php if( function_exists('jss_taxonomy_name')){ jss_taxonomy_name(); }?>">
																				<a class="fancybox" rel="<?php if( function_exists('jss_taxonomy_name')){ jss_taxonomy_name(); }?>" href="
																						<?php
																								//get post thumbnail id
																								$image_id = get_post_thumbnail_id();
																								//go get image attributes [0] => url, [1] => width, [2] => height
																								$image_url = wp_get_attachment_image_src($image_id,'', true);
																								//echo out the url
																								echo $image_url[0];
																						?>
																				">
																				<?php if ( has_post_thumbnail() ) : ?>
																						<a href="<?php the_permalink(); ?>">
																								<?php the_post_thumbnail('album-grid', ['class' => 'img-responsive']); ?>
																						</a>
																				<?php endif; ?>

																				</a>

																				<div class="content-block">
																						<a href="<?php the_permalink(); ?>" class="event-title"><?php the_title(); ?></a>
																								<?php
																										$date_d = get_field('date');

															                      // Extraire Y,M,D
															                      $y = substr($date_d, 0, 10);
															                      $m = substr($date_d, 4, 2);
															                      $d = substr($date_d, 6, 2);

															                      // Créer le format UNIX
															                      $time_d = strtotime("{$d}-{$m}-{$y}");
															                  ?>
																								<p class="date"><em><?php echo date_i18n('l d F / ', $time_d); the_field('horaire'); ?></em></p>
																								<a href="<?php the_permalink(); ?>" class="plus"><i class="fa fa-plus"></i></a>
																								<a href="/Bordeaux-burlesque-festival/site2/reservation/" class="reserve">je réserve !</i></a>
																				</div>
																		</li><!--end li-->

																<?php endwhile; // end of the loop. ?>
														</ul><!--end photogallery-->
												<?php else: ?>
														<h1> ca marche pas</h1>
														<!-- no posts found -->

												<?php endif; //have_posts() ?>

										</div>
								</div>
						</div>
				</div>
		</div>
</section><!--/.intro-section  -->


								<!-- PROGRAMMATION SECTION -->
								<!--<section id="programming" class="programming-section">
										<div class="container">
												<div class="row">-->
														<!--<div id="menu-controls" class="col-xs-12 col-md-2 col-md-offset-2 is-closed">-->
																<!-- CONTROL DU FILTRAGE -->
															<!--	<div class="col-xs-2 col-md-2">
																		<a class="btn-control" href="#"><img src="assets/images/chevron-g.png" alt=""></a>
																</div>
																<div id="options" class="col-xs-10 col-md-12">
																		<ul>
																				<li><img src="<?php// echo get_template_directory_uri(); ?>/assets/images/goussettransparent.gif" class="day" alt=""></li>
																				<li class="SELECTA2"> <a href="#" data-filtre=".samedi" >samedi 13 mai</a></li>
																				<li> <a href="#" data-filtre=".dimanche" >dimanche 14 mai</a></li>
																		</ul>

																		<ul>
																				<li><img src="<?php //echo get_template_directory_uri(); ?>/assets/images/eventailtransparent.gif" class="spectacles" alt=""></li>
																				<li> <a href="#" data-filtre=".shows" >shows</a></li>
																				<li> <a href="#" data-filtre=".ateliers" >ateliers / workshop</a></li>
																				<li> <a href="#" data-filtre=".concerts" >concerts</a></li>
																				<li> <a href="#" data-filtre=".cours" >cours / initiations</a></li>
																		</ul>
																</div>
														</div>-->

														<!--<div class="col-xs-12 col-md-7 col-md-offset-4">
																<div class="scroll">


																		<div id="contenu" class="col-xs-12">
																				<div class="col-lg-12 content-bloc samedi">
																						<img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/assets/images/goussettransparent.gif" alt="">
																						<div class="col-lg-12 content">
																								<h2>initiation à l'éventail</h2>
																								<p class="date"><em>samedi 13 mai / 15h00</em></p>
																								<a href="#" class="plus"><i class="fa fa-plus"></i></a>
																								<a href="#" class="reserve">je réserve !</i></a>
																						</div>
																				</div>
																				<div class="col-lg-12 content-bloc dimanche">
																						<h2>cours d'effeuillage</h2>
																						<p class="date"><em>samedi 13 mai / 18h00</em></p>
																						<a href="#" class="plus"><i class="fa fa-plus"></i></a>
																						<a href="#" class="reserve">je réserve !</i></a>
																				</div>
																				<div class="col-lg-12 content-bloc shows">
																						<img class="img-responsive" src="<?php //echo get_template_directory_uri(); ?>/assets/images/goussettransparent.gif" alt="">
																						<div class="col-lg-12 content">
																								<h2>show cola</h2>
																								<p class="date"><em>samedi 13 mai / 21h00</em></p>
																								<a href="#" class="plus"><i class="fa fa-plus"></i></a>
																								<a href="#" class="reserve">je réserve !</i></a>
																						</div>
																				</div>
																				<div class="col-lg-12 ateliers"></div>
																				<div class="col-lg-12 concerts"></div>
																				<div class="col-lg-12 cours"></div>
																				<p style="color: green">bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</p>
																		</div>
																</div>
														</div>
												</div>
										</div>
								</section>--><!--/.intro-section  -->

<?php get_footer(); ?>
