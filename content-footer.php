<?php
/**
 * The template for displaying the footer of the blog.
 *
 */
?>

<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pont_pierre.png" class="img-responsive img-footer" alt="Responsive image">
				<div class="row partenairs">
						<?php $partenairs = new WP_Query(array(
								'post_type' => 'partenaires'
						));  ?>

						<?php if ($partenairs->have_posts()) : $partenairs->the_post(); ?>
						<!-- PARTENAIRES ET RESEAUX SOCIAUX -->
						<div class="col-lg-12">
								<div id="rs-bottom" class="col-xs-12 col-sm-2 col-md-2 col-lg-2 rs">
										<a href="http://fb.me/BordeauxFestivalBurlesque" target="_blank" class="col-xs-6"><i class="fa fa-facebook fa-lg"></i></a>
										<a href="#" class="col-xs-6"><i class="fa fa-instagram fa-lg"></i></a>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-sm-push-2 col-lg-2">
										<a href="mailto:j.33@hotmail.fr">nous écrire</a>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-sm-pull-2 col-lg-2">
										<a href="<?php the_field('lien_1'); ?>">
												<?php $logo1 = get_field('logo_1'); if (!empty($logo1)): ?>
														<img src="<?php echo $logo1['url']; ?>" class="img-responsive" alt="Responsive image">
												<?php endif; ?>
										</a>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										<a href="<?php the_field('lien_2'); ?>" target="_blank">
											<?php $logo2 = get_field('logo_2'); if (!empty($logo2)): ?>
													<img src="<?php echo $logo2['url']; ?>" class="img-responsive" alt="Responsive image">
											<?php endif; ?>
										</a>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										<a href="<?php the_field('lien_3'); ?>" target="_blank">
											<?php $logo3 = get_field('logo_3'); if (!empty($logo3)): ?>
													<img src="<?php echo $logo3['url']; ?>" class="img-responsive" alt="Responsive image">
											<?php endif; ?>
										</a>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										<a href="<?php the_field('lien_4'); ?>" target="_blank">
											<?php $logo4 = get_field('logo_4'); if (!empty($logo4)): ?>
													<img src="<?php echo $logo4['url']; ?>" class="img-responsive" alt="Responsive image">
											<?php endif; ?>
										</a>
								</div>
						</div><!-- partenaires et réseaux sociaux -->
					<?php endif; ?>

						<!-- MENTIONS LEGALES -->
						<?php
								wp_nav_menu(array(
										'theme_location' 	=> 'bottom',
										'container'         => 'div',
										'container_id'      => 'mentions',
										'container_class'   => 'col-xs-12 col-sm-12 col-md-12 col-lg-12 mentions',
										'menu_class' 		=> 'navbar-mentions',
										'menu_id'			=> 'navbar-mentions',
										'walker' 			=> ''
								));
						?>

						<div class="navbar-center">
								<!-- navigation menu -->



						</div><!--/.navbar-center -->

				</div><!-- /.row partenairs -->
		</div><!-- /.container -->
</footer><!-- /.footer -->
