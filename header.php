<!DOCTYPE html>
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
        <link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/core.js"></script>
        <?php wp_head(); ?>
    </head>

    <body>
        <header>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </nav>
    
            <div>
                <h1><a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a></h1>
            </div>
        
            <span><?php bloginfo('description'); ?></span>

            <?php get_search_form(); ?>
            <div class="clear"></div>
        </header>
                