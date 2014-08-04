<?php 
	
	function skeletic_scripts() {

    /* ======
    CSS
    =============*/

    wp_register_style( 'style', get_stylesheet_uri() );
    wp_register_style( 'skeleton-style', get_template_directory_uri() . '/css/skeleton.css');
    wp_register_style( 'skeleton-base', get_template_directory_uri() . '/css/base.css' );
    wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/css/layout.css' );


    wp_enqueue_style('style');
    wp_enqueue_style('skeleton-style');
    wp_enqueue_style('skeleton-base');
    wp_enqueue_style('skeleton-layout');

    /* =======
    javaScript
    =============*/
  }

  add_action( 'wp_enqueue_scripts', 'skeletic_scripts' );

?>