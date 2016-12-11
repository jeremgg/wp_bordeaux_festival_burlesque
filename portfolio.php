<?php

// Add Custom Post Type
function custom_post_type() {


    $labels = array(
        'name'                => ( 'Portfolio' ), // Le nom de mon menu
        'singular_name'       => ( 'Portfolio' ),
        'all_items'           => ( 'Tous les projets' ),
        'view_item'           => ( 'Voir le projet' ),
        'add_new_item'        => ( 'Ajouter un projet' ),
        'add_new'             => ( 'Ajouter' ),
        'edit_item'           => ( 'Editer un projet' ),
        'update_item'         => ( 'Mettre à jour' ),
        'search_items'        => ( 'Rechercher un projet' ),
        'not_found'           => ( 'Aucun résultat' ),
        'not_found_in_trash'  => ( 'Aucun résultat dans la corbeille' )
    );
    $args = array(
        'labels'              => $labels,
        'supports'            => array('title', 'thumbnail' ), // Permet de définir les éléments à ajouter pour notre type de contenu.
        'taxonomies'          => array( 'category' ),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true, // Pour l'ajouter dans la barre d'admin en haut dans l'onglet "Créer"
        'menu_position'       => 2, // L'ordre d'affichage dans le menu à gauche
        'menu_icon'           => 'dashicons-format-gallery', // Nom de l’icône
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page', // Permet de spécifier que l'utilisateur possède les mêmes droits qu'il a sur les pages
    );
    register_post_type( 'Portfolio', $args );

}
add_action( 'init', 'custom_post_type', 0 );


// Add Custom Category
function Portfolio_category() {
    register_taxonomy(
        'project-cat',
        'portfolio',
        array(
            'label' => __( 'Catégories' ),
            'rewrite' => array( 'slug' => 'project-cat' ),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'portfolio_category' );



/********
********/


/** Load Scripts portfolio WordPress */
function Portfolio_scripts() {
    wp_enqueue_script(
        'isotope',
        get_template_directory_uri() . '/assets/js/jquery.isotope.min.js',
        array(),
        true
    );

    wp_enqueue_script(
        'portfolio-script',
        get_template_directory_uri() . '/assets/js/portfolio.js',
        array(),
        true
    );

    wp_enqueue_style(
				'customize',
				get_template_directory_uri().'/includes/css/portfolio.css',
				array(),
        true
		);

}
add_action( 'wp_enqueue_scripts', 'Portfolio_scripts' );

?>
