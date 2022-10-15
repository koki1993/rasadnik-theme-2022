<?php
/**
 * 
 * Template Name: Gallery Page
 *
 */

 get_header(); ?>

 <div class="content-are" id="primary">
  <main class="site-main" id="main" role="main">
    <?php 
    while( have_posts() ) :the_post();

      get_template_part( 'template-parts/content', 'page-gallery' );

    endwhile; ?>
  </main>
 </div><!-- #primary -->

 <?php get_footer(); ?>