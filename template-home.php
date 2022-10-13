<?php
/**
 * 
 * Template Name: Home Page
 *
 */

 get_header();?>

<div class="content-area" id="primary">
  <main class="site-main" id="main" role="main">
    <?php
    while( have_posts()) : the_post();

      get_template_part( 'template-parts/content', 'page-home');

  endwhile; ?>
  </main>
</div> <!-- #primary -->
<?php get_footer();