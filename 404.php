<?php
/**
 * 
 * The template for displaying 404 pages (not found)
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<section class="error-404 not-found">

					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Ups! Ova stranica nije pronađena.', 'rasadnik' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'Izgleda da ništa nije pronađeno na ovoj lokaciji. Probajte jedan od linkova ispod?', 'rasadnik' ); ?></p>
            <?php dynamic_sidebar( '404-widget' ); ?>
					</div><!-- .page-content -->

				</section><!-- .error-404 -->

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
