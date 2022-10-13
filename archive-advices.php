<?php
/**
 * 
 * The template for displaying advices archive
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="pages-header-section bg-overlay" style="background-image: url('<?php echo get_header_image(); ?>');">
      	<div class="container-fluid">
        	<h1><?php echo get_theme_mod( 'advices_title' ); ?></h1>
					<p><?php echo get_theme_mod( 'advices_description' ); ?></p>
				</div><!-- .container-fluid -->
      </section><!-- .pages-header-section -->
			<nav class="pages-nav">
				<div class="container">
				<a href="<?php echo get_home_url(); ?>"><i class="fa-solid fa-house-chimney"></i><span><?php echo get_the_title( get_option('page_on_front') ); ?></span></a> > <span><?php echo get_theme_mod( 'advices_nav-title' ); ?></span>
				</div><!-- .container -->
			</nav><!-- .pages-nav -->
		<section class="advices-section">
		<?php
		if ( have_posts() ) : 

			/* Start the Loop */
			while ( have_posts() ) : the_post();
  
				get_template_part( 'template-parts/content', 'archive-advices' );

			endwhile;

		else:

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();