<?php
  function show_slideshow($title) {
      ?>
      <section class="slideshow">
        <a class="nav prev"></a>
        <a class="nav next"></a>
        <section class="photo-stream">
          <?php
          $parent = get_page_by_title( $title );
          $images = get_children( array( 'post_parent' => $parent->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) ); 
          if ( $images ) {
            $i = 1;
            foreach ( $images as $attachment_id => $attachment ) {
              $src = wp_get_attachment_image_src( $attachment_id , 'full')[0];
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
?>
