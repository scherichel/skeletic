<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <title>
          <?php if ( is_category() ) {
              echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
          } elseif ( is_tag() ) {
              echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
          } elseif ( is_archive() ) {
              wp_title(''); echo ' Archive | '; bloginfo( 'name' );
          } elseif ( is_search() ) {
              echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
          } elseif ( is_home() || is_front_page() ) {
              bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
          }  elseif ( is_404() ) {
              echo 'Error 404 Not Found | '; bloginfo( 'name' );
          } elseif ( is_single() ) {
          wp_title('');
          } else {
          echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
          } ?>
      </title>
      <meta name="description" content="<?php bloginfo( 'description' ); ?>">
      <link rel="profile" href="http://gmpg.org/xfn/11" />
      <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
      <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      
      
          <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

      <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
      <?php wp_head(); ?>
  </head>

  <body>
    <div class="container">

      <nav class="ten columns">
          <p>Nav will go here</p>
      </nav>

      <div class="six columns">
        <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
        <span><?php bloginfo('description'); ?></span>  
      </div>
    </div>
                