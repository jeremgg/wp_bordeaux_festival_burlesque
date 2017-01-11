<?php
/**
 * Template Name: accueil
*/


get_header(); ?>

<?php get_template_part( 'content', 'nav' ); ?>

<!-- INTRO SECTION -->
		<section id="intro" class="intro-section">
				<div class="container">
						<div class="row">
								<div class="col-lg-12">
										<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive']); ?>
										<h2><em><?php the_field('titre_affiche'); ?></em></h2>
								</div>
						</div>
				</div>
		</section><!--/.intro-section  -->



		<!-- BOOKING SECTION -->
				<section id="home" class="home-section">
						<div class="container">

							<div class="row">

								<?php while ( have_posts() ) : the_post(); ?>

									<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<div class="entry-content">
												<?php do_shortcode('[aigpl-gallery-slider]'); ?>
											<?php the_content(); ?>
										</div><!-- .entry-content -->
								</article><!-- #post-## -->
						<?php endwhile; // end of the loop. ?>
							</div>


									<!-- DERNIERS BILLETS DU BLOG -->
									<div class="row blog">

											<?php
											$args = array(
													'post_type' => 'post',
													'showposts' => 2,
													'orderby'  => 'date', // ordre par date
											);
													$recentPosts = new WP_Query();
													$recentPosts->query($args);
											?>

											<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

												<?php $imageData = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_large'); ?>
												<!-- post -->
												<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 post">
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 post-1" style="background-image: url('<?php echo $imageData[0]?>'); background-size: 110%;">
																<div class="col-sm-6 col-md-6 col-lg-6">
																		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
																		<span class="date"><?php the_date('j F Y'); ?> / <?php the_author(); ?></span>
																		<p><?php the_excerpt(); ?></p>
																		<a href="<?php the_permalink() ?>" class="btn btn-default">lire la suite ...</a>
																</div>
														</div>
												</div>
												<?php endwhile; ?>
												<?php wp_reset_query(); ?>
										</div><!-- /.row -->

										<div class="row">
												<div class="content-title">
														<?php
																// Contrôler si ACF est actif
																if ( !function_exists('get_field') ) return;
														?>

														<?php $page = new WP_Query(array(
																'post_type' => 'page',
														));  ?>

														<!--<h1>Le premier festival néo-burLesque :</h1>
														<p>Enfin Bordeaux compte parmi ses festivals de renom un festival de burlesque d’envergure international et bla bla bla bla blla benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest</p>-->

														<h1><?php the_title(); ?></h1>
														<p><?php the_field('intro'); ?>
												</div>
										</div>







				</div><!-- /.container -->
		</section><!-- /.home-section -->

		<?php get_template_part( 'content', 'footer' ); ?>

<?php get_footer(); ?>
