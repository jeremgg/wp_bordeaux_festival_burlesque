<?php
/**
 * Template Name: slider
*/

?>


<?php get_header(); ?>

<!-- INTRO SECTION -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="http://placehold.it/1200x725" class="img-responsive" alt="Responsive image">
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
                          <?php
                              $slider_query = new WP_Query(array(
                                  'post_type' => 'slide'
                              ));
                           ?>

                           <?php if(have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                            <div class="item active">
                              <div class="col-xs-12 col-sm-6 col-md-4 artist">
                                  <?php the_post_thumbnail(); ?><img src="assets/images/home-mascaron-1.png" class="img-responsive">
                                  </div>
                            </div>
                            <?php endwhile; endif; ?>

                          </div>
                          <a class="left carousel-control" href="#carousel123" data-slide="prev"><img src="../assets/images/chevron-g.png" alt="" /></a>
                          <a class="right carousel-control" href="#carousel123" data-slide="next"><img src="../assets/images/chevron-d.png" alt="" /></a>

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
                <!-- post 1 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 post-1">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3>titre de l'article</h3>
                            <span class="date">le 20/10/2016 par Auteur</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel elementum tortor. Sed quis tellus eu lorem vehicula tincidunt id ut justo.
                            </p>
                            <button type="button" class="btn btn-default">lire la suite ...</button>
                        </div>
                    </div>
                </div>

                <!-- post 2 -->
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 post-2">
                        <div class="col-sm-6 col-sm-offset-6 col-md-6 col-md-offset-6 col-lg-6 col-lg-offset-6">
                            <h3>titre de l'article</h3>
                            <span class="date">le 20/10/2016 par Auteur</span>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel elementum tortor. Sed quis tellus eu lorem vehicula tincidunt id ut justo.
                            </p>
                            <button type="button" class="btn btn-default">lire la suite ...</button>
                        </div>
                    </div>
                </div>


            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.home-section -->




<?php get_footer(); ?>
