<?php
/**
 * Scripts and stylesheets
 *
 */

function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/styles/styles.css', false, '7a726aa4e46ddcce03d6b68f57aa66e7');

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/scripts/modernizr.js', array(), null, false);
  wp_register_script('jquery-local', get_template_directory_uri() . '/assets/scripts/jquery.js', array(), null, false);
  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/scripts/scripts.js', array(), '52dbc17069ab15b32daa55c2e534fb77');

  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery-local');
  wp_enqueue_script('roots_scripts');
}

add_action('wp_head', 'roots_scripts', 100);
