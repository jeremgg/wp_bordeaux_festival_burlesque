<?php
/**
 * Template Name: programmation
*/
?>


<?php get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

<section id="programming" class="programming-section">
		<div class="container">
				<div class="row">
						<div id="menu-controls" class="col-xs-12 col-md-2 col-md-offset-2 col-lg-2 col-lg-offset-2 is-closed">

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

						<div class="col-xs-12 col-md-7 col-md-offset-4 col-lg-7 col-lg-offset-4">
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
																						<a href="<?php bloginfo( 'url' ) .  the_field('lien_reservation'); ?>" class="reserve"><?php the_field('text_reservation'); ?></i></a>
																		</div>
																</li><!--end li-->

														<?php endwhile; // end of the loop. ?>
												</ul><!--end photogallery-->

										</div>
								</div>
						</div>
				</div>
		</div>
</section><!--/.intro-section  -->

<?php get_template_part( 'content', 'footer' ); ?>
<?php get_footer(); ?>
