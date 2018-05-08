<?php
// Include Bootstrap NavWalker
require_once('assets/_inc/wp_bootstrap_navwalker.php');

function barefoot_enqueue_styles(){
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/main.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'barefoot_enqueue_styles', PHP_INT_MAX);

if( !is_admin()){
	function bfl_register_js(){
		wp_register_script('jquery.main.min', get_stylesheet_directory_uri() . '/assets/js/main.min.js', 'jquery', '', true);
	}
	add_action('wp_enqueue_script','jquery.main.min', 11);
}


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
		'rewrite'			=>	array('slug' => 'promos'),
		'supports'			=>	array('title','author','excerpt','thumbnail','custom-fields','order','page-attributes','editor'),
		'menu_position'		=>	20,
		'menu_icon'			=>	'dashicons-megaphone',
		'has_archive'		=>	false,
	));
}

// Post Type for Events
add_action('init', 'create_events');
function create_events(){
	register_post_type('events', array(
		'label'				=>	__('Events'),
		'singular_label'	=>	__('Event'),
		'public'			=>	true,
		'show_ui'			=>	true,
		'capability_type'	=>	'post',
		'hierarchical'		=>	'true',
		'rewrite'			=>	array('slug' => 'events'),
		'supports'			=>	array('title','author','excerpt','thumbnail','custom-fields','order','page-attributes'),
		'menu_position'		=>	20,
		'menu_icon'			=>	'dashicons-tickets-alt',
		'has_archive'		=>	false,		
	));
}




//wp_enqueue_style('child-style.min');