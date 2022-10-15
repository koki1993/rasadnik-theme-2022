<?php
/**
 * 
 * Template part for displaying page content in gallery page
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="pages-header-section bg-overlay" style="background-image: url('<?php echo get_header_image(); ?>');">
    <h1><?php the_title() ?></h1>
    <p><?php echo get_field('gallery_description'); ?></p>
  </section> <!-- .pages-header-section -->
  <nav class="pages-nav">
    <div class="container">
    <a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-house-chimney"></i><span><?php echo get_the_title( get_option('page_on_front') ); ?></span></a> > <span><?php the_title(); ?></span>
    </div>
  </nav> <!-- .pages-nav -->
  <hr>
  <section class="gallery-section">
    <div class="container">
      <div class="gallery-container" id="animated-thumbnails-gallery">
      <?php
          $images = get_field('gallery');
          $size = 'medium'; // (thumbnail, medium, large, full or custom size)
          if( $images ) :
            foreach( $images as $image ) :
            $image_src = wp_get_attachment_image_src( $image['id'], 'medium' ); ?>
            <a href="<?php echo esc_url( $image['url'] ); ?>" class="big">
              <img class="img-responsive" src="<?php echo esc_url( $image_src[0] ); ?>" alt="<?php echo esc_attr( $image['description'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>">
            </a>
            <?php endforeach;
          endif; ?>
      </div>
    </div>
  </section>
</article>