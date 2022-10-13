<?php
/**
 * 
 * Template part for displaying single pages
 *
 */
?>

<section class="pages-header-section bg-overlay" style="background-image: url('<?php echo get_header_image(); ?>');">
    <h1><?php the_title() ?></h1>
</section> <!-- .pages-header-section -->
<nav class="pages-nav">
  <div class="container">
  <a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-house-chimney"></i><span><?php echo get_the_title( get_option('page_on_front') ); ?></span></a> > <span><?php the_title(); ?></span>
  </div>
</nav> <!-- .pages-nav -->
<hr>
<div class="container">
  <div class="row">
    <?php
    if ( is_singular( 'products' ) ) :
    ?>
    <div class="col-md-12">
      <div class="single-tag-wrapper">
        <?php $terms = get_the_terms( get_the_ID(), 'product_type' );
        if ( $terms ) : ?>
          <h3>Sorte:</h3>
            <?php foreach( $terms as $term) : ?>
              <span><?php echo esc_attr( $term->name); ?> | </span>
              <?php endforeach;
              endif ?>
      </div>
    </div>
  </div>
</div>
<hr>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="single-content-wrapper">
        <?php echo the_content(); ?>
      </div>
    </div>
    <?php else:  ?>
    <div class="col-md-12">
      <div class="single-content-wrapper">
        <?php esc_html_e( the_content() ); ?>
      </div>
    </div>
    <?php endif; ?>
  </div><!-- .row -->
</div><!-- .container -->
