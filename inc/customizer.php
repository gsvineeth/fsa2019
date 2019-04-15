<?php
/**
 * ifsa2019 Theme Customizer
 *
 * @package ifsa2019
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ifsa2019_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'ifsa2019_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'ifsa2019_customize_partial_blogdescription',
		) );
	}

	$wp_customize->add_panel( 'header_naviation_panel',
		array(
			'title' => __( 'Theme options' ),
			'description' => esc_html__( 'Theme options.' ), // Include html tags such as 
			'priority' => 160, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
		)
	);
	$wp_customize->add_section( 'theme_option_section',
		array(
			'title' => __( 'Theme options' ),
			'description' => esc_html__( 'These are an example of Customizer Custom Controls.' ),
			'panel' => '', // Only needed if adding your Section to a Panel
			'priority' => 160, // Not typically needed. Default is 160
			'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
			'theme_supports' => '', // Rarely needed
			'active_callback' => '', // Rarely needed
			'description_hidden' => 'false', // Rarely needed. Default is False
		)
	);
	$wp_customize->add_setting( 'online_course_page',
		array(
			'default' => '',
			'transport' => 'refresh',
			'sanitize_callback' => 'absint'
		)
	);
 
	$wp_customize->add_control( 'online_course_page',
		array(
			'label' => __( 'Online Course Page' ),
			'description' => esc_html__( 'Select the page for Online Course' ),
			'section' => 'theme_option_section',
			'priority' => 10, // Optional. Order priority to load the control. Default: 10
			'type' => 'dropdown-pages',
			'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
		)
	);

	$wp_customize->add_setting( 'classroom_course_page',
	array(
		'default' => '',
		'transport' => 'refresh',
		'sanitize_callback' => 'absint'
	)
	);

	$wp_customize->add_control( 'classroom_course_page',
		array(
			'label' => __( 'Classroom Course Page' ),
			'description' => esc_html__( 'Select the page for Classroom Course' ),
			'section' => 'theme_option_section',
			'priority' => 10, // Optional. Order priority to load the control. Default: 10
			'type' => 'dropdown-pages',
			'capability' => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
		)
	);

}
add_action( 'customize_register', 'ifsa2019_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ifsa2019_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ifsa2019_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ifsa2019_customize_preview_js() {
	wp_enqueue_script( 'ifsa2019-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'ifsa2019_customize_preview_js' );
