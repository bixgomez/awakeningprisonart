<?php
$post_id = isset($args['post_id']) ? $args['post_id'] : 0;
$title = isset($args['title']) ? $args['title'] : '';
$dimensions = isset($args['dimensions']) ? $args['dimensions'] : '';
$description = isset($args['description']) ? $args['description'] : '';
$image_id = isset($args['image_id']) ? $args['image_id'] : '';
$parsed = parse_url( wp_get_attachment_url( $image_id ) );
$imgurl = dirname( $parsed [ 'path' ] ) . '/' . rawurlencode( basename( $parsed[ 'path' ] ) );
?>

<div class="teaser pt-6 mb-6 border-t border-[#006667]" data-post-id="<?php echo $post_id; ?>">
  <div class="teaser-image">
    <a target="_blank" href="<?php echo $imgurl; ?>">
      <?php echo wp_get_attachment_image( $image_id, 'medium_large' ); ?>
    </a>
  </div>
  <div class="teaser-text">
    <h1 class="teaser-title text-foreground text-lg"><?php echo $title; ?></h1>
    <p class="teaser-dimensions text-foreground"><?php echo $dimensions; ?></p>
    <p class="teaser-description text-foreground"><?php echo $description; ?></p>
    <p class="teaser-description text-foreground"><i>Click on the image to enlarge it.</i></p>
    <div class="purchase-info">
      To purchase this piece, please send an email to 
      <a href="mailto:deansluyter@gmail.com">deansluyter@gmail.com</a>, 
      specifying the name of the piece <i>("<?php echo $title; ?>")</i>,
      the price you would like to pay for it, your mailing address, and 
      any additional comments or questions.  You will be billed via PayPal.
    </div>
  </div>
</div>
