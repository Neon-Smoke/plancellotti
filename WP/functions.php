<?php 


function load_styles()
{

	wp_register_style('general', get_template_directory_uri() . '/style.css', array(), 1, 'all'
	);
	wp_enqueue_style('general');


}

add_action('wp_enqueue_scripts', 'load_styles');

?>