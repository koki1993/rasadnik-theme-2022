<?php
/**
 * 
 * Rasadnik Donevic Footer template file
 *
 */

?>
  <footer id="colophon" class="site-footer">
    <div class="site-info">
      <section class="footer">
        <div class="container">
          <div class="row">
            <?php if (is_active_sidebar( 'footer-products' ) ) : ?>
            <div class="col-6 col-md-4">
              <?php dynamic_sidebar( 'footer-products' ); ?>
            </div>
            <?php endif; 
            
            if ( is_active_sidebar( 'footer-advices' ) ) :
            ?>
            <div class="col-6 col-md-4">
              <?php dynamic_sidebar( 'footer-advices' ); ?>
            </div>
            <?php endif; 
            
            if ( is_active_sidebar( 'footer-contact' ) ) : ?>
            <div class="col-12 col-md-4">
              <?php dynamic_sidebar( 'footer-contact' ); ?>
            </div>
            <?php endif; ?>
            <p class="copyright-text">Copyright &copy; <?php echo date('Y'); ?> Rasadnik Donević</p>
          </div>
        </div>
      </section>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
