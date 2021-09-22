<?php if( ! defined( 'ABSPATH' ) ) exit;

Kirki::add_section( 'real_estate_agency_footer', array(
    'title'          => __( 'Footer Options', 'real-estate-agency' ),
    'priority'       => 94,
    'capability'     => 'edit_theme_options',
) ); 

Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'switch',
	'settings'    => 'real_estate_agency_copyright',
	'label'       => __( 'Activate Custom Copyright', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'On', 'real-estate-agency' ),
		'' => esc_html__( 'Off', 'real-estate-agency' ),
	),
) );

Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'code',
	'settings'    => 'code_copyright_text',
	'label'       => esc_html__( 'Add Copyright', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'default'     => '',
	'choices'     => array(
		'language' => 'html',
	),
) );

Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'color',
	'settings'    => 'real_estate_agency_footer_background',
	'label'       => __( 'Background Color', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'default'     => '',
) );

Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'color',
	'settings'    => 'real_estate_agency_footer_title',
	'label'       => __( 'Title Color', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'default'     => '',
) );

Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'color',
	'settings'    => 'real_estate_agency_footer_text',
	'label'       => __( 'Text Color', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'default'     => '',
) );


Kirki::add_field( 'real_estate_agency_options', array(
	'type'        => 'color',
	'settings'    => 'real_estate_agency_footer_link_hover',
	'label'       => __( 'Link Hover Color', 'real-estate-agency' ),
	'section'     => 'real_estate_agency_footer',
	'default'     => '',
) );


/**
 * Footer styles
 */ 	

function real_estate_agency_footer_method() {

        $real_estate_agency_footer_background = esc_attr( get_theme_mod( 'real_estate_agency_footer_background' ) );
        $real_estate_agency_footer_title = esc_attr( get_theme_mod( 'real_estate_agency_footer_title' ) );
        $real_estate_agency_footer_text = esc_html( get_theme_mod( 'real_estate_agency_footer_text' ) );
        $real_estate_agency_footer_link_hover = esc_attr( get_theme_mod( 'real_estate_agency_footer_link_hover' ) );

		
		if( $real_estate_agency_footer_background ) { $style1 = ".footer-center, .site-info {background: {$real_estate_agency_footer_background} !important;}";} else {$style1 ="";}
		if( $real_estate_agency_footer_title ) { $style2 = ".footer-widgets h2 {color: {$real_estate_agency_footer_title} !important;}";} else {$style2 ="";}
		if( $real_estate_agency_footer_text ) { $style3 = ".footer-widgets a, .footer-widgets, .site-info,  .site-info a {color: {$real_estate_agency_footer_text} !important;}";} else {$style3 ="";}
		if( $real_estate_agency_footer_link_hover ) { $style4 = ".footer-widgets a:hover, .site-info a:hover {color: {$real_estate_agency_footer_link_hover} !important;}";} else {$style4 ="";}

        wp_add_inline_style( 'real-estate-agency-style',
		$style1.$style2.$style3.$style4
		);
}
add_action( 'wp_enqueue_scripts', 'real_estate_agency_footer_method' );		
		