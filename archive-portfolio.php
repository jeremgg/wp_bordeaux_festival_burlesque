<?php
/*
* Template Name: Portfolio
*/
?>
<?php get_header(); ?>

<!-- PROGRAMMATION SECTION -->
<section id="programming" class="programming-section">
    <div class="container">
        <div class="row clearfix">
            <div id="menu-controls" class="col-xs-12 col-md-2 col-md-offset-2 is-closed">
                <!-- CONTROL DU FILTRAGE -->
                <div class="col-xs-2 col-md-2">
                    <a class="btn-control" href="#"><img src="/assets/images/chevron-g.png" alt=""></a>
                </div>
                <div id="controls" class="col-xs-10 col-md-12">
                    <ul>
                        <li><img src="/Bordeaux-burlesque-festival/site2/wp-content/uploads/2016/12/goussettransparent.gif" class="day" alt=""></li>
                        <li class="SELECTA2"> <a href="#" data-filtre=".samedi" >samedi 13 mai</a></li>
                        <li> <a href="#" data-filtre=".dimanche" >dimanche 14 mai</a></li>
                    </ul>

                    <ul>
                        <li><img src="/Bordeaux-burlesque-festival/site2/wp-content/uploads/2016/12/eventailtransparent.gif" class="spectacles" alt=""></li>
                        <li> <a href="#" data-filtre=".shows" >shows</a></li>
                        <li> <a href="#" data-filtre=".ateliers" >ateliers / workshop</a></li>
                        <li> <a href="#" data-filtre=".concerts" >concerts</a></li>
                        <li> <a href="#" data-filtre=".cours" >cours / initiations</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 col-md-7 col-md-offset-4">
                <div class="scroll">


                    <div id="contenu" class="col-xs-12 isotope">
                      <?php query_posts( array (
                          'post_type' => 'evenements',
                          'posts_per_page' => -1
                      ) );
                      ?>

                      <?php while ( have_posts() ) : the_post();
                          $filter = wp_get_post_terms( $post->ID, 'project-cat', array("fields" => "names")); ?>
                          <div class="element-item transition <?php echo $filter[0] ?>" data-category="transition">
                              <?php  the_title(); ?>
                              <?php the_post_thumbnail('medium') ?>
                              <?php
                                  $date_d = get_field('date');

                                  // Extraire Y,M,D
                                  $y = substr($date_d, 0, 10);
                                  $m = substr($date_d, 4, 2);
                                  $d = substr($date_d, 6, 2);

                                  // Créer le format UNIX
                                  $time_d = strtotime("{$d}-{$m}-{$y}");
                              ?>
                              <h6><?php echo date_i18n('l d F \/ G\hi', $time_d); ?></h6>
                              <a href="<?php the_permalink(); ?>">lien</a>
                              </p>
                          </div>
                      <?php endwhile; ?>


                        <!--<div class="col-lg-12 content-bloc samedi">
                            <img class="img-responsive" src="assets/images/RESERVATIONS.jpg" alt="">
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
                            <img class="img-responsive" src="assets/images/RESERVATIONS.jpg" alt="">
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
                  -->  </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/.intro-section  -->


<!-- ************************* -->


        <div id="content" class="clearfix">
            <div id="filters" class="button-group">
                <button class="button is-checked" data-filter="*">Tous</button>
                <?php $filters = get_terms( 'project-cat' );
                foreach ($filters as $filter ) {
                    echo '<button class="button" data-filter=".'.$filter->slug.'">'.$filter->name.'</button>';
                } ?>
            </div>
            <div class="isotope">
                <?php query_posts( array (
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1
                ) );
                while ( have_posts() ) : the_post();
                    $filter = wp_get_post_terms( $post->ID, 'project-cat', array("fields" => "names")); ?>
                    <div class="element-item transition <?php echo $filter[0] ?>" data-category="transition">
                        <?php  the_title(); ?>
                        <?php the_post_thumbnail('medium') ?>
                        <?php
                            $date_d = get_field('date');

                            // Extraire Y,M,D
                            $y = substr($date_d, 0, 10);
                            $m = substr($date_d, 4, 2);
                            $d = substr($date_d, 6, 2);

                            // Créer le format UNIX
                            $time_d = strtotime("{$d}-{$m}-{$y}");
                        ?>
                        <h6><?php echo date_i18n('l d F \/ G\hi', $time_d); ?></h6>
                        <a href="<?php the_permalink(); ?>">lien</a>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div><!-- #content -->

<?php get_footer(); ?>
