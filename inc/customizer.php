<?php
/**
 * Wordpress-bootstrap-starter-theme Theme Customizer
 *
 * @package Wordpress-bootstrap-starter-theme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wordpress_bootstrap_starter_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'wordpress_bootstrap_starter_theme_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'wordpress_bootstrap_starter_theme_customize_partial_blogdescription',
			)
		);
	}


	// Add Opening Times
	$wp_customize->add_section(
		'opening-times',
		array(
			'title' => __( 'Opening Times', '_s' ),
			'priority' => 30,
			'description' => __( 'Enter the URL to your account for each service for the icon to appear in the header.', '_s' )
		)
	);

		// Add Monday Setting		
		$wp_customize->add_setting( 'monday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'monday', array( 'label' => __( 'Monday', '_s' ), 'section' => 'opening-times', 'settings' => 'monday', ) ) );
		
		// Add Tuesday Setting	
		$wp_customize->add_setting( 'tuesday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tuesday', array( 'label' => __( 'Tuesday', '_s' ), 'section' => 'opening-times', 'settings' => 'tuesday', ) ) );
		
		// Add Monday Setting
		$wp_customize->add_setting( 'wednesday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wednesday', array( 'label' => __( 'Wednesday', '_s' ), 'section' => 'opening-times', 'settings' => 'wednesday', ) ) );
	
		// Add Monday Setting		
		$wp_customize->add_setting( 'thursday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'thursday', array( 'label' => __( 'Thursday', '_s' ), 'section' => 'opening-times', 'settings' => 'thursday', ) ) );
		
		// Add Monday Setting	
		$wp_customize->add_setting( 'friday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'friday', array( 'label' => __( 'Friday', '_s' ), 'section' => 'opening-times', 'settings' => 'friday', ) ) );
		
		// Add Monday Setting
		$wp_customize->add_setting( 'saturday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'saturday', array( 'label' => __( 'Saturday', '_s' ), 'section' => 'opening-times', 'settings' => 'saturday', ) ) );

		// Add Monday Setting
		$wp_customize->add_setting( 'sunday', array( 'default' => '' ) );
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sunday', array( 'label' => __( 'Sunday', '_s' ), 'section' => 'opening-times', 'settings' => 'sunday', ) ) );
	
	
	}
	add_action( 'customize_register', 'wordpress_bootstrap_starter_theme_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function wordpress_bootstrap_starter_theme_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function wordpress_bootstrap_starter_theme_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wordpress_bootstrap_starter_theme_customize_preview_js() {
	wp_enqueue_script( 'wordpress-bootstrap-starter-theme-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wordpress_bootstrap_starter_theme_customize_preview_js' );
