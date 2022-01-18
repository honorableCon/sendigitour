<?php
if ( ! function_exists( 'avata_teczilla_about_customize_register' ) ) :
function avata_teczilla_about_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	/* About Section */
	$wp_customize->add_section( 'about_section' , array(
			'title'      => __('About Section', 'avadanta'),
			'panel'  => 'home_section_settings',
			'priority'  => '',
	) );
		
	// Enable about section
	$wp_customize->add_setting( 'about_section_enable' , array( 'default' => 'on') );
	$wp_customize->add_control(	'about_section_enable' , array(
			'label'    => __( 'Enable Home About Section', 'avadanta' ),
			'section'  => 'about_section',
			'type'     => 'radio',
			'choices' => array(
				'on'=>__('ON', 'avadanta'),
				'off'=>__('OFF', 'avadanta')
			)
	));
		
	// about section title
	$wp_customize->add_setting( 'home_about_section_title',array(
	'capability'     => 'edit_theme_options',
	'default' => __('Who We Are
	','avadanta'),
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( 'home_about_section_title',array(
	'label'   => __('Title','avadanta'),
	'section' => 'about_section',
	'type' => 'text',
	));	

	//about section Sub Title
	$wp_customize->add_setting( 'home_about_section_subtitle',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('We can help you to unlock opportunity by creating human-centered products.','avadanta'),
	'sanitize_callback' => 'sanitize_text_field',
	));	

	
	$wp_customize->add_control( 'home_about_section_subtitle',array(
	'label'   => __('Subtitle','avadanta'),
	'section' => 'about_section',
	'type' => 'text',
	));

		
	//about section discription
	$wp_customize->add_setting( 'home_about_section_discription',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('Our designers and engineers know collaboration is the essence of any project. It’s a simple philosophy we followed for nearly two decades. And it delivers results.

','avadanta'),
	'sanitize_callback' => 'sanitize_text_field',
	));	

	
	$wp_customize->add_control( 'home_about_section_discription',array(
	'label'   => __('Description','avadanta'),
	'section' => 'about_section',
	'type' => 'textarea',
	));

		//about section Button
	$wp_customize->add_setting( 'home_about_section_btn',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('About Us','avadanta'),
	'sanitize_callback' => 'sanitize_text_field',
	'transport'         => $selective_refresh,
	));	

	
	$wp_customize->add_control( 'home_about_section_btn',array(
	'label'   => __('Button Text','avadanta'),
	'section' => 'about_section',
	'type' => 'text',
	));

	//about section Button Url
	$wp_customize->add_setting( 'home_about_section_btnurl',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('#','avadanta'),
	'sanitize_callback' => 'esc_url_raw',
	'transport'         => $selective_refresh,
	));	

	
	$wp_customize->add_control( 'home_about_section_btnurl',array(
	'label'   => __('Button Url','avadanta'),
	'section' => 'about_section',
	'type' => 'url',
	));
		
	//about one image
	$wp_customize->add_setting(
	'home_about_thumb',array(
	'default' => AVATA_PLUGIN_URL .'library/teczilla/assets/images/us.jpg',
	'sanitize_callback' => 'esc_url_raw', 
	'transport'         => $selective_refresh,
));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_about_thumb',
			array(
				'label' => __('Image','avadanta'),
				'description' =>__('(Recommended Size 450*470)','avadanta'),
				'section' => 'example_section_one',
				'settings' =>'home_about_thumb',
				'section' => 'about_section',
				'type' => 'upload',
			)
		)
	);
		
}

add_action( 'customize_register', 'avata_teczilla_about_customize_register' );
endif;

/**
 * Add selective refresh for Front page section section controls.
 */
function avata_avadanta_register_home_about_section_partials( $wp_customize ){
	
	//About
	$wp_customize->selective_refresh->add_partial( 'home_about_section_title', array(
		'selector'            => '.tec-about .sub-title',
		'settings'            => 'home_about_section_title',
		'render_callback'  => 'avata_avadanta_about_section_title_render_callback',
	
	) );
	
	//About
	$wp_customize->selective_refresh->add_partial( 'home_about_section_subtitle', array(
		'selector'            => '.tec-about .title',
		'settings'            => 'home_about_section_subtitle',
		'render_callback'  => 'avata_avadanta_about_section_title_render_callback',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'home_about_section_discription', array(
		'selector'            => '.tec-about .desc ',
		'settings'            => 'home_about_section_discription',
		'render_callback'  => 'avata_avadanta_about_section_discription_render_callback',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'home_about_thumb', array(
		'selector'            => '.tec-about .image-part ',
		'settings'            => 'home_about_thumb',
	
	) );
}

add_action( 'customize_register', 'avata_avadanta_register_home_about_section_partials' );

function avata_avadanta_about_section_title_render_callback() {
	return get_theme_mod( 'home_about_section_title' );
}

function avata_avadanta_about_section_discription_render_callback() {
	return get_theme_mod( 'home_about_section_discription' );
}

	function avadanta_home_page_sanitize_text( $input ) {

		return wp_kses_post( force_balance_tags( $input ) );

	}

?>