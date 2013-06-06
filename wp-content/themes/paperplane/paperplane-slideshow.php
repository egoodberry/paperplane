<?php
  function show_slideshow($title) {
      ?>
      <a class="nav prev"></a>
      <a class="nav next"></a>
      <section class="slideshow">
        <section class="photo-stream">
          <?php
          $parent = get_page_by_title( $title );
          $images = get_children( array( 'post_parent' => $parent->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) ); 
          if ( $images ) {
            // sort images by menu_order
            $_images = array();
            $used_ordinals = array();
            foreach ( $images as $attachment_id => $attachment ) {
              $post = get_post($attachment_id);
              $ordinal = $post->menu_order;
              // if there are duplicate ordinals, increment to next free ordinal
              while (in_array($ordinal, $used_ordinals)) {
                $ordinal += 1;
              }
              $_images[$ordinal] = $attachment_id;
              array_push($used_ordinals, $ordinal);
            }
            ksort($_images);

            // pop last element and insert at beginning
            $last_image_key = end(array_keys($_images));
            $last_image = array_pop($_images);
            array_unshift($_images, $last_image);

            $i = 1;
            foreach ( $_images as $menu_order => $attachment_id ) {
              $src_data = wp_get_attachment_image_src( $attachment_id , 'full');
              $src = $src_data[0];
              $style = '';
              $class = '';
              if ( $i === 2 ) {
                $style = 'background-image:url(' . $src . ')';
              }
              if ( $i === 2 ) {
                $class = 'current';
              }
            ?>
              <div class="photo <?php echo $class; ?>" data-src="<?php echo $src; ?>" style="<?php echo $style; ?>"></div>
            <?php
              $i++;
            }
          }
          ?>
        </section>
      </section>
  <?php
  }

// adds ability to assign menu_order to photos
add_post_type_support( 'attachment', 'page-attributes' );

?>
