<?php
require_once('inc/wp_bootstrap_navwalker.php');


function add_theme_scripts(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',false,'4.1.3','all');
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css-dist/style.min.css',false,'1.0.0','all');
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',false,'4.7.0','all');
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), '4.1.3', true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'jquery' ), '4.1.3', true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

function mytheme_register_nav_menu(){
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'Knuellbau' )
	) );
}

add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );

add_theme_support( 'custom-logo', array(
	'height'      => 240,
	'width'       => 240,
	'flex-height' => true,
) );

