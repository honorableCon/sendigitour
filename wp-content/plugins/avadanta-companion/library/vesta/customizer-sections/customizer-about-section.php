<?php
if ( ! function_exists( 'avata_teczilla_about_customize_register' ) ) :
function avata_teczilla_about_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	/* About Section */
	$wp_customize->add_section( 'about_section' , array(
			'title'      => __('About Section', 'bovity'),
			'panel'  => 'home_section_settings',
			'priority'  => '',
	) );
		
	// Enable about section
	$wp_customize->add_setting( 'about_section_enable' , array( 'default' => 'on') );
	$wp_customize->add_control(	'about_section_enable' , array(
			'label'    => __( 'Enable Home About Section', 'bovity' ),
			'section'  => 'about_section',
			'type'     => 'radio',
			'choices' => array(
				'on'=>__('ON', 'bovity'),
				'off'=>__('OFF', 'bovity')
			)
	));
		
	// about section title
	$wp_customize->add_setting( 'home_about_section_title',array(
	'capability'     => 'edit_theme_options',
	'default' => __('Welcome
	','bovity'),
	'sanitize_callback' => 'sanitize_text_field',
	));

	$wp_customize->add_control( 'home_about_section_title',array(
	'label'   => __('Title','bovity'),
	'section' => 'about_section',
	'type' => 'text',
	));	

	//about section Sub Title
	$wp_customize->add_setting( 'home_about_section_subtitle',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('We Are Here to Increase Your Knowledge With Experience.
','bovity'),
	'sanitize_callback' => 'sanitize_text_field',
	));	

	
	$wp_customize->add_control( 'home_about_section_subtitle',array(
	'label'   => __('Description 1','bovity'),
	'section' => 'about_section',
	'type' => 'text',
	));

		
	//about section discription
	$wp_customize->add_setting( 'home_about_section_discription',array(
	'capability'     => 'edit_theme_options',
	'default'=> __('Lorem Ipsum is simply dummy text of the printing and typesetting industry labore aliqua.','bovity'),
	'sanitize_callback' => 'sanitize_text_field',
	));	

	
	$wp_customize->add_control( 'home_about_section_discription',array(
	'label'   => __('Description 2','bovity'),
	'section' => 'about_section',
	'type' => 'textarea',
	));


		
	//about one image
	$wp_customize->add_setting(
	'home_about_thumb',array(
	'default' => AVATA_PLUGIN_URL .'library/vesta/assets/images/about-us.png',
	'sanitize_callback' => 'esc_url_raw', 
));
 
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'home_about_thumb',
			array(
				'label' => __('Image','bovity'),
				'description' =>__('(Recommended Size 450*470)','bovity'),
				'section' => 'example_section_one',
				'settings' =>'home_about_thumb',
				'section' => 'about_section',
				'type' => 'upload',
			)
		)
	);

			if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting( 'avadanta_about_content', array(
			) );

			$wp_customize->add_control( new Avadanta_Repeater( $wp_customize, 'avadanta_about_content', array(
				'label'                             => esc_html__( 'FAQ Content', 'avadanta' ),
				'section'                           => 'about_section',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add New Faq', 'avadanta' ),
				'item_name'                         => esc_html__( 'FAQ', 'avadanta' ),
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,

				) ) );
		}
		
}

add_action( 'customize_register', 'avata_teczilla_about_customize_register' );
endif;

/**
 * Add selective refresh for Front page section section controls.
 */
function avata_avadanta_register_home_about_section_partials( $wp_customize ){
	
	//About
	$wp_customize->selective_refresh->add_partial( 'home_about_section_title', array(
		'selector'            => '.about-sec .about-title',
		'settings'            => 'home_about_section_title',
		'render_callback'  => 'avata_avadanta_about_section_title_render_callback',
	
	) );
	
	//About
	$wp_customize->selective_refresh->add_partial( 'home_about_section_subtitle', array(
		'selector'            => '.about-sec .about-title h2',
		'settings'            => 'home_about_section_subtitle',
		'render_callback'  => 'avata_avadanta_about_section_title_render_callback',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'home_about_section_discription', array(
		'selector'            => '.about-sec .about-title p',
		'settings'            => 'home_about_section_discription',
		'render_callback'  => 'avata_avadanta_about_section_discription_render_callback',
	
	) );


		$wp_customize->selective_refresh->add_partial( 'avadanta_about_content', array(
		'selector'            => '.about-sec .faq-accordion .accordion',
		'settings'            => 'avadanta_about_content',
		'render_callback'  => 'avata_avadanta_about_section_discription_render_callback',
	
	) );
	
	
	$wp_customize->selective_refresh->add_partial( 'home_about_thumb', array(
		'selector'            => '.about-sec .about-img ',
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