<?php
// Add custom Theme Functions here
/*
 * Define Variables
 */
if (!defined('THEME_DIR'))
    define('THEME_DIR', get_template_directory());
if (!defined('THEME_URL'))
    define('THEME_URL', get_template_directory_uri());

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    $version = date("Hhis"); // FOR DEV ONLY 
    // $version = '1.0.0'; //GO LIVE 

    // Load CSS
    wp_enqueue_style('lucius-custom-css', THEME_URL . '-child/assets/css/custom.css', array(), $version, 'all');

    // Load JS
    wp_enqueue_script('lucius-custom-js', THEME_URL . '-child/assets/js/custom.js', array(), $version, true);
}
