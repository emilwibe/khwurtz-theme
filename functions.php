<?php

// ADD THEME SUPPORT
add_theme_support( 'html5', ['script', 'style'] );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

// IMAGES SIZES
add_image_size( 'size-600', 600 );
add_image_size( 'size-800', 800 );
add_image_size( 'size-1200', 1200 );
add_image_size( 'size-1800', 1800 );

// ADD POST TYPE SUPPORT
add_post_type_support( 'page', 'excerpt' );

// CSS and JS files
function kh_scripts () {
    wp_enqueue_style( 'core-styles', get_template_directory_uri() . '/dist/core.css' );
    wp_enqueue_script( 'core-scripts-footer', get_template_directory_uri() . '/dist/scripts-footer.js', '', '', true );
}

add_action( 'wp_enqueue_scripts', 'kh_scripts' );

// NAVIGATION
add_action('after_setup_theme', function(){
    register_nav_menus(array(
        'primary' => __('Primary', 'text_domain')
    ));
});

// Register Custom Post Type
function custom_post_type_vendor() {

	$labels = array(
		'name'                  => _x( 'Vendors', 'Post Type General Name', 'khwurtz_vendor' ),
		'singular_name'         => _x( 'Vendor', 'Post Type Singular Name', 'khwurtz_vendor' ),
		'menu_name'             => __( 'Vendors', 'khwurtz_vendor' ),
		'name_admin_bar'        => __( 'Vendor', 'khwurtz_vendor' ),
		'archives'              => __( 'Vendor Archives', 'khwurtz_vendor' ),
		'attributes'            => __( 'Vendor Attributes', 'khwurtz_vendor' ),
		'parent_item_colon'     => __( 'Vendor Item:', 'khwurtz_vendor' ),
		'all_items'             => __( 'All Vendors', 'khwurtz_vendor' ),
		'add_new_item'          => __( 'Add New Vendor', 'khwurtz_vendor' ),
		'add_new'               => __( 'Add New', 'khwurtz_vendor' ),
		'new_item'              => __( 'New Vendor', 'khwurtz_vendor' ),
		'edit_item'             => __( 'Edit Vendor', 'khwurtz_vendor' ),
		'update_item'           => __( 'Update Vendor', 'khwurtz_vendor' ),
		'view_item'             => __( 'View Vendor', 'khwurtz_vendor' ),
		'view_items'            => __( 'View Vendors', 'khwurtz_vendor' ),
		'search_items'          => __( 'Search Vendor', 'khwurtz_vendor' ),
		'not_found'             => __( 'Not found', 'khwurtz_vendor' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'khwurtz_vendor' ),
		'featured_image'        => __( 'Featured Image', 'khwurtz_vendor' ),
		'set_featured_image'    => __( 'Set featured image', 'khwurtz_vendor' ),
		'remove_featured_image' => __( 'Remove featured image', 'khwurtz_vendor' ),
		'use_featured_image'    => __( 'Use as featured image', 'khwurtz_vendor' ),
		'insert_into_item'      => __( 'Insert into Vendor', 'khwurtz_vendor' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Vendor', 'khwurtz_vendor' ),
		'items_list'            => __( 'Vendors list', 'khwurtz_vendor' ),
		'items_list_navigation' => __( 'Vendors list navigation', 'khwurtz_vendor' ),
		'filter_items_list'     => __( 'Filter Vendors list', 'khwurtz_vendor' ),
	);
	$args = array(
		'label'                 => __( 'Vendor', 'khwurtz_vendor' ),
		'description'           => __( 'Vendors that will link to where to buy te products', 'khwurtz_vendor' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'khwurtz_vendor', $args );

}
add_action( 'init', 'custom_post_type_vendor', 0 );

// CALCULATE DISTANCE FROM 
function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = "km", $decimals = 2){
	$degrees = rad2deg(acos((sin(deg2rad($point1_lat))*sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat))*cos(deg2rad($point2_lat))*cos(deg2rad($point1_long-$point2_long)))));
	
	switch($unit){
		case "km":
			$distance = $degrees * 111.13384;
			break;
	}
	return round($distance, $decimals);
}