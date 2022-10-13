<?php 
/**
 * 
 * Rasadnik Theme Customizer
 * 
 */

function rasadnik_customize_register( $wp_customize ) {
  // Advices Archive customizer
    $wp_customize->add_section( 'advices', array(
      'title' => __('Advices', 'rasadnik-theme'),
      'description' => sprintf('Advices Options' , 'rasadnik-theme'),
      'priority' => 130
    ));
    $wp_customize->add_setting( 'advices_title', array(
      'default' => _x('Title', 'rasadnik-theme'),
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control( 'advices_title', array(
      'label' => __('Title', 'rasadnik-theme'),
      'section' => 'advices',
      'priority' => 2
    ));
    $wp_customize->add_setting( 'advices_description', array(
      'default' => _x('Description', 'rasadnik-theme'),
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control( 'advices_description', array(
      'label' => __('Description', 'rasadnik-theme'),
      'section' => 'advices',
      'priority' => 3
    ));
    $wp_customize->add_setting( 'advices_nav-title', array(
      'default' => _x('Nav Title', 'rasadnik-theme'),
      'type' => 'theme_mod'
    ));
    $wp_customize->add_control( 'advices_nav-title', array(
      'label' => __('Nav Title', 'rasadnik-theme'),
      'section' => 'advices',
      'priority' => 4
    ));

  // Products Archive customizer
  $wp_customize->add_section( 'products', array(
    'title' => __('Products', 'rasadnik-theme'),
    'description' => sprintf('Products Options' , 'rasadnik-theme'),
    'priority' => 130
  ));
  $wp_customize->add_setting( 'products_title', array(
    'default' => _x('Title', 'rasadnik-theme'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control( 'products_title', array(
    'label' => __('Title', 'rasadnik-theme'),
    'section' => 'products',
    'priority' => 2
  ));
  $wp_customize->add_setting( 'products_description', array(
    'default' => _x('Products Description', 'rasadnik-theme'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control( 'products_description', array(
    'label' => __('Products Description', 'rasadnik-theme'),
    'section' => 'products',
    'priority' => 3
  ));
  $wp_customize->add_setting( 'products_nav-title', array(
    'default' => _x('Nav Title', 'rasadnik-theme'),
    'type' => 'theme_mod'
  ));
  $wp_customize->add_control( 'products_nav-title', array(
    'label' => __('Nav Title', 'rasadnik-theme'),
    'section' => 'products',
    'priority' => 4
  ));
}
add_action( 'customize_register', 'rasadnik_customize_register' );