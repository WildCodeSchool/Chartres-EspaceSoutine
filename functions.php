<?php    
function enqueue_bootstrap() {
  // Ces deux lignes ne sont utiles que si vous utilisez les fonctionnalites JavaScript
  wp_enqueue_script('jquery');
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );

function my_add_frontend_scripts() {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-ui-core');
}
add_action('wp_enqueue_scripts', 'my_add_frontend_scripts');


add_theme_support( 'post-thumbnails' );

function register_my_menu() {
		register_nav_menus(
			array(
      				'nav-menu' => __( 'Nav Menu' ),
              'nav-menu-right' => __( 'Nav Menu Right' ),
      				'footer-menu' => __( 'Footer Menu' ),
    			)
			);
	}
	add_action( 'init', 'register_my_menu' );

// Taille image perso

if ( function_exists( 'add_image_size' ) ) {
  add_image_size( 'taille-perso', 250, 175, true );
}