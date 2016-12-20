<?php
/**
 * Template Name: programmation
*/
?>


<?php get_header(); ?>

<!-- PROGRAMMATION SECTION -->
<section id="programming" class="programming-section">
		<div class="container">
				<div class="row">
						<div id="menu-controls" class="col-xs-12 col-md-2 col-md-offset-2 is-closed">
								<!-- CONTROL DU FILTRAGE -->
								<div class="col-xs-2 col-md-2">
										<a class="btn-control" href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/chevron-g.png" alt=""></a>
								</div>
								<div id="controls" class="col-xs-10 col-md-12">
										<ul>
												<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/goussettransparent.gif" class="day" alt=""></li>
												<li class="SELECTA2"> <a href="#" data-filtre=".samedi" >samedi 13 mai</a></li>
												<li> <a href="#" data-filtre=".dimanche" >dimanche 14 mai</a></li>
										</ul>

										<ul>
												<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/eventailtransparent.gif" class="spectacles" alt=""></li>
												<li> <a href="#" data-filtre=".shows" >shows</a></li>
												<li> <a href="#" data-filtre=".ateliers" >ateliers / workshop</a></li>
												<li> <a href="#" data-filtre=".cours" >cours / initiations</a></li>
										</ul>
								</div>
						</div>

						<div class="col-xs-12 col-md-7 col-md-offset-4">
							<div class="scroll">


										<div id="contenu" class="col-xs-12">
												<div class="col-lg-12 content-bloc samedi">
														<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/affiche-BFB-10.jpg" alt="">
												</div>
										</div>
												<!--<div class="col-lg-12 content-bloc dimanche">
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
								-->	</div>
								</div>
						</div>
				</div>
		</div>
</section><!--/.intro-section  -->

<?php get_footer(); ?>
