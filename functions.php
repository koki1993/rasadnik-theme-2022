<?php
/**
 * 
 * Rasadnik Donevic functions and definitions
 *
 * @package Rasadnik_Donevic
 * 
 */

// Function for enqueing styles and scripts

function rasadnik_donevic_scripts() {

  // Fonts
  wp_register_style( 'dosis', 'https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap' );

  // Styles
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.2.0', 'all' );
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/all.css', array(), '6.2.0', 'all' );
	wp_enqueue_style( 'swiperslider', get_template_directory_uri() . '/css/swiper.min.css', array(), '8.4.2', 'all' );
  wp_enqueue_style( 'rasadnik-style', get_stylesheet_uri() );

  // Scripts
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '5.2.0', true );
	wp_enqueue_script( 'swiperslider', get_template_directory_uri() . '/js/swiper-bundle.min.js', array('jquery'), '8.2.4', true );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'rasadnik_donevic_scripts' );

/**
 * 
 * Theme support setup
 * 
*/
function rasadnik_donevic_theme_support() {

// Register Menus
register_nav_menus(
  array(
    'Primary Menu' => esc_html__( 'primary-menu', 'rasadnik-donevic'),
  )
);

// Custom logo
  add_theme_support(
    'custom-logo',
    array(
      'height'      => 250,
      'width'       => 250,
      'flex-height' => true,
      'flex-width'  => true,
    )
  );

// Title tag registration
add_theme_support( 'title-tag' );

// Enable Post thumbnails on posts and pages
add_theme_support( 'post-thumbnails' );

// Switch default core markup for search form, comment form, and comments output valid HTML5.
add_theme_support( 
  'html5', 
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'style',
    'script',
  )
);

// Custom Background Feature
add_theme_support(
  'custom-background',
  apply_filters(
    'rasadnik_donevic_custom_background_args',
    array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )
  )
);
	add_theme_support( 'custom-header', apply_filters( 'rasadnik_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '000000',
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
		'wp-head-callback'       => 'rasadnik_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'rasadnik_donevic_theme_support');

/**
 * 
 *  CUSTOM POST TYPES
 * 
*/

// Advices Custom Post Type
function advices_custom_post_type() {
  $labels = array(
    'name'                  => 'Advices',
    'singular_name'         => 'Advice',
    'add_new'               => 'Add Advice',
    'all_items'             => 'All Advices',
    'add_new_item'          => 'Add Advice',
    'edit_item'             => 'Edit Advice',
    'new_item'              => 'New Advice',
    'view_item'             => 'View Advice',
    'serach_item'           => 'Searach Advice',
    'not_found'             => 'No Advices found',
    'not_found_in trash'    => 'No advices found in trash',
    'parent_item_colon'     => 'Parent Advice' 
  );
  $args = array(
    'labels'                => $labels,
    'public'                => true,
    'has_archive'           => true,
    'publicly_queryable'    => true,
    'query_var'             => true,
    'rewrite'               => array('slug' => 'saveti'),
    'capability_type'       => 'post',
    'hierarchical'          => false,
    'supports'              => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail',
      'revisions',
    ),
    'taxonomies'            => array('category', 'post_tag'),
    'menu_position'         => 5,
    'menu_icon'			=> 'dashicons-lightbulb',
    'exclude_from_searach'  => false
  );
  register_post_type( 'advices',$args );
}
add_action( 'init', 'advices_custom_post_type' );

// Products custom post type
function products_custom_post_type() {
	$products_labels = array(
		'name'				        => 'Products',
		'singular_name'		    => 'Product',
		'add_new'			        => 'Add Product',
		'all_items'			      => 'All Products',
		'add_new_item'		    => 'Add Product',
		'edit_item'			      => 'Edit Product',
		'new_item'			      => 'New Product',
		'view_item'			      => 'View Product',
		'search_item'		      => 'Search Products',
		'not_found'			      => 'No product found',
		'not_found-in_trash'  => 'No product found in trash',
		'parent_item_colon'	  => 'Parent Item'
	);
	$products_args = array(
		'labels'			        => $products_labels,
		'public'			        => true,
		'has_archive'		      => true,
		'publicly_queryable'  => true,
		'query_var'			      => true,
		'rewrite'			        => array( 'slug' => 'proizvodi' ),
		'capability_type'	    => 'post',
		'hierarchical'		    => false,
		'supports'			      => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
		'menu_position'		    => 5,
		'menu_icon'			      => 'dashicons-products',
		'exclude_from_search' => false
	);
	register_post_type( 'products', $products_args );
}
add_action( 'init', 'products_custom_post_type' );

//Products Custom Taxonomies

/** 
 * @string $test askjdajksd asdasd.
 */
function products_custom_taxonomies( $test ) {
	$products_labels = array(
		'name'              => 'Product Types',
		'singular_name'     => 'Product Type',
		'search_items'      => 'Search Product Types',
		'all_items'         => 'All Product Types',
		'parent_item'       => 'Parent Product Types',
		'parent_item_colon' => 'Parent Product Types:',
		'edit_item'         => 'Edit Product Type',
		'update_item'       => 'Update Product Type',
		'add_new_item'      => 'Add New Product Type',
		'new_item_name'     => 'New Type Product Type',
		'menu_name'         => 'Product Types'
	);
	$products_args = array(
		'hierarchical'      => false,
		'labels'            => $products_labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'product_type' )
	);
	register_taxonomy( 'product_type', 'products', $products_args );

}
add_action( 'init', 'products_custom_taxonomies' );

// Customize except function
function rasadnik_excerpt_more( $more ) {
  return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
    get_permalink( get_the_ID() ),
    ' [ opširnije... ]'
  );
}
add_filter( 'excerpt_more', 'rasadnik_excerpt_more' );

/**
 * 
 * Register widget area.
 *
 */
function rasadnik_widgets_init() {
  register_sidebar( array(
		'name'          => esc_html__( 'Footer Products', 'rasadnik' ),
		'id'            => 'footer-products',
		'description'   => esc_html__( 'Add widgets here.', 'rasadnik' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Advices', 'rasadnik' ),
		'id'            => 'footer-advices',
		'description'   => esc_html__( 'Add widgets here.', 'rasadnik' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Contact', 'rasadnik' ),
		'id'            => 'footer-contact',
		'description'   => esc_html__( 'Add widgets here.', 'rasadnik' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'rasadnik_widgets_init' );


/**
 * 
 * Customizer additions.
 * 
 */
require get_template_directory() . '/inc/customizer.php';


// Funtion for limiting excerpt for products archive

function get_excerpt( $count ) {
  $permalink = get_permalink($post->ID);
  $excerpt = get_the_content();
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, $count);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = '<p>'.$excerpt.'... <a href="'.$permalink.'">[opširnije...]</a></p>';
  return $excerpt;
  }