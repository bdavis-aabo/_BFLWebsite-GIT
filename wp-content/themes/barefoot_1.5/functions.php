<?php
// Include Bootstrap NavWalker
require_once('assets/_inc/wp_bootstrap_navwalker.php');

	
/* Remove Admin Bar from Frontend */
add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar(){
	show_admin_bar(false);
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true);  			// Large Thumbnail
    add_image_size('medium', 250, '', true); 			// Medium Thumbnail
    add_image_size('small', 125, '', true);  			// Small Thumbnail
    add_image_size('model-thumb', 120, 100, true);		// Model Thumbnail
    add_image_size('builder-thumb', 450, '', true);	// Builder Thumbnail
    add_image_size('builder-logo', 350, '', true);
    
    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');
}

add_action('after_setup_theme', 'wpt_setup');
if(!function_exists('wpt_setup')):
	function wpt_setup() {
		register_nav_menu('primary', __('Primary Navigation', 'wptmenu'));
	}
endif;

function wpt_register_js(){
	if( !is_admin()){
		wp_deregister_script('jquery');
		
	wp_register_script('jquery', '/bower_components/jquery/dist/jquery.min.js', 'jquery', '', true);
	wp_register_script('jquery.bootstrap.min', '/bower_components/bootstrap/dist/js/bootstrap.min.js', 'jquery', '', true);
	wp_register_script('jquery.easing.min', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', 'jquery', '', true);
	wp_register_script('jquery.scrolling.min', get_template_directory_uri() . '/assets/js/scrolling-nav.js', 'jquery', '', true);
	wp_register_script('jquery.scripts.min', get_template_directory_uri() . '/assets/js/scripts.min.js', 'jquery', '', true);
	wp_register_script('jquery.main.min', get_stylesheet_directory_uri() . '/assets/js/main.min.js', 'jquery', '', true);
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery.bootstrap.min');
	wp_enqueue_script('jquery.easing.min');
	wp_enqueue_script('jquery.scrolling.min');
	wp_enqueue_script('jquery.scripts.min');
	wp_enqueue_script('jquery.main.min');
	}
}

function wpt_register_css(){
	wp_register_style('bootstrap.min', '/bower_components/bootstrap/dist/css/bootstrap.min.css');
	wp_register_style('fontawesome.min', '/bower_components/font-awesome/css/font-awesome.min.css');
	wp_register_style('main.min', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('bootstrap.min');
	wp_enqueue_style('fontawesome.min');
	wp_enqueue_style('main.min');
}

add_action('init','wpt_register_js');
add_action('wp_enqueue_scripts', 'wpt_register_css');

// Add Class to Images posted on pages 
function add_responsive_class($content){
	$content = mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8');
	$document = new DOMDocument();
	libxml_use_internal_errors(true);
	
	if($content != ''){
	$document->loadHTML(utf8_decode($content));
	}
	
	$imgs = $document->getElementsByTagName('img');
	foreach($imgs as $img){
		$existing_class = $img->getAttribute('class');
		$img->setAttribute('class', 'img-responsive ' . $existing_class);
	}
	$html = $document->saveHTML();
	return $html;
}
add_filter('the_content', 'add_responsive_class');

// Post Type for Homebuilders
add_action('init', 'create_home_builders');
function create_home_builders(){
	register_post_type('home_builders', array(
		'label'				=>	__('Home Builders'),
		'singular_label'	=>	__('Home Builder'),
		'public'			=>	true,
		'show_ui'			=>	true,
		'capability_type'	=>	'post',
		'hierarchical'		=>	'true',
		'rewrite'			=>	array('slug' => 'homebuilder'),
		'supports'			=>	array('title','author','excerpt','thumbnail','custom-fields','order','page-attributes'),
		'menu_position'		=>	15,
		'menu_icon'			=>	'dashicons-admin-home',
		'has_archive'		=>	false,
	));
}

// QMI Homes Post Type and Taxonomy
add_action('init', 'create_post_type');
function create_post_type(){
	register_post_type('quickmoves', array(
		'label'				=>	__('Quick Move-Ins'),
		'singular_label'	=>	__('Quick Move-In'),
		'public'			=>	true,
		'show_ui'			=>	true,
		'capability_type'	=>	'post',
		'hierarchical'		=>	'true',
		'rewrite'			=>	array('slug' => 'quick-moveins'),
		'supports'			=>	array('title','author','excerpt','custom-fields','order','page-attributes','editor'),
		'menu_position'		=>	16,
		'menu_icon'			=>	'dashicons-admin-home',
		'has_archive'		=>	true,
	));
}

add_action('init','builder_taxonomies',0);
function builder_taxonomies(){
	$_labels = array(
		'name'				=>	_x('Builders','taxonomy general name'),
		'singular_name'		=>	_x('Builder', 'taxonomy singular name'),
		'search_items'		=>	__('Search Builders'),
		'all_items'			=>	__('All Builders'),
		'parent_item'		=>	__('Parent Builder'),
		'parent_item_colon'	=>	__('Parent Builder:'),
		'edit_item'			=>	__('Edit Builder'),
		'update_item'		=>	__('Update Builder'),
		'add_new_item'		=>	__('Add New Builder'),
		'new_item_name'		=>	__('New Builder Name'),
		'menu_name'			=>	__('Builders'),
		);
	$_args = array(
		'hierarchical'		=>	true,
		'labels'			=>	$_labels,
		'show_ui'			=>	true,
		'show_admin_column'	=>	true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'			=>	true,
		'rewrite'			=>	array('slug' => 'builder'),
		);
	register_taxonomy('builder','quickmoves',$_args);
}

// Check if Page Has Children
function is_child($_pageID){
	global $post;
	if(is_page() && ($post->post_parent == $_pageID)){
		return true;
	} else {
		return false; 
	}
}

















