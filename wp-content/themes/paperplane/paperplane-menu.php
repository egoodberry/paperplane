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
