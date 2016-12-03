<?php
/**
 * Template Name: media
*/


get_header(); ?>

<!-- INFOS PRATIQUES SECTION -->
<section id="media" class="media-section">
    <div class="container">

        <!-- HEADER GALERIE -->
            <div class="row">
                <div class="col-sm-2 col-sm-offset-1 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1 search">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>

                <div class="col-xs-12 col-sm-6 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1 topbar">
                    <span id="close" class="back"><img src="assets/images/chevron-g-2.png" alt="" /></span>
                    <h3 id="name"></h3>
                    <!--<h3 id="titre">la galerie du BFB</h3>-->
                </div>
            </div>

        <!-- ALBUM -->
            <div class="row">
                <div class="col-lg-12">
                    <ul id="tp-grid" class="col-lg-12 tp-grid">

                        <!-- ALBUM FIRST -->
                        <li data-pile="Les boylesques">
                            <a href="http://drbl.in/cmVe">
                                <div class="open">
                                    <img src="http://drbl.in/cmVe" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Les boylesques">
                            <a href="http://drbl.in/cmhM">
                                <div class="open">
                                    <img src="http://drbl.in/cmhM" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Les boylesques">
                            <a href="http://drbl.in/eKdt">
                                <div class="open">
                                    <img src="http://drbl.in/eKdt" />
                                </div>
                            </a>
                        </li>

                        <!-- ALBUM SECOND -->
                        <li data-pile="Mike Dornseif">
                            <a href="http://drbl.in/eiUm">
                                <div class="open">
                                    <img src="assets/images/galerie/2/1.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Mike Dornseif">
                            <a href="http://drbl.in/ekMY">
                                <div class="open">
                                    <img src="assets/images/galerie/2/2.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Mike Dornseif">
                            <a href="http://drbl.in/esQV">
                                <div class="open">
                                    <img src="assets/images/galerie/2/3.jpg" />
                                </div>
                            </a>
                        </li>

                        <!-- ALBUM THIRD -->
                        <li data-pile="Griffin Moore">
                            <a href="http://drbl.in/fzUB">
                                <div class="open">
                                    <img src="assets/images/galerie/3/1.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Griffin Moore">
                            <a href="http://drbl.in/fQEv">
                                <div class="open">
                                    <img src="assets/images/galerie/3/2.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Griffin Moore">
                            <a href="http://drbl.in/fREU">
                                <div class="open">
                                    <img src="assets/images/galerie/3/3.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Griffin Moore">
                            <a href="http://drbl.in/fQEv">
                                <div class="open">
                                    <img src="assets/images/galerie/3/2.jpg" />
                                </div>
                            </a>
                        </li>

                        <!-- ALBUM FOURTH -->
                        <li data-pile="Andrea Austoni">
                            <a href="http://drbl.in/cyWa">
                                <div class="open">
                                    <img src="assets/images/galerie/4/1.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Andrea Austoni">
                            <a href="http://drbl.in/cRkb">
                                <div class="open">
                                    <img src="assets/images/galerie/4/2.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Andrea Austoni">
                            <a href="http://drbl.in/cSKM">
                                <div class="open">
                                    <img src="assets/images/galerie/4/3.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Andrea Austoni">
                            <a href="http://drbl.in/cyWa">
                                <div class="open">
                                    <img src="assets/images/galerie/4/1.jpg" />
                                </div>
                            </a>
                        </li>
                        <li data-pile="Andrea Austoni">
                            <a href="http://drbl.in/cSKM">
                                <img src="assets/images/galerie/4/3.jpg" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

    </div><!-- /.container -->
</section><!-- /.infos-section -->

<script type="text/javascript">
$(function() {

  var $grid = $( '#tp-grid' ),
    $name = $( '#name' ),
    $close = $( '#close' ),
    $loader = $( '<div class="loader"><i></i><i></i><i></i><i></i><i></i><i></i><span>Loading...</span></div>' ).insertBefore( $grid ),
    stapel = $grid.stapel( {
      randomAngle : true,
      delay : 50,
      gutter : 70,
      pileAngles : 5,
      onLoad : function() {
        $loader.remove();
      },
      onBeforeOpen : function( pileName ) {
        $name.html( pileName );
      },
      onAfterOpen : function( pileName ) {
        $close.show();
      }
    } );

  $close.on( 'click', function() {
    $close.hide();
    $name.empty();
    stapel.closePile();
  } );

} );
</script>

<script type="text/javascript">
  $(function() {

      if ($('#close').css('display', 'inline')){
          $('#titre').css('display', 'none');
      }

      else{
          $('#titre').css('display', 'block');
      }
  });
</script>

<?php get_footer(); ?>
