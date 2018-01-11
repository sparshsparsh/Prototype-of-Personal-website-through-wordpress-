<?php
function sanya_setup() {
	load_theme_textdomain( 'sanya' );


	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' ); /*Reference function(predefined passing parameter)*/

	add_theme_support( 'post-thumbnails' );

	
	register_nav_menus( array(
		'top'    => __( 'Top Menu', 'sanya' ),
		'social' => __( 'Social Links Menu', 'sanya' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );

	
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

 }
add_action( 'after_setup_theme', 'sanya_setup' );

function sanya_custom_post_type() {
 

	
	$labels = array(
        'name'                => _x( 'Photography', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Photography', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Photography', 'sanya' ),
        'parent_item_colon'   => __( 'Photography', 'sanya' ),
        'all_items'           => __( 'All Photographies', 'sanya' ),
        'view_item'           => __( 'View Photography', 'sanya' ),
        'add_new_item'        => __( 'Add Photography', 'sanya' ),
        'add_new'             => __( 'Add New', 'sanya' ),
        'edit_item'           => __( 'Edit Photography', 'sanya' ),
        'update_item'         => __( 'Update Photography', 'sanya' ),
        'search_items'        => __( 'Search Photography', 'sanya' ),
        'not_found'           => __( 'No Photography Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Photography In Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Photography', 'sanya' ),
        'description'         => __( 'Photography', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'photography', $args );
 
 $labels = array(
        'name'                => _x( 'Basketball', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Basketball', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Basketball', 'sanya' ),
        'parent_item_colon'   => __( 'Basketball', 'sanya' ),
        'all_items'           => __( 'All Basketball', 'sanya' ),
        'view_item'           => __( 'View Basketball', 'sanya' ),
        'add_new_item'        => __( 'Add Basketball', 'sanya' ),
        'add_new'             => __( 'New item', 'sanya' ),
        'edit_item'           => __( 'Edit Basketball', 'sanya' ),
        'update_item'         => __( 'Update Basketball', 'sanya' ),
        'search_items'        => __( 'Search Basketball', 'sanya' ),
        'not_found'           => __( 'No Basketball found', 'sanya' ),
        'not_found_in_trash'  => __( 'Basketball not in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Basketball', 'sanya' ),
        'description'         => __( 'Basketball', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'basketball', $args );
	
	$labels = array(
        'name'                => _x( 'Cookery', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Cookery', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Cookery', 'sanya' ),
        'parent_item_colon'   => __( 'Cookery', 'sanya' ),
        'all_items'           => __( 'All Cookery', 'sanya' ),
        'view_item'           => __( 'View Cookery', 'sanya' ),
        'add_new_item'        => __( 'Add Cookery', 'sanya' ),
        'add_new'             => __( 'Add Cookery', 'sanya' ),
        'edit_item'           => __( 'Edit Cookery', 'sanya' ),
        'update_item'         => __( 'Update Cookery', 'sanya' ),
        'search_items'        => __( 'Search Cookery', 'sanya' ),
        'not_found'           => __( 'No Cookery Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Cookery in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Cookery', 'sanya' ),
        'description'         => __( 'Cookery', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'cookery', $args );
}

	$labels = array(
        'name'                => _x( 'Achievements', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Achievements', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Achievements', 'sanya' ),
        'parent_item_colon'   => __( 'Achievements', 'sanya' ),
        'all_items'           => __( 'All Achievements', 'sanya' ),
        'view_item'           => __( 'View Achievements', 'sanya' ),
        'add_new_item'        => __( 'Add Achievements', 'sanya' ),
        'add_new'             => __( 'Add Achievements', 'sanya' ),
        'edit_item'           => __( 'Edit Achievements', 'sanya' ),
        'update_item'         => __( 'Update Achievements', 'sanya' ),
        'search_items'        => __( 'Search Achievements', 'sanya' ),
        'not_found'           => __( 'No Achievements Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Achievements in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Achievements', 'sanya' ),
        'description'         => __( 'Achievements', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'achievements', $args );

		$labels = array(
        'name'                => _x( 'Testimonials', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Testimonials', 'sanya' ),
        'parent_item_colon'   => __( 'Testimonials', 'sanya' ),
        'all_items'           => __( 'All Testimonials', 'sanya' ),
        'view_item'           => __( 'View Testimonials', 'sanya' ),
        'add_new_item'        => __( 'Add Testimonials', 'sanya' ),
        'add_new'             => __( 'Add Testimonials', 'sanya' ),
        'edit_item'           => __( 'Edit Testimonials', 'sanya' ),
        'update_item'         => __( 'Update Testimonials', 'sanya' ),
        'search_items'        => __( 'Search Testimonials', 'sanya' ),
        'not_found'           => __( 'No Testimonials Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Testimonials in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Testimonials', 'sanya' ),
        'description'         => __( 'Testimonials', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );


	$labels = array(
        'name'                => _x( 'Category', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Testimonials', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Testimonials', 'sanya' ),
        'parent_item_colon'   => __( 'Testimonials', 'sanya' ),
        'all_items'           => __( 'All Testimonials', 'sanya' ),
        'view_item'           => __( 'View Testimonials', 'sanya' ),
        'add_new_item'        => __( 'Add Testimonials', 'sanya' ),
        'add_new'             => __( 'Add Testimonials', 'sanya' ),
        'edit_item'           => __( 'Edit Testimonials', 'sanya' ),
        'update_item'         => __( 'Update Testimonials', 'sanya' ),
        'search_items'        => __( 'Search Testimonials', 'sanya' ),
        'not_found'           => __( 'No Testimonials Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Testimonials in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Testimonials', 'sanya' ),
        'description'         => __( 'Testimonials', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );

	
	$labels = array(
        'name'                => _x( 'Category', 'Post Type General Name', 'sanya' ),
        'singular_name'       => _x( 'Category', 'Post Type Singular Name', 'sanya' ),
        'menu_name'           => __( 'Category', 'sanya' ),
        'parent_item_colon'   => __( 'Category', 'sanya' ),
        'all_items'           => __( 'All Category', 'sanya' ),
        'view_item'           => __( 'View Category', 'sanya' ),
        'add_new_item'        => __( 'Add Category', 'sanya' ),
        'add_new'             => __( 'Add Category', 'sanya' ),
        'edit_item'           => __( 'Edit Category', 'sanya' ),
        'update_item'         => __( 'Update Category', 'sanya' ),
        'search_items'        => __( 'Search Category', 'sanya' ),
        'not_found'           => __( 'No Category Found', 'sanya' ),
        'not_found_in_trash'  => __( 'No Category in Trash', 'sanya' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'category', 'sanya' ),
        'description'         => __( 'category', 'sanya' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'category', $args );

	
	
	
	add_action( 'init', 'sanya_custom_post_type', 0 );
