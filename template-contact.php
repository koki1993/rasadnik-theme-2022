<?php
/**
 * 
 * Template Name: Contact Page
 *
 */

 get_header(); ?>

 <div class="content-are" id="primary">
  <main class="site-main" id="main" role="main">
    <?php 
    while( have_posts() ) :the_post();

      get_template_part( 'template-parts/content', 'page-contact' );

    endwhile; ?>
  </main>
 </div><!-- #primary -->

 <?php get_footer(); ?>