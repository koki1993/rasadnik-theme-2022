<?php
/**
 * 
 * Template part for displaying page content in home page
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<section class="pages-header-section bg-overlay d-md-none" style="background-image: url('<?php echo get_header_image(); ?>');">
    <h1><?php the_title() ?></h1>
  </section> <!-- .pages-header-section -->
  <!-- Swiper -->
  <section class="slider-section d-none d-md-inline">
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <?php
        if ( have_rows( 'slider' ) ) :
          while( have_rows( 'slider' ) ) : the_row();
          $imageID    = get_sub_field( 'slider_image' );
          $imageTitle = get_sub_field( 'slider_title' );
          $imageText  = get_sub_field( 'slider_text' ); ?>
          <div class="swiper-slide">
            <img src="<?php echo $imageID['url']; ?>"></img>
            <div class="swiper-text">
              <h3><?php echo $imageTitle; ?></h3>
              <p><?php echo $imageText; ?></p>
            </div>
          </div>
          <?php endwhile;
        endif;
        ?>
      </div><!-- .swiper-wrapper -->
    </div><!-- .swiper -->
  </section> <!-- .slider-section -->
  <section class="welcome-section reveal-section" id="home-sections">
    <?php
    $welcomeTitle = get_field( 'welcome_title' );
    $welcomeText = get_field( 'welcome_text' );
    ?>
    <div class="container">
      <h1 class="welcome-title">
        <?php echo $welcomeTitle; ?>
      </h1>
      <hr>
      <p class="welcome-text">
        <?php echo $welcomeText; ?>
      </p>
    </div><!-- .container -->
  </section><!-- .welcome-section -->
  <hr>
  <section class="home-products-section reveal-section" id="home-sections">
    <div class="container-fluid">
      <div class="row">
      <?php
      if ( have_rows( 'products' ) ) :
        while ( have_rows( 'products' ) ) : the_row();
        $image = get_sub_field( 'home_product_image' );
        $post_object = get_sub_field('product');
        ?>
        <div class="col-md-4">
          <div class="home-product-wrapper">
            <div class="home-products-img-wrap" 
          style="background-image: url(<?php echo $image; ?>)">
          <p><?php echo wp_trim_words($post_object->post_content, 20); ?></p>
          </div>
          <a href="<?php echo get_permalink($post_object->ID); ?>"><h2><?php echo get_the_title($post_object->ID); ?></h2></a>
          </div>
        </div>
        <?php 
        endwhile;
      endif; ?>
      </div>
    </div>
  </section>
  <hr>
  <section class="home-advices reveal-section d-none d-sm-block" id="home-sections">
    <div class="home-advices-container">
      <div class="container">
        <h2><?php echo get_field('home_advices_title'); ?></h2>
        <div class="btn-container">
          <button class="btn btn-primary btn-advices active-tab" data-tab="1">Orezivanje voća</button>
          <button class="btn btn-secondary btn-advices" data-tab="2">Održavanje voćnjaka</button>
          <button class="btn btn-success btn-advices" data-tab="3">Plan sadnje</button>
          <?php
          foreach ( $tabs as $key => $tab ) :
            $key++;
            ?>
            <button class="btn btn-primary btn-advices <?php echo ( 1 == $key ) ? 'active-tab' : ''; ?>" data-tab="<?php echo $key ?>">Orezivanje voća</button>
            <?php endforeach; ?>
        </div> <!-- .btn-container -->
          <?php
          $adviceOneImage   = get_field('advice_one_image');
          $adviceOneText    = get_field('advice_one_text');
          $adviceTwoImage   = get_field('advice_two_image');
          $adviceTopText    = get_field('advice_two_text');
          $adviceThreeImage = get_field('advice_three_image');
          $adviceThreeText  = get_field('advice_three_text');
          ?>
        <div class="tab-content tab-1 tab-content-active col-sm-10 offset-sm-1">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo esc_url($adviceOneImage['url']); ?>"></img>
            </div>
            <div class="col-sm-8">
              <p><?php esc_html_e( $adviceOneText ); ?></p>
            </div>
          </div> <!-- .row -->
        </div> <!-- .tab-content -->
        <div class="tab-content tab-2 col-sm-10 offset-sm-1">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo $adviceTwoImage['url']; ?>"></img>
            </div>
            <div class="col-sm-8">
              <p><?php echo $adviceTopText; ?></p>
            </div>
          </div> <!-- .row -->
        </div> <!-- .tab-content -->
        <div class="tab-content tab-3 col-sm-10 offset-sm-1 col-xs-12">
          <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo $adviceThreeImage['url']; ?>"></img>
            </div>
            <div class="col-sm-8">
              <p><?php echo get_field('advice_three_text'); ?></p>
            </div>
          </div> <!-- .row -->
        </div> <!-- .tab-content -->
      </div> <!-- .container -->
    </div> <!-- .home-advices-container -->
  </section> <!-- .home-advices -->
</article>