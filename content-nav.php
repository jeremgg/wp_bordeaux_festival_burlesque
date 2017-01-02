<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">

          <?php
              wp_nav_menu(array(
                  'theme_location' 	=> 'translate',
                  'container'         => 'div',
                  'container_id'      => 'translate',
                  'container_class'   => 'collapse navbar-collapse',
                  'menu_class' 		=> 'nav navbar-nav',
                  'menu_id'			=> 'main-menu',
                  'walker' 			=> ''
              ));
          ?>

            <!-- BURGER MENU -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <!--<span class="sr-only">Toggle navigation</span>-->
                    <div class="menu-icon menu-icon-svg">
                        <span></span>
                        <svg x="0" y="0" width="34px" height="34px" viewBox="0 0 54 54">
                            <path d="M16.500,27.000 C16.500,27.000 24.939,27.000 38.500,27.000 C52.061,27.000 49.945,15.648 46.510,11.367 C41.928,5.656 34.891,2.000 27.000,2.000 C13.193,2.000 2.000,13.193 2.000,27.000 C2.000,40.807 13.193,52.000 27.000,52.000 C40.807,52.000 52.000,40.807 52.000,27.000 C52.000,13.000 40.837,2.000 27.000,2.000 "></path>
                        </svg>
                    </div>
                </button>

                <!-- LOGO -->
                <?php bfb_the_custom_logo() ?>
        </div><!--/.navbar-header -->

        <!-- NAVIGATION MENU -->
            <div class="navbar-center">
                <!-- translation button -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' 	=> 'translate',
                        'container'         => 'div',
                        'container_id'      => 'translate',
                        'container_class'   => 'collapse navbar-collapse',
                        'menu_class' 		=> 'nav navbar-nav',
                        'menu_id'			=> 'main-menu',
                        'walker' 			=> ''
                    ));
                ?>

                <!-- navigation menu -->
                <?php
                    wp_nav_menu(array(
                        'theme_location' 	=> 'topbar',
                        'container'         => 'div',
                        'container_id'      => 'navbar',
                        'container_class'   => 'collapse navbar-collapse',
                        'menu_class' 		=> 'nav navbar-nav',
                        'menu_id'			=> 'main-menu',
                        'walker' 			=> ''
                    ));
                ?>

                <!-- social media button -->
                <?php
                  /*	wp_nav_menu(array(
                        'theme_location' 	=> 'social-nav',
                        'container'         => 'div',
                        'container_id'      => 'rs-nav',
                        'container_class'   => 'collapse navbar-collapse',
                        'menu_class' 		=> 'nav navbar-nav',
                        'menu_id'			=> 'main-menu',
                        'walker' 			=> ''
                    ));*/
                ?>
            </div><!--/.navbar-center -->
    </div><!--/.container -->
</nav><!--/.navbar -->
