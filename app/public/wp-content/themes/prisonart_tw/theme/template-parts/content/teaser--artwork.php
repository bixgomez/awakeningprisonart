<?php

echo '<div class="teaser pb-6 mb-6 border-b border-[#006667]">';

  $title = isset($args['title']) ? $args['title'] : '';
  $dimensions = isset($args['dimensions']) ? $args['dimensions'] : '';
  $description = isset($args['description']) ? $args['description'] : '';
  $image_id = isset($args['image_id']) ? $args['image_id'] : '';

  echo '<div class="teaser-image">';
    echo wp_get_attachment_image( $image_id, 'medium_large' );
  echo '</div>';

  echo '<div class="teaser-text ">';
    echo '<h1 class="teaser-title text-foreground text-lg">' . $title . '</h1>';
    echo '<p class="teaser-dimensions text-foreground">' . $dimensions . '</p>';
    echo '<p class="teaser-description text-foreground">' . $description . '</p>';
    ?>
    To purchase this piece, please send an email to deansluyter@gmail.com, specifying the name of the piece ("<?php echo $title; ?>"),
    the price you would like to pay for it, your mailing address, and any additional comments or questions.  You will be billed via PayPal.
    <?php
  echo '</div>';

echo '</div>';

?>

