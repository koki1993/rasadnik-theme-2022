<?php
/**
 * 
 * Template part for displaying page content in contact page
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <section class="pages-header-section bg-overlay" style="background-image: url('<?php echo get_header_image(); ?>');">
    <h1><?php the_title() ?></h1>
    <p><?php echo get_field('contact_description'); ?></p>
  </section> <!-- .pages-header-section -->
  <nav class="pages-nav">
    <div class="container">
    <a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-house-chimney"></i><span><?php echo get_the_title( get_option('page_on_front') ); ?></span></a> > <span><?php the_title(); ?></span>
    </div>
  </nav> <!-- .pages-nav -->
  <section class="section-map-container">
    <div class="container">
      <div class="map-container">
        <?php echo the_content(); ?>
      </div><!-- .map-container -->
    </div><!-- .container -->
  </section><!-- .section-map-container -->
  <section class="contact-section">
    <div class="container">
      <div class="row">
        <div class="contact-form-container">
          <?php echo do_shortcode( '[contact-form-7 id="108" title="Contact form"]' ) ?>
        </div><!-- .conctact-form-container -->
      </div><!-- .row -->
    </div><!-- .container -->
  </section><!-- .map-container-section -->
</article>