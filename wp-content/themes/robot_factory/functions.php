<?php
if (!defined('ROBOTS_FACTORY_ASSETS_VERSION')) {
    define('ROBOTS_FACTORY_ASSETS_VERSION', '0.1');
}

if (!defined('ROBOTS_FACTORY_ASSETS_URL')) {
    define('ROBOTS_FACTORY_ASSETS_URL', $them_dir = get_template_directory_uri() . '/assets/');
}

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

/**
 * Enqueue scripts and styles from our assets
 */
function enqueue_robots_assets()
{



    wp_enqueue_style('bootstrap', ROBOTS_FACTORY_ASSETS_URL . 'css/bootstrap.min.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');
    wp_enqueue_style('magnific-popup', ROBOTS_FACTORY_ASSETS_URL . 'css/magnific-popup.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');
    wp_enqueue_style('owl.carousel', ROBOTS_FACTORY_ASSETS_URL . 'owl.carousel.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');
    wp_enqueue_style('owl.carousel.theme.min', ROBOTS_FACTORY_ASSETS_URL . 'owl.carousel.theme.min.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');
    wp_enqueue_style('ionicons', ROBOTS_FACTORY_ASSETS_URL . 'css/ionicons.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');
    wp_enqueue_style('main', ROBOTS_FACTORY_ASSETS_URL . 'css/main.css', array(), 'ROBOTS_FACTORY_ASSETS_VERSION');


    wp_enqueue_script('bootstrap', ROBOTS_FACTORY_ASSETS_URL  . '/js/bootstrap.min.js', array(), 'ROBOTS_FACTORY_ASSETS_VERSION', true);
    wp_enqueue_script('magnific-popup', ROBOTS_FACTORY_ASSETS_URL  . '/js/jquery.magnific-popup.min.js', array(), 'ROBOTS_FACTORY_ASSETS_VERSION', true);
    wp_enqueue_script('owl.carousel.min', ROBOTS_FACTORY_ASSETS_URL  . '/js/owl.carousel.min.js', array(), 'ROBOTS_FACTORY_ASSETS_VERSION', true);
    wp_enqueue_script('script', ROBOTS_FACTORY_ASSETS_URL  . '/js/script.js', array(), 'ROBOTS_FACTORY_ASSETS_VERSION', true);
}
add_action('wp_enqueue_scripts', 'enqueue_robots_assets');


/**
 * Register our main nav bar menu
 * 
 */

if (!function_exists('robots_register_nav_menu')) {

    function robots_register_nav_menu()
    {
        register_nav_menus(array(
            'header_menu' => __('Header Meny'),
            // 'footer_menu' => __( 'Footer Menu', 'text_domain' ),
        ));
    }
    add_action('init', 'robots_register_nav_menu');
}
