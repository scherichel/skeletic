<?php 
	
	function skeletic_scripts() {

    /* ======
    CSS
    =============*/

    wp_register_style( 'skeleton-style', get_template_directory_uri() . '/css/skeleton.css');
    wp_register_style( 'skeleton-base', get_template_directory_uri() . '/css/base.css' );
    wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/css/layout.css' );


    wp_enqueue_style('skeleton-style');
    wp_enqueue_style('skeleton-base');
    wp_enqueue_style('skeleton-layout');

    /* =======
    javaScript
    =============*/

    // Deregistering wordpress jquery
    wp_deregister_script('jquery');

    // Register
    wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.11.1', false );
    wp_register_script( 'menu', get_template_directory_uri() . '/js/nav.js', array(), '1.0.0', false );
    wp_register_script( 'core', get_template_directory_uri() . '/js/core.js', array(), '1.0.0', false );


    wp_enqueue_script('jquery');
    wp_enqueue_script('menu');
    wp_enqueue_script('core');
  }

  add_action( 'wp_enqueue_scripts', 'skeletic_scripts' );

?>