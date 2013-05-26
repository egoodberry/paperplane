<?php
  function show_menus() {
    $terms = get_terms('menutype');
    // sort menutypes
    $_terms = array();
    $menu_ordering = get_option( 'woo_diner_menutype_orders' );
    foreach ( $terms as $t ) {
      if ( ! in_array( $t->term_id, array_keys( $menu_ordering ) ) ) {
        $_terms['0-' . $t->term_id] = $t;
      } else {
        $_ordering_value = $menu_ordering[$t->term_id];
        if ( $_ordering_value < 10 ) {
          $_ordering_value = '0' . $_ordering_value;
        }
        $_terms[$_ordering_value . '-' . $t->term_id] = $t;
      }
    }
    ksort( $_terms );
    foreach( $_terms as $k => $menu ) {
?>
  <div class="row">
  <div class="menu grid_12">
    <h4><?php echo $menu->name; ?></h4>
<?php

      // get sorted menu types
      $wpq = array( 'post_type' => 'woo_menu', 'taxonomy' => 'menutype', 'term' => $menu->slug, 'orderby' => 'menu_order', 'order' => 'ASC' );


      $menu_items = new WP_Query( $wpq );
      foreach ( $menu_items->posts as $menu_item ) {
?>
    <div class="menu-item cf">
      <div class="name-and-description">
        <span class="name"><?php echo $menu_item->post_title; ?></span>
        <span class="description"><?php echo $menu_item->post_content; ?></span>
      </div>
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
