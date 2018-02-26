<?php
// Include Bootstrap NavWalker
require_once('assets/_inc/wp_bootstrap_navwalker.php');

function barefoot_enqueue_styles(){
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'barefoot_enqueue_styles', PHP_INT_MAX);

// Post Type for Homebuilder Promos
add_action('init', 'create_promos');
function create_promos(){
	register_post_type('promos', array(
		'label'				=>	__('Promos'),
		'singular_label'	=>	__('Promo'),
		'public'			=>	true,
		'show_ui'			=>	true,
		'capability_type'	=>	'post',
		'hierarchical'		=>	'true',
		'rewrite'			=>	array('slug' => 'promo'),
		'supports'			=>	array('title','author','excerpt','thumbnail','custom-fields','order','page-attributes','editor'),
		'menu_position'		=>	20,
		'menu_icon'			=>	'dashicons-megaphone',
		'has_archive'		=>	false,
	));
}



//wp_enqueue_style('child-style.min');