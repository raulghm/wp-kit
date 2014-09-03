<?php

// // custom post type
// function register_custom_post_type() {
//     $args = array(
//       'public'   => true,
//       'label'    => 'custom',
//       'menu_position' => 5,
//       'hierarchical' => true,
//       'supports' => array( 'title', 'editor', 'page-attributes'),
//       'taxonomies' => array('category', 'post_tag')
//     );
//     register_post_type( 'custom', $args );
// }

// add_action( 'init', 'register_custom_post_type' );

/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);


/* ------------------------------------------------------ */
// Disable comments
// From: https://github.com/roots/roots/issues/932
add_filter( 'comments_template', 'custom_remove_comments' );
function custom_remove_comments( $file ) {
    return get_template_directory() . '/templates/no-comments.php';
}

/* ------------------------------------------------------ */
// Disable the Admin Bar.
// From: http://yoast.com/disable-wp-admin-bar/
add_filter( 'show_admin_bar', '__return_false' );

function sp_hide_admin_bar_settings()
    {
        ?><style type="text/css">.show-admin-bar {display: none;}</style><?php
    }

function sp_disable_admin_bar()
   {
      add_filter( 'show_admin_bar', '__return_false' );
      add_action( 'admin_print_scripts-profile.php', 'sp_hide_admin_bar_settings' );
   }
add_action( 'init', 'sp_disable_admin_bar' , 9 );
/* ------------------------------------------------------ */



/* ------------------------------------------------------ */
// Admin footer modification
// http://wp.tutsplus.com/tutorials/customizing-wordpress-for-your-clients/
function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Developed by <a href="http://twitter.com/raulghm" target="_blank">@raulghm</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');
/* ------------------------------------------------------ */




/* ------------------------------------------------------ */
// Remove Dashboard Widgets
// http://digwp.com/2010/10/customize-wordpress-dashboard/

function disable_default_dashboard_widgets()
   {
      // disable default dashboard widgets
      remove_meta_box('dashboard_right_now', 'dashboard', 'core');
      remove_meta_box('dashboard_recent_comments', 'dashboard', 'core');
      remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');
      remove_meta_box('dashboard_plugins', 'dashboard', 'core');
      remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
      remove_meta_box('dashboard_quick_press', 'dashboard', 'core');
      remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');
      remove_meta_box('dashboard_primary', 'dashboard', 'core');
      remove_meta_box('dashboard_secondary', 'dashboard', 'core');
      remove_meta_box('rg_forms_dashboard', 'dashboard', 'normal;');
      remove_meta_box('blc_dashboard_widget', 'dashboard', 'normal;');
      remove_meta_box('powerpress_dashboard_news', 'dashboard', 'normal;');
      // disable Simple:Press dashboard widget
      remove_meta_box('sf_announce', 'dashboard', 'normal');
   }
add_action('admin_menu', 'disable_default_dashboard_widgets');
/* ------------------------------------------------------ */



/* ------------------------------------------------------ */
// Change Howdy
// http://www.wpbeginner.com/wp-tutorials/how-to-change-the-howdy-text-in-wordpress-3-3-admin-bar/
add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar )
   {
      $user_id = get_current_user_id();
      $current_user = wp_get_current_user();
      $profile_url = get_edit_profile_url( $user_id );
      if ( 0 != $user_id )
         {
            /* Add the "My Account" menu */
            $avatar = get_avatar( $user_id, 28 );
            $howdy = sprintf( __('Welcome, %1$s'), $current_user->display_name );
            $class = empty( $avatar ) ? '' : 'with-avatar';
            $wp_admin_bar->add_menu( array(
               'id' => 'my-account',
               'parent' => 'top-secondary',
               'title' => $howdy . $avatar,
               'href' => $profile_url,
               'meta' => array(
                  'class' => $class,
                  ),
               ) );
         }
   }
/* ------------------------------------------------------ */



/* ------------------------------------------------------ */
// Remove Mandrill Dashboard Widget
// http://wordpress.org/support/topic/dashboard-widget?replies=3
function sp_remove_wpmandrill_dashboard()
   {
      if ( class_exists( 'wpMandrill' ) )
         {
            remove_action( 'wp_dashboard_setup', array( 'wpMandrill' , 'addDashboardWidgets' ) );
         }
   }
add_action( 'admin_init', 'sp_remove_wpmandrill_dashboard' );
/* ------------------------------------------------------ */
