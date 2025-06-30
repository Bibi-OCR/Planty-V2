<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_separate', trailingslashit( get_stylesheet_directory_uri() ) . 'ctc-style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

function planty_admin_link($items, $args) {
    if (is_user_logged_in() && current_user_can('administrator') && $args->theme_location == 'primary') {
        $admin_link = '<li class="menu-item menu-item-admin"><a href="' . admin_url() . '" class="menu-link">Admin</a></li>';

        $menu_items = explode('</li>', $items);

        array_splice($menu_items, 1, 0, $admin_link);

        $items = implode('</li>', $menu_items);

        $items .= '</li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'planty_admin_link', 10, 2);

function planty_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700&display=swap');
}
add_action('wp_enqueue_scripts', 'planty_fonts');


