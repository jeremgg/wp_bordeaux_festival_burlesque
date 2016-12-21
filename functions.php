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
						'translate' => __('bouton de traduction', 'bfb'),
						'topbar' => __('menu de navigation', 'bfb'),
						'bottom' => __('menu du bas de page', 'bfb'),
						'social' => __('réseaux sociaux du menu de navigation', 'bfb'),
						/*'social-nav' => __('réseaux sociaux du menu de navigation', 'bfb'),*/
						'social-bottom' => __('réseaux sociaux du footer', 'bfb')
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

		//load fancybox css
	  wp_enqueue_style(
				'customize',
				get_template_directory_uri().'/assets/css/jquery.fancybox.css',
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

function new_excerpt_length($length) {
return 21;
}
add_filter('excerpt_length', 'new_excerpt_length');

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





/** Load Custom portfolio WordPress */
require_once( get_template_directory() . '/filtres.php' );


/*************************************************
*************************************************/


//----------------------------------------------
//--------------add theme support for thumbnails
//----------------------------------------------
if ( function_exists( 'add_theme_support')){
	add_theme_support( 'post-thumbnails' );
}
add_image_size( 'admin-list-thumb', 80, 80, true); //admin thumbnail preview
add_image_size( 'album-grid', 450, 450, true );

//----------------------------------------------
//----------register and label gallery post type
//----------------------------------------------
$gallery_labels = array(
	'name' => _x('Gallery', 'post type general name'),
	'singular_name' => _x('Gallery', 'post type singular name'),
	'add_new' => _x('Add New', 'gallery'),
	'add_new_item' => __("Add New Gallery"),
	'edit_item' => __("Edit Gallery"),
	'new_item' => __("New Gallery"),
	'view_item' => __("View Gallery"),
	'search_items' => __("Search Gallery"),
	'not_found' =>  __('No galleries found'),
	'not_found_in_trash' => __('No galleries found in Trash'),
	'parent_item_colon' => ''

);
$gallery_args = array(
	'labels' => $gallery_labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => true,
	'hierarchical' => false,
	'menu_position' => null,
	'capability_type' => 'post',
	'supports' => array('title', 'excerpt', 'editor', 'thumbnail', 'tags'),
	'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
);
register_post_type('gallery', $gallery_args);


//----------------------------------------------
//------------------------create custom taxonomy
//----------------------------------------------
add_action( 'init', 'jss_create_gallery_taxonomies', 0);

function jss_create_gallery_taxonomies(){
	register_taxonomy(
		'phototype', 'gallery',
		array(
			'hierarchical'=> true,
			'label' => 'Photo Types',
			'singular_label' => 'Photo Type',
			'rewrite' => true
		)
	);
}

//----------------------------------------------
//--------------------------admin custom columns
//----------------------------------------------
//admin_init
add_action('manage_posts_custom_column', 'jss_custom_columns');
add_filter('manage_edit-gallery_columns', 'jss_add_new_gallery_columns');

function jss_add_new_gallery_columns( $columns ){
	$columns = array(
		'cb'				=>		'<input type="checkbox">',
		'jss_post_thumb'	=>		'Thumbnail',
		'title'				=>		'Photo Title',
		'phototype'			=>		'Photo Type',
		'author'			=>		'Author',
		'date'				=>		'Date'

	);
	return $columns;
}

function jss_custom_columns( $column ){
	global $post;

	switch ($column) {
		case 'jss_post_thumb' : echo the_post_thumbnail('admin-list-thumb'); break;
		case 'description' : the_excerpt(); break;
		case 'phototype' : echo get_the_term_list( $post->ID, 'phototype', '', ', ',''); break;
	}
}

//add thumbnail images to column
add_filter('manage_posts_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_pages_columns', 'jss_add_post_thumbnail_column', 5);
add_filter('manage_custom_post_columns', 'jss_add_post_thumbnail_column', 5);

// Add the column
function jss_add_post_thumbnail_column($cols){
	$cols['jss_post_thumb'] = __('Thumbnail');
	return $cols;
}

function jss_display_post_thumbnail_column($col, $id){
  switch($col){
    case 'jss_post_thumb':
      if( function_exists('the_post_thumbnail') )
        echo the_post_thumbnail( 'admin-list-thumb' );
      else
        echo 'Not supported in this theme';
      break;
  }
}

////////////////////////////////
////////// NEW CODE BELOW //////
////////////////////////////////


//----------------------------------------------
//------------------------------------enqueue js
//----------------------------------------------
function jss_load_scripts(){

	//deregister for google jQuery cdn
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "" ) . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js",  array(), false, true );
	wp_enqueue_script( 'jquery' );

	//register fancybox. change this to your local file.
	wp_deregister_script( 'fancybox' );
	wp_register_script( 'fancybox', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "" ) . "://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.4/jquery.fancybox.pack.js",  array(), false, true );
	wp_enqueue_script( 'fancybox' );

	//register modernizr. change this to your local file.
	wp_deregister_script( 'modernizr' );
	wp_register_script( 'modernizr', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "" ) . "://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js",  array(), false, true );
	wp_enqueue_script( 'modernizr' );

	//register isotope. change this to your local file.
	wp_deregister_script( 'isotope' );
	wp_register_script( 'isotope', "http" . ( $_SERVER['SERVER_PORT'] == 443 ? "s" : "" ) . "://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/1.5.25/jquery.isotope.min.js",  array(), false, true );
	wp_enqueue_script( 'isotope' );

	//general
	wp_register_script( 'general', get_template_directory_uri() . '/includes/js/general.js',  array(), false, true );
	wp_enqueue_script( 'general' );

	wp_register_script( 'iso', get_template_directory_uri() . '/includes/js/isotope.pkgd.min.js',  array(), false, true );
	wp_enqueue_script( 'iso' );
}
//set it off
add_action( 'wp_enqueue_scripts', 'jss_load_scripts' );


//----------------------------------------------
//-------------------custom tag cloud generation
//----------------------------------------------

function jss_generate_tag_cloud( $tags, $args = '' ) {
	global $wp_rewrite;

	//don't touch these defaults or the sky will fall
	$defaults = array(
		'smallest' => 8, 'largest' => 22, 'unit' => 'pt', 'number' => 0,
		'format' => 'flat', 'separator' => "\n", 'orderby' => 'name', 'order' => 'ASC',
		'topic_count_text_callback' => 'default_topic_count_text',
		'topic_count_scale_callback' => 'default_topic_count_scale', 'filter' => 1
	);

    //determine if the variable is null
    if ( !isset( $args['topic_count_text_callback'] ) && isset( $args['single_text'] ) && isset( $args['multiple_text'] ) ) {
	    //var_export
	    $body = 'return sprintf (
	    	_n(' . var_export($args['single_text'], true) . ', ' . var_export($args['multiple_text'], true) . ', $count), number_format_i18n( $count ));';
	    //create_function
	    $args['topic_count_text_callback'] = create_function('$count', $body);
	}

	//parse arguments from above
	$args = wp_parse_args( $args, $defaults );

	//extract the variables
	extract( $args );

	//check to see if they are empty and stop
	if ( empty( $tags ) )
		return;

    //apply the sort filter
	$tags_sorted = apply_filters( 'tag_cloud_sort', $tags, $args );

    //check to see if the tags have been pre-sorted
    if ( $tags_sorted != $tags  ) { // the tags have been sorted by a plugin
	    $tags = $tags_sorted;
	    unset($tags_sorted);
	} else {
        if ( 'RAND' == $order ) {
            shuffle($tags);
        } else {
            // SQL cannot save you
            if ( 'name' == $orderby )
                uasort( $tags, create_function('$a, $b', 'return strnatcasecmp($a->name, $b->name);') );
            else
                uasort( $tags, create_function('$a, $b', 'return ($a->count > $b->count);') );

            if ( 'DESC' == $order )
                $tags = array_reverse( $tags, true );
        }
    }
    //check number and slice array
    if ( $number > 0 )
        $tags = array_slice($tags, 0, $number);

    //set array
    $counts = array();

    //set array for alt tag
    $real_counts = array();

    foreach ( (array) $tags as $key => $tag ) {
        $real_counts[ $key ] = $tag->count;
        $counts[ $key ] = $topic_count_scale_callback($tag->count);
    }

    //determine min coutn
    $min_count = min( $counts );

    //default wordpress sizing
    $spread = max( $counts ) - $min_count;
    if ( $spread <= 0 )
        $spread = 1;
    $font_spread = $largest - $smallest;
    if ( $font_spread < 0 )
        $font_spread = 1;
    $font_step = $font_spread / $spread;

    $a = array();

    //iterate thought the array
    foreach ( $tags as $key => $tag ) {
        $count = $counts[ $key ];
        $real_count = $real_counts[ $key ];
        $tag_link = '#' != $tag->link ? esc_url( $tag->link ) : '#';
        $tag_id = isset($tags[ $key ]->id) ? $tags[ $key ]->id : $key;
        $tag_name = $tags[ $key ]->name;

        //If you want to do some custom stuff, do it here like we did
        //call_user_func
        $a[] = "<a href='#filter' class='tag-link-$tag_id'
		data-option-value='.$tag_name'
		title='" . esc_attr( call_user_func( $topic_count_text_callback, $real_count ) ) . "'>$tag_name</a>"; //background-color is added for validation purposes.
    }

    //set new format
    switch ( $format ) :
    case 'array' :
        $return =& $a;
        break;
    case 'list' :
    	//create our own setup of how it will display and add all
        $return = "<ul id='filters' class='option-set' data-option-key='filter'>\n\t
		<li><a href='filter' data-option-value='*' class='selected'>All</a></li>
		<li>";
        //join
        $return .= join( "</li>\n\t<li>", $a );
        $return .= "</li>\n</ul>\n";
        break;
    default :
    	//return
        $return = join( $separator, $a );
        break;
    endswitch;
        //create new filter hook so we can do this
        return apply_filters( 'jss_generate_tag_cloud', $return, $tags, $args );
}

//----------------------------------------------
//---------------------custom tag cloud function
//----------------------------------------------

//the function below is very similar to 'wp_tag_cloud()' currently located in: 'wp-includes/category-template.php'
function jss_tag_cloud( $args = '' ) {
	//set some default
	$defaults = array(
	    'format' => 'list', //display as list
	    'taxonomy' => 'phototype', //our custom post type taxonomy
		'hide_empty' => 'true',
	    'echo' => true, //touch this and it all blows up
	    'link' => 'view',
			'orderby' => 'ID',
			'order' => 'DESC',
			'posts_per_page' => 3
	);

	//use wp_parse to merge the argus and default values
	$args = wp_parse_args( $args, $defaults );

	//go fetch the terms of our custom taxonomy. query by descending and order by most posts
	$tags = get_terms( $args['taxonomy'], array_merge( $args, array( 'orderby' => 'count', 'order' => 'DESC' ) ) );

	//if there are no tags then end function
	if ( empty( $tags ))
	    return;

	//set the minimum number of posts the tag must have to display (change to whatever)
	$min_num = 1;

	//logic to display tag or not based on post count
	foreach($tags as $key => $tag)
	    {
	    	//if the post container lest than the min_num variable set above
	        if($tag->count < $min_num)
	        {
	            //unset it and destroy part of the array
	            unset($tags[$key]);
	        }
	    }

	foreach ( $tags as $key => $tag ) {
	        if ( 'edit' == $args['link'] )

	            //display the link to edit the tag, if the user is logged in and has rights
	            $link = get_edit_tag_link( $tag -> term_id, $args['taxonomy'] );
	        else
	            //get the permalink for the taxonomy
	            $link = get_term_link( intval($tag -> term_id), $args['taxonomy'] );

	        //check if there is an error
	        if ( is_wp_error( $link ) )
	            return false;

	    $tags[ $key ] -> link = $link;
	    $tags[ $key ] -> id = $tag -> term_id;
	}
	//generate our tag cloud
	$return = jss_generate_tag_cloud( $tags, $args ); // here is where whe list what we are sorting

	//create a new filter hook
	$return = apply_filters( 'jss_tag_cloud', $return, $args );

	if ( 'array' == $args['format'] || empty($args['echo']) )
	    return $return;

	echo $return;
}
//Hooks a function to a specific filter action.
//hook function to filter
add_filter('wp_tag_cloud', 'jss_tag_cloud');

//----------------------------------------------
//-------------------------get CPT taxonomy name
//----------------------------------------------
function jss_taxonomy_name(){
	 global $post;

	//get terms for CPT
	$terms = get_the_terms( $post->ID , 'phototype' );
				//iterate through array
				foreach ( $terms as $termphoto ) {
					//echo taxonomy name as class
					echo ' '.$termphoto->name;
				}
}
?>
