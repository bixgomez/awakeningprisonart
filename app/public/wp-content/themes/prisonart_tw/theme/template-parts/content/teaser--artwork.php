<?php

echo '<div class="teaser pt-6 mb-6 border-t border-[#006667]">';

  $title = isset($args['title']) ? $args['title'] : '';
  $dimensions = isset($args['dimensions']) ? $args['dimensions'] : '';
  $description = isset($args['description']) ? $args['description'] : '';
  $image_id = isset($args['image_id']) ? $args['image_id'] : '';
  $parsed = parse_url( wp_get_attachment_url( $image_id ) );
  $imgurl = dirname( $parsed [ 'path' ] ) . '/' . rawurlencode( basename( $parsed[ 'path' ] ) );

  echo '<div class="teaser-image">';

    echo '<a target="_blank" href="'.$imgurl.'">';
    echo wp_get_attachment_image( $image_id, 'medium_large' );
    echo '</a>';

  echo '</div>';

  echo '<div class="teaser-text ">';
    echo '<h1 class="teaser-title text-foreground text-lg">' . $title . '</h1>';
    echo '<p class="teaser-dimensions text-foreground">' . $dimensions . '</p>';
    echo '<p class="teaser-description text-foreground">' . $description . '</p>';
    ?>
    <div class="purchase-info">
      To purchase this piece, please send an email to 
      <a href="mailto:deansluyter@gmail.com">deansluyter@gmail.com</a>, 
      specifying the name of the piece <i>("<?php echo $title; ?>")</i>,
      the price you would like to pay for it, your mailing address, and 
      any additional comments or questions.  You will be billed via PayPal.
    </div>
    <?php
  echo '</div>';

echo '</div>';

?>

