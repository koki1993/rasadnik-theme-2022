<?php
/**
 * 
 * Template part archive advices in archive-advices.php
 *
 */

  $thumbnail_id = get_post_thumbnail_id( $post->ID );
  $image = get_the_post_thumbnail_url( get_the_ID(), 'medium_large' );
  $alt = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true );
  
if ( $wp_query->current_post % 2 == 0 ) : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="advice">
    <hr>
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-5 col-xl-4 slide-left">
        <img src="<?php echo $image; ?>" alt="">
      </div>
      <div class="col-sm-12 col-md-7 col-lg-5 offset-lg-1 col-xl-6 slide-right">
        <h2><a href="<?php echo esc_url( the_permalink() );?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div><!-- .row -->
    <hr>
  </div><!-- .advice -->
</article>
<?php else : ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="advice">
    <div class="row">
      <div class="col-sm-12 col-md-5 order-md-last col-lg-5 offset-lg-1 col-xl-4 slide-right">
        <img src="<?php echo $image; ?>" alt="">
      </div>
      <div class="col-sm-12 col-md-7 col-lg-5 offset-lg-1 col-xl-6 order-md-first slide-left">
        <h2><a href="<?php echo esc_url( the_permalink() );?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt(); ?></p>
      </div>
    </div><!-- .row -->
  </div><!-- .advice -->
</article>
<?php endif; ?>
