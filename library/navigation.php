<?php

    /**
     * Register Menus
     * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
     */
    register_nav_menus(array(
        'header-menu' => 'Header' // registers the menu in the WordPress admin menu editor
    ));


    /**
     * HEADER
     * http://codex.wordpress.org/Function_Reference/wp_nav_menu
     */
    function header_menu() {
        wp_nav_menu(array(
            'theme_location'  => '',
            'menu'            => '',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        ));
    }

?>