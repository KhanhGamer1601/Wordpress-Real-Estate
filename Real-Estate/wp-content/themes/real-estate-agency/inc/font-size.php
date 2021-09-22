<?php if(  ! defined( 'ABSPATH' ) ) exit;

function real_estate_agency_font_size_customize_register( $wp_customize ) {		
/********************************************** Font Size ******************************************/

		$wp_customize->add_section( 'real_estate_agency_font_size_section' , array(
			'title'       => __( 'Font Size', 'real-estate-agency' ),
			'priority'   => 64,
		) );

		
/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_sidebar_link_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_sidebar_link_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_sidebar_link_font_size',
			'label'       => __( 'Sidebar Link Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_sidebar_title_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_sidebar_title_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_sidebar_title_font_size',
			'label'       => __( 'Sidebar Title Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );	


/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_footer_title_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_footer_title_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_footer_title_font_size',
			'label'       => __( 'Footer Title Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );			
/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h1_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h1_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h1_font_size',
			'label'       => __( 'H1 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h2_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h2_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h2_font_size',
			'label'       => __( 'H2 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h3_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h3_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h3_font_size',
			'label'       => __( 'H3 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h4_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h4_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h4_font_size',
			'label'       => __( 'H4 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h5_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h5_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h5_font_size',
			'label'       => __( 'H5 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );

/***********************************************************************************/
		
		$wp_customize->add_setting( 'real_estate_agency_typography_h6_font_size', array (
			'sanitize_callback' => 'absint',
		) );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'real_estate_agency_typography_h6_font_size', array(
			'section'  => 'real_estate_agency_font_size_section',
			'settings' => 'real_estate_agency_typography_h6_font_size',
			'label'       => __( 'H6 Font Size', 'real-estate-agency' ),			
			'type'     =>  'number',
			'input_attrs'     => array(
				'min'  => 10,
				'max'  => 50,
				'step' => 1,
	),	
		) ) );
}
add_action( 'customize_register', 'real_estate_agency_font_size_customize_register' );


/********************************************
* Custom Font Size Styles
*********************************************/ 	

function real_estate_agency_font_size_method() {

        $real_estate_agency_typography_sidebar_link_font_size = esc_attr(get_theme_mod( 'real_estate_agency_typography_sidebar_link_font_size' ) );
        $sidebar_title_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_sidebar_title_font_size' ) );
        $footer_title_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_footer_title_font_size' ) );
        $h1_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h1_font_size' ) );
        $h2_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h2_font_size' ) );
        $h3_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h3_font_size' ) );
        $h4_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h4_font_size' ) );
        $h5_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h5_font_size' ) );
        $h6_font_size_mod = esc_attr(get_theme_mod( 'real_estate_agency_typography_h6_font_size' ) );


		if( $real_estate_agency_typography_sidebar_link_font_size ) { $aside_a_font_size = "aside a {font-size: {$real_estate_agency_typography_sidebar_link_font_size}px !important;}";} else { $aside_a_font_size =""; }
		if( $sidebar_title_font_size_mod ) { $sidebar_title_font_size = "#content aside h2 {font-size: {$sidebar_title_font_size_mod}px !important;}";} else {$sidebar_title_font_size ="";}
		if( $footer_title_font_size_mod ) { $footer_title_font_size = "footer .footer-widgets .widget-title {font-size: {$footer_title_font_size_mod}px !important;}";} else {$footer_title_font_size ="";}
		if( $h1_font_size_mod ) { $h1_font_size = "h1, h1 a {font-size: {$h1_font_size_mod}px !important;}";} else {$h1_font_size ="";}
		if( $h2_font_size_mod ) { $h2_font_size = "h2, h2 a {font-size: {$h2_font_size_mod}px !important;}";} else {$h2_font_size ="";}
		if( $h3_font_size_mod ) { $h3_font_size = "h2, h2 a {font-size: {$h3_font_size_mod}px !important;}";} else {$h3_font_size ="";}
		if( $h4_font_size_mod ) { $h4_font_size = "h2, h2 a {font-size: {$h4_font_size_mod}px !important;}";} else {$h4_font_size ="";}
		if( $h5_font_size_mod ) { $h5_font_size = "h2, h2 a {font-size: {$h5_font_size_mod}px !important;}";} else {$h5_font_size ="";}
		if( $h6_font_size_mod ) { $h6_font_size = "h2, h2 a {font-size: {$h6_font_size_mod}px !important;}";} else {$h6_font_size ="";}
		
        wp_add_inline_style( 'real-estate-agency-style', 
		$aside_a_font_size.$sidebar_title_font_size.$footer_title_font_size.$h1_font_size.$h2_font_size.$h3_font_size.$h4_font_size.$h5_font_size.$h6_font_size
		);
}
add_action( 'wp_enqueue_scripts', 'real_estate_agency_font_size_method' );				
