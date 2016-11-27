<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( 'bfb_custom' ) ) :

		// Register Theme Features
		function bfb_custom() {

				global $cap, $content_width;

				// Add theme support for Translation
				load_theme_textdomain( 'text_domain', get_template_directory() . '/language' );

				// This theme styles the visual editor with editor-style.css to match the theme style.
				//add_editor_style();

				// Add theme support for Automatic Feed Links
				add_theme_support( 'automatic-feed-links' );

				// Add theme support for Featured Images
        add_theme_support( 'post-thumbnails' );

				// Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'quote', 'gallery', 'image', 'video', 'link', 'aside' ) );

				// Add theme support for Custom Background
				add_theme_support( 'custom-background', apply_filters( 'custom_background_args', array(
						'default-color' => 'ffffff',
						'default-image' => '',
				)));

				// Add theme support for logo
        add_theme_support( 'custom-logo', array(
	      		'height'      => 72,
	      		'width'       => 78,
	      		'flex-width' => true,
	          'flex-height' => true
        ));

				// register menu
				register_nav_menus( array(
						'topbar' => __('menu de navigation', 'bfb'),
						'bottom' => __('menu du bas de page', 'bfb'),
						'social' => __('réseaux sociaux du menu de navigation', 'bfb')
				));

				// register widget
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
						'name'          => __( 'Menu du bas', 'bfb'),
						'id'            =>  'bottom_sidebar',
						'description'   =>  '',
						'class'         => '',
						'before_widget' => '<li id="%1$s" class="widget %2$s">',
						'after_widget'  => '</li>',
						'before_title'  => '<h2 class="widgettitle">',
						'after_title'   => '</h2>'
				));
		}
endif; // bfb_setup

add_action( 'after_setup_theme', 'bfb_custom' );


/**
 *  add the logo
 */

function bfb_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
}

function bfb_change_logo_class($html){
				$html = str_replace('custom-logo-link', 'navbar-brand', $html);
				return $html;
		}

add_filter('get_custom_logo','bfb_change_logo_class');



/**
 * Enqueue styles
 */

function bfb_custom_styles() {

		//load base style css
		wp_enqueue_style(
				'bfb_default-style',
				get_template_directory_uri().'/style.css',
				false ,false, 'all'
		);

		//load bootstrap css
		wp_enqueue_style(
				'bfb_bootstrap',
			 	get_template_directory_uri().'/assets/css/_bootstrap.css',
			 	false ,false, 'all'
	  );

	  //load customize style css
	  wp_enqueue_style(
				'customize',
				get_template_directory_uri().'/assets/css/_style.css',
				false ,false, 'all'
		);
}
add_action( 'wp_enqueue_scripts', 'bfb_custom_styles' );



/**
 * Enqueue scripts
 */

function bfb_custom_scripts() {
		//load jquery
		wp_enqueue_script('jquery');

		wp_enqueue_script(
				'bfb_jquery-script',
				get_template_directory_uri() . '/assets/js/vendor/jquery-3.1.1.min.js',
				array(),
				true
		);

		// load bootstrap js
		wp_enqueue_script(
				'bfb_bootstrap-script',
				get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js',
				array(),
				true
		);

		// load bootstrap js
		wp_enqueue_script(
				'bfb_jquery-easing-script',
			 	get_template_directory_uri() . '/assets/js/vendor/jquery.easing.min.js',
				array(),
				true
	  );

		// load main js
		wp_enqueue_script(
				'bfb_main-script',
				get_template_directory_uri() . '/assets/js/main.js',
				array(),
				true
		);
}
add_action( 'wp_enqueue_scripts', 'bfb_custom_scripts' );



/**
 * Enqueue fonts
 */

function bfb_custom_fonts() {
		//load google-fonts
		wp_register_style('et-googleFonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i');
		wp_enqueue_style( 'et-googleFonts');

		//load font awesome
		wp_enqueue_style(
				'font-awesome',
				get_template_directory_uri().'/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css',
				false ,false, 'all'
		);
}
add_action('wp_print_styles', 'bfb_custom_fonts');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';
