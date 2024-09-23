<?php

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'pw_creer_menu');

function wpdocs_custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length');


remove_filter('the_excerpt', 'wpautop');


// Register Custom Post Type
function Modele() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'Models' ),
		'singular_name'         => _x( 'Model', 'Post Type Singular Name', 'Models' ),
		'menu_name'             => __( 'Models', 'Models' ),
		'name_admin_bar'        => __( 'Post Type', 'Models' ),
		'archives'              => __( 'Item Archives', 'Models' ),
		'attributes'            => __( 'Item Attributes', 'Models' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Models' ),
		'all_items'             => __( 'All Items', 'Models' ),
		'add_new_item'          => __( 'Add New Item', 'Models' ),
		'add_new'               => __( 'Model', 'Models' ),
		'new_item'              => __( 'Ajouter Model', 'Models' ),
		'edit_item'             => __( 'Edit Model', 'Models' ),
		'update_item'           => __( 'Update Item', 'Models' ),
		'view_item'             => __( 'View Item', 'Models' ),
		'view_items'            => __( 'View Items', 'Models' ),
		'search_items'          => __( 'Search Item', 'Models' ),
		'not_found'             => __( 'Not found', 'Models' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Models' ),
		'featured_image'        => __( 'Featured Image', 'Models' ),
		'set_featured_image'    => __( 'Set featured image', 'Models' ),
		'remove_featured_image' => __( 'Remove featured image', 'Models' ),
		'use_featured_image'    => __( 'Use as featured image', 'Models' ),
		'insert_into_item'      => __( 'Insert into item', 'Models' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Models' ),
		'items_list'            => __( 'Items list', 'Models' ),
		'items_list_navigation' => __( 'Items list navigation', 'Models' ),
		'filter_items_list'     => __( 'Filter items list', 'Models' ),
	);
	$args = array(
		'label'                 => __( 'Model', 'Models' ),
		'description'           => __( 'Post Type Description', 'Models' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-screenoptions',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Models', $args );

}
add_action( 'init', 'Modele', 0 );


function Equipe() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'Equipiers' ),
		'singular_name'         => _x( 'Equipe', 'Post Type Singular Name', 'Equipiers' ),
		'menu_name'             => __( 'Equipiers', 'Equipiers' ),
		'name_admin_bar'        => __( 'Post Type', 'Equipiers' ),
		'archives'              => __( 'Item Archives', 'Equipiers' ),
		'attributes'            => __( 'Item Attributes', 'Equipiers' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Equipiers' ),
		'all_items'             => __( 'All Items', 'Equipiers' ),
		'add_new_item'          => __( 'Add New Item', 'Equipiers' ),
		'add_new'               => __( 'Equipe', 'Equipiers' ),
		'new_item'              => __( 'Ajouter Equipe', 'Equipiers' ),
		'edit_item'             => __( 'Edit Equipe', 'Equipiers' ),
		'update_item'           => __( 'Update Item', 'Equipiers' ),
		'view_item'             => __( 'View Item', 'Equipiers' ),
		'view_items'            => __( 'View Items', 'Equipiers' ),
		'search_items'          => __( 'Search Item', 'Equipiers' ),
		'not_found'             => __( 'Not found', 'Equipiers' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Equipiers' ),
		'featured_image'        => __( 'Featured Image', 'Equipiers' ),
		'set_featured_image'    => __( 'Set featured image', 'Equipiers' ),
		'remove_featured_image' => __( 'Remove featured image', 'Equipiers' ),
		'use_featured_image'    => __( 'Use as featured image', 'Equipiers' ),
		'insert_into_item'      => __( 'Insert into item', 'Equipiers' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Equipiers' ),
		'items_list'            => __( 'Items list', 'Equipiers' ),
		'items_list_navigation' => __( 'Items list navigation', 'Equipiers' ),
		'filter_items_list'     => __( 'Filter items list', 'Equipiers' ),
	);
	$args = array(
		'label'                 => __( 'Equipe', 'Equipiers' ),
		'description'           => __( 'Post Type Description', 'Equipiers' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Equipiers', $args );

}
add_action( 'init', 'Equipe', 0 );

function Recette() {

	$labels = array(
		'name'                  => _x( 'Post Types', 'Post Type General Name', 'Recettes' ),
		'singular_name'         => _x( 'Recette', 'Post Type Singular Name', 'Recettes' ),
		'menu_name'             => __( 'Recettes', 'Recettes' ),
		'name_admin_bar'        => __( 'Post Type', 'Recettes' ),
		'archives'              => __( 'Item Archives', 'Recettes' ),
		'attributes'            => __( 'Item Attributes', 'Recettes' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Recettes' ),
		'all_items'             => __( 'All Items', 'Recettes' ),
		'add_new_item'          => __( 'Add New Item', 'Recettes' ),
		'add_new'               => __( 'Recette', 'Recettes' ),
		'new_item'              => __( 'Ajouter Recette', 'Recettes' ),
		'edit_item'             => __( 'Edit Recette', 'Recettes' ),
		'update_item'           => __( 'Update Item', 'Recettes' ),
		'view_item'             => __( 'View Item', 'Recettes' ),
		'view_items'            => __( 'View Items', 'Recettes' ),
		'search_items'          => __( 'Search Item', 'Recettes' ),
		'not_found'             => __( 'Not found', 'Recettes' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Recettes' ),
		'featured_image'        => __( 'Featured Image', 'Recettes' ),
		'set_featured_image'    => __( 'Set featured image', 'Recettes' ),
		'remove_featured_image' => __( 'Remove featured image', 'Recettes' ),
		'use_featured_image'    => __( 'Use as featured image', 'Recettes' ),
		'insert_into_item'      => __( 'Insert into item', 'Recettes' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Recettes' ),
		'items_list'            => __( 'Items list', 'Recettes' ),
		'items_list_navigation' => __( 'Items list navigation', 'Recettes' ),
		'filter_items_list'     => __( 'Filter items list', 'Recettes' ),
	);
	$args = array(
		'label'                 => __( 'Recette', 'Recettes' ),
		'description'           => __( 'Post Type Description', 'Recettes' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-write-blog',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Recettes', $args );

}
add_action( 'init', 'Recette', 0 );

function Partenaires() {

	$labels = array(
		'name'                  => _x( 'Partenaires', 'Post Type General Name', 'Partenaires' ),
		'singular_name'         => _x( 'Partenaire', 'Post Type Singular Name', 'Partenaires' ),
		'menu_name'             => __( 'Partenaires', 'Partenaires' ),
		'name_admin_bar'        => __( 'Post Type', 'Partenaires' ),
		'archives'              => __( 'Item Archives', 'Partenaires' ),
		'attributes'            => __( 'Item Attributes', 'Partenaires' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Partenaires' ),
		'all_items'             => __( 'All Items', 'Partenaires' ),
		'add_new_item'          => __( 'Add New Item', 'Partenaires' ),
		'add_new'               => __( 'ajouter partenaire', 'Partenaires' ),
		'new_item'              => __( 'nouveau partenaire', 'Partenaires' ),
		'edit_item'             => __( 'edit partenaire', 'Partenaires' ),
		'update_item'           => __( 'Update Item', 'Partenaires' ),
		'view_item'             => __( 'View Item', 'Partenaires' ),
		'view_items'            => __( 'View Items', 'Partenaires' ),
		'search_items'          => __( 'Search Item', 'Partenaires' ),
		'not_found'             => __( 'Not found', 'Partenaires' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Partenaires' ),
		'featured_image'        => __( 'Featured Image', 'Partenaires' ),
		'set_featured_image'    => __( 'Set featured image', 'Partenaires' ),
		'remove_featured_image' => __( 'Remove featured image', 'Partenaires' ),
		'use_featured_image'    => __( 'Use as featured image', 'Partenaires' ),
		'insert_into_item'      => __( 'Insert into item', 'Partenaires' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Partenaires' ),
		'items_list'            => __( 'Items list', 'Partenaires' ),
		'items_list_navigation' => __( 'Items list navigation', 'Partenaires' ),
		'filter_items_list'     => __( 'Filter items list', 'Partenaires' ),
	);
	$args = array(
		'label'                 => __( 'Partenaire', 'Partenaires' ),
		'description'           => __( 'Post Type Description', 'Partenaires' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-share',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Partenaires', $args );

}
add_action( 'init', 'Partenaires', 0 );

// Pages d'options ACF

if(function_exists("acf_add_options_page")){
	acf_add_options_page(array(
		'page_title' => 'Options générales',
		'menu_title' => 'Options générales',
		'menu_slug' => 'pw-theme-options-generales',
		'capatibility' => 'edit_posts',
		'redirect' => false,
	));
}