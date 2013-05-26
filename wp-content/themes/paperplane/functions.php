<?php

// Set path to WooFramework and theme specific functions
$functions_path = TEMPLATEPATH . '/functions/';
$includes_path = TEMPLATEPATH . '/includes/';

// WooFramework
require_once ($functions_path . 'admin-init.php');   // Framework Init

// Theme specific functionality
require_once ($includes_path . 'theme-options.php');   // Options panel settings and custom settings
require_once ($includes_path . 'theme-functions.php');   // Custom theme functions
require_once ($includes_path . 'theme-plugins.php');  // Theme specific plugins integrated in a theme
require_once ($includes_path . 'theme-actions.php');  // Theme actions & user defined hooks
require_once ($includes_path . 'theme-comments.php');   // Custom comments/pingback loop
require_once ($includes_path . 'theme-js.php');    // Load javascript in wp_head
require_once ($includes_path . 'sidebar-init.php');   // Initialize widgetized areas
require_once ($includes_path . 'theme-widgets.php');  // Theme widgets
require_once ($includes_path . 'theme-custom-post-types.php'); // Custom Post Types
require_once( 'woo-table/woo-table.php' );     // Woo Table Plugin

?>
<?php
  function show_menus() {
    $menus = get_terms('menutype', array( 'order_by' => 'display_order', 'order' => 'ASC'));
    foreach( $menus as $menu ) {
?>
  <div class="row">
  <div class="menu grid_12">
    <h4><?php echo $menu->name; ?></h4>
<?php

      $wpq = array( 'post_type' => 'woo_menu', 'taxonomy' => 'menutype', 'term' => $menu->slug, 'orderby' => 'menu_order', 'order' => 'ASC' );
      $menu_items = new WP_Query( $wpq );
      foreach ( $menu_items->posts as $menu_item ) {
?>
    <div class="menu-item cf">
      <span class="name"><?php echo $menu_item->post_title; ?></span>
      <span class="description"><?php echo $menu_item->post_content; ?></span>
      <span class="price"><?php echo get_post_meta($menu_item->ID,'price',true); ?></span>
    </div>
<?php
      }

?>
  </div>
  </div>
<?php
    }
  }
?>
