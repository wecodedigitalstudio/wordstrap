<?php

/* Setup Theme
-------------------------------------------------------- */

if(!function_exists('wordstrap_setup_theme')) {

  function wordstrap_setup_theme() {

      // Custom menu
      register_nav_menu( 'header', __( 'Primary Menu', 'wordstrap' ) );

  }

}

require_once get_template_directory() . '/nav-walker.php';

add_action('after_setup_theme', 'wordstrap_setup_theme');

/* Javascript
-------------------------------------------------------- */

if(! function_exists('wordstrap_scripts') ) {

  function wordstrap_scripts() {

      wp_enqueue_script('wordstrap-jquery', get_template_directory_uri() .'/assets/js/jquery.min.js', null, true );
      wp_enqueue_script('wordstrap-bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.bundle.min.js', null, true );

  }

}

add_action('wp_enqueue_scripts', 'wordstrap_scripts');


/* CSS
-------------------------------------------------------- */

if(! function_exists('wordstrap_styles') ) {

  function wordstrap_styles() {
    wp_enqueue_style('custom-wordstrap-css', get_template_directory_uri() .'/assets/css/custom.min.css');
  }

}

add_action('wp_enqueue_scripts', 'wordstrap_styles');

// SVG file upload permission
add_filter( 'upload_mimes', function ( $mimes = array() ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
} );

?>