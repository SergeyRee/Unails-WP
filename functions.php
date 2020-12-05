<?php
add_action('wp_enqueue_scripts', 'unails_scripts');

remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

function my_deregister_styles_and_scripts() {
    wp_dequeue_style('wp-block-library');
}

add_action( 'wp_print_styles', 'my_deregister_styles_and_scripts', 100 );


add_action('init', 'remove_admin_bar');
function remove_admin_bar() {
	show_admin_bar(false);
}


function unails_scripts() {
    wp_enqueue_style( 'unails-style', get_stylesheet_uri() );
    wp_enqueue_script( 'unails-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );

    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Kaushan+Script|Marck+Script|Montserrat:400,700&amp;subset=cyrillic-ext' );

        
    wp_enqueue_script( 'jquery-scripts', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', array(), null, true );
    wp_enqueue_script( 'popper-scripts', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), null, true );
    wp_enqueue_script( 'bootstrap-scripts', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array(), null, true );
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

?>