<?php


// Add styles and scripts.
function my_classic_theme_add_styles() {
	wp_enqueue_style( 'my-classic-theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_classic_theme_add_styles' );

function my_classic_theme_add_app_js() {
	wp_enqueue_script( 'my-classic-theme-script', get_template_directory_uri() . '/app.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'my_classic_theme_add_app_js' );

// Add title tag support.
function my_classic_theme_add_title_tag() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'my_classic_theme_add_title_tag' );

// Add menus.
function my_classic_theme_register_menus() {
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Menu', 'my-classic-theme' ),
			'footer'  => esc_html__( 'Footer Menu', 'my-classic-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'my_classic_theme_register_menus' );


// Add custom logo.
function my_classic_theme_add_custom_logo() {
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
}
add_action( 'after_setup_theme', 'my_classic_theme_add_custom_logo' );
