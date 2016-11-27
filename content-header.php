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

				</div><!-- /.container -->
		</section><!-- /.presentation-section -->
