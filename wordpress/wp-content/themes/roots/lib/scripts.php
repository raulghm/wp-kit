<?php
/**
 * Scripts and stylesheets
 *
 */

function roots_scripts() {
  wp_enqueue_style('roots_main', get_template_directory_uri() . '/assets/styles/styles.css', false, 'b9a6cc8c9564939c05456359c5408cc8');

  wp_register_script('modernizr', get_template_directory_uri() . '/assets/scripts/modernizr.js', array(), null, false);
  wp_register_script('jquery-local', get_template_directory_uri() . '/assets/scripts/jquery.js', array(), null, false);
  wp_register_script('roots_scripts', get_template_directory_uri() . '/assets/scripts/scripts.js', array(), '9d51ecfc0a7e6f9915be62e48fe4cc0a');

  wp_enqueue_script('modernizr');
  wp_enqueue_script('jquery-local');
  wp_enqueue_script('roots_scripts');
}

add_action('wp_head', 'roots_scripts', 100);
