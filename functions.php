<?php
function top_design_assets() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'maincss', get_template_directory_uri() . '/assets/css/style.css' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array(), '20151215', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '20151215', true );
}


add_action( 'wp_enqueue_scripts', 'top_design_assets' );

show_admin_bar(false);

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'card' ) );
