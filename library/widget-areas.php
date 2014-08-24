<?php

function skeletic_sidebar_widgets() {

  register_sidebar(array(
    'id' => 'homepage-widgets',
    'name' => __('Homepage Sidebar Widgets', 'Skeletic'),
    'description' => __('Drag widgets to this sidebar container.', 'Skeletic'),
    'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'id' => 'left-widgets',
    'name' => __('Left Sidebar Widgets', 'Skeletic'),
    'description' => __('Drag widgets to this sidebar container.', 'Skeletic'),
    'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  
  register_sidebar(array(
    'id' => 'right-widgets',
    'name' => __('Right Sidebar Widgets', 'Skeletic'),
    'description' => __('Drag widgets to this sidebar container.', 'Skeletic'),
    'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
    'after_widget' => '</div></article>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'id' => 'footer-widgets',
    'name' => __('Footer Widgets', 'Skeletic'),
    'description' => __('Drag widgets to this footer container', 'Skeletic'),
    'before_widget' => '<article id="%1$s" class="one-third column widget %2$s">',
    'after_widget' => '</article>',
    'before_title' => '<h6>',
    'after_title' => '</h6>'      
  ));
}

add_action( 'widgets_init', 'skeletic_sidebar_widgets' );

?>