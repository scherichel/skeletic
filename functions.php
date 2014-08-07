<?php

// FAVICON

  function favicon_link() {
  	echo '<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />' . "\n";
  }
  
  add_action( 'wp_head', 'favicon_link' );

  /*
   * THEME SETUP
   *
  */
  require_once('library/skeleton.php');

  /**
   * NAV BAR
   * http://codex.wordpress.org/Function_Reference/wp_nav_menu
   *
   */

  require_once('library/navigation.php');

  /**
   * 
   * http://codex.wordpress.org/Class_Reference/Walker_Nav_Menu
   *
   */ 
  require_once('library/menu-walker.php');

  /**
   * WIDGET AREA
   * http://codex.wordpress.org/Widgetizing_Themes
   *
   */
  
  // require_once('library/widget-areas.php');

  /**
   * RETURN ENTRY META INFORMATION FOR POST
   * http://codex.wordpress.org/Post_Meta_Data_Section
   *
   */
  require_once('library/entry-meta.php');

  /** 
   * Enqueue scripts ENQUEUE SCRIPTS
   * http://codex.wordpress.org/Function_Reference/wp_enqueue_script
   *
   */
  require_once('library/enqueue-scripts.php');

  /*
   * THEME SUPPORT
   * http://codex.wordpress.org/Function_Reference/add_theme_support
   *
   */
  
  require_once('library/theme-support.php');


?>
