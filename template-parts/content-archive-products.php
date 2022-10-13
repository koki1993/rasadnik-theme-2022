<?php
/**
 * 
 * Template part archive products in archive-products.php
 *
 */

  $$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
  $image_url = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
  $alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
?>

<div class="col-sm-12 col-md-4 col-lg-3">
  <div class="product-wrap">
    <div class="products-img-wrap" style="background-image: url(<?php echo $image_url; ?>)">
      <p><?php echo get_excerpt(100); ?></p>
    </div>
    <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
    <hr>
  </div>
</div>