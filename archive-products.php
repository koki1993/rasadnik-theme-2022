<?php
/**
 * 
 * The template for displaying prducts archive
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="pages-header-section bg-overlay" style="background-image: url('<?php echo get_header_image(); ?>');">
      	<div class="container-fluid">
        	<h1><?php echo get_theme_mod( 'products_title' ); ?></h1>
          <p><?php echo get_theme_mod( 'products_description' ); ?></p>
				</div>
      </section> <!-- .pages-header-section -->
			<div class="container">
				<nav class="pages-nav">
				<a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-house-chimney"></i><span><?php echo get_the_title( get_option('page_on_front') ); ?></span></a> > <span><?php echo get_theme_mod( 'products_nav-title' ); ?></span>
				
				</nav> <!-- .pages-nav -->
			</div>
			<hr>
			<div class="container">
				<div class="row">
		<?php
		if ( have_posts() ) : 

			/* Start the Loop */
			while ( have_posts() ) : the_post();
  
				get_template_part( 'template-parts/content', 'archive-products' );

			endwhile;

		else:

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();