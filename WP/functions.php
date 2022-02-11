<?php 


// load stylesheets


function load_styles()
{

	wp_register_style('general', get_template_directory_uri() . '/style.css', array(), 1, 'all'
	);
	wp_enqueue_style('general');

}
add_action('wp_enqueue_scripts', 'load_styles');

// load scripts

function addjs()
{

	wp_register_script('custom', get_template_directory_uri() . '/scripts/custom.js', 'jquery', false, true);
	wp_enqueue_script('custom');

}
add_action('wp_enqueue_scripts', 'addjs');


// theme options

	// navigation

add_theme_support('menus');

// menus

register_nav_menus(

	array(

			'navbar' => 'Navigation Bar',
			'mobi' => 'Mobile menu',

	)

);