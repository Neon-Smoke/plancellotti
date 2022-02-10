<?php 


function load_styles()
{

	wp_register_style('general', get_template_directory_uri() . '/style.css', array(), 1, 'all'
	);
	wp_enqueue_style('general');


}

// load scripts

function addjs()
{

	wp_register_script('main', get_template_directory_uri() . '<?php bloginfo('template_directory');?>/scripts/custom.js', array() , '', true);
	wp_enqueue_script('main');


}

add_action('wp_enqueue_scripts', 'load_styles');