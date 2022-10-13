<?php
/**
 * 
 * Rasadnik Donevic Header template file
 *
 */

 ?>
 <!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rasadnik-donevic' ); ?></a>

	<header id="masthead" class="site-header">
	<nav class="main-navigation navbar fixed-top navbar-expand-lg navbar-light">
		<div class="container">
			<div class="logo">
				<?php
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'small' );
				?>
				<a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" class="site-logo"></a>
			</div><!-- .logo -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
					wp_nav_menu( array(
						'menu'              => 'Primary Menu',
						'theme_location'    => 'primary-menu',
						'container_class'   => 'collapse navbar-collapse justify-content-end',
						'container_id'      => 'navbarSupportedContent',
						'menu_class'        => 'nav navbar-nav'
						)
					);
				?>
		</div><!-- .container -->
	</nav>
	</header><!-- #masthead -->
 