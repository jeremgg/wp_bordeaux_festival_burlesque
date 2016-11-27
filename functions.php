<?php

if ( ! function_exists( 'bfb_setup' ) ) :

    function bfb_setup() {
      	global $cap, $content_width;

      	// This theme styles the visual editor with editor-style.css to match the theme style.
      	//add_editor_style( 'editor-style.css' );


      	/* Add default posts and comments RSS feed links to head */
      	add_theme_support( 'automatic-feed-links' );

        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails' );

        // Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'quote', 'gallery', 'image', 'video', 'link', 'aside' ) );

        // Add theme support for logo
        add_theme_support( 'custom-logo', array(
      		'height'      => 72,
      		'width'       => 78,
      		'flex-width' => true,
          'flex-height' => true
        ));

        // Add theme support for Custom Background
       	add_theme_support( 'custom-background', apply_filters( 'bfb_custom_background_args', array(
            'default-color'          => 'ffffff',
            'default-image'          => '',
        )));

      	// Add theme support for Translation
      	load_theme_textdomain( 'bfb', get_template_directory() . '/language' );

      	// Add theme support for HTML5 Semantic Markup
      	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }

endif; // bfb_setup

add_action( 'after_setup_theme', 'bfb_setup' );




//REGISTER MENU
    function bfb_custom_menus() {
        register_nav_menus( array(
            'topbar' => __('menu de navigation', 'bfb'),
            'bottom' => __('menu du bas de page', 'bfb'),
            'social' => __('réseaux sociaux du menu de navigation', 'bfb')
        ));
    }
    add_action( 'init', 'bfb_custom_menus' );



// REGISTER WIDGET
    function bfb_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Menu de gauche', 'bfb'),
            'id'            =>  'left_sidebar',
            'description'   =>  '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));

        register_sidebar( array(
            'name'          => __( 'Menu de droite', 'bfb'),
            'id'            =>  'right_sidebar',
            'description'   =>  '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));

        register_sidebar( array(
            'name'          => __( 'bas de page', 'bfb'),
            'id'            =>  'bottom_sidebar',
            'description'   =>  '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));
    }
    add_action( 'widgets_init', 'bfb_widgets_init' );



//==================================
//==================================


//ajouter le logo
function bfb_the_custom_logo() {
    if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
    }
}

//changer la class de son container
function change_logo_class($html){
        $html = str_replace('custom-logo-link', 'navbar-brand', $html);
        return $html;
    }

add_filter('get_custom_logo','change_logo_class');


//==================================
//==================================


//AJOUTER LES FICHIER CSS ET JS
    function custom_scripts_styles() {

        //ajouter les fichiers css
            wp_enqueue_style(
                'default-style',
                get_template_directory_uri().'/style.css',
                false ,false, 'all'
            );

            wp_enqueue_style(
               'bootstrap',
               get_template_directory_uri().'/assets/css/_bootstrap.css',
                false ,false, 'all'
           );

           wp_enqueue_style(
              'customize',
              get_template_directory_uri().'/assets/css/_style.css',
              false ,false, 'all'
          );


      //ajouter les fichier javascript
          wp_enqueue_script('jquery');

          wp_enqueue_script(
              'jquery-script',
              get_template_directory_uri() . '/assets/js/vendor/jquery-3.1.1.min.js',
              array(),
              true
           );

          wp_enqueue_script(
              'bootstrap-script',
              get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js',
              array(),
              true
           );

            wp_enqueue_script(
                'jquery-easing-script',
                get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js',
                array(),
                true
            );

            wp_enqueue_script(
                'main-script',
                get_template_directory_uri() . '/assets/js/main.js',
                array(),
                true
            );
    }
    add_action( 'wp_enqueue_scripts', 'custom_scripts_styles' );


//==================================
//==================================


//CHARGER LES FONTS
    function load_fonts() {
        wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i');
        wp_enqueue_style( 'et-googleFonts');

        wp_enqueue_style(
           'font-awesome',
           get_template_directory_uri().'/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
           false ,false, 'all'
        );
    }
    add_action('wp_print_styles', 'load_fonts');


 ?>
