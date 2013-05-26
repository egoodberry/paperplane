<?php
  function show_slideshow($title) {
      ?>
      <section class="slideshow">
        <a class="nav prev"></a>
        <a class="nav next"></a>
        <section class="photo-stream">
          <ul>
          <?php
          $parent = get_page_by_title( $title );
          $images = get_children( array( 'post_parent' => $parent->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) ); 
          if ( $images ) {
            foreach ( $images as $attachment_id => $attachment ) {
            ?>
            <li>
            <?php
              echo wp_get_attachment_image( $attachment_id, 'full' );
            ?>
            </li>
            <?php
            }
          }
          ?>
          </ul>
        </section>
      </section>
  <?php
  }
?>
