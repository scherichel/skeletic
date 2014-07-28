<?php 
	
	function skeletic_scripts() {

    /* ======
    CSS
    =============*/

    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'skeleton-style', get_template_directory_uri() . '/css/skeleton.css');
    wp_enqueue_style( 'skeleton-base', get_template_directory_uri() . '/css/base.css' );
    wp_enqueue_style( 'skeleton-layout', get_template_directory_uri() . '/css/layout.css' );

    /* =======
    javaScript
    =============*/

    wp_register_script( 'core', get_template_directory_uri() . '/js/core.js', array( 'javascript' ), '1.0.0', false );
    
    wp_enqueue_script('jquery');
    wp_enqueue_scripts('core');
  }

  add_action( 'wp_enqueue_scripts', 'skeletic_scripts' );

?>