<?php
if ( ! function_exists( 'avata_avadanta_callout_customize_register' ) ) :
function avata_avadanta_callout_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	// contact form section settings
	$wp_customize->add_section('home_callout_section',array(
	'title'=>'Callout Section',
	'description'=>'',
	'panel'  => 'home_section_settings',
	'priority'  => '',
	));
	
	
		$wp_customize->add_setting( 'avadanta_callout_enable' , array( 'default' => 'on') );
		$wp_customize->add_control(	'avadanta_callout_enable' , array(
					'label'    => __( 'Enable Callout Section', 'avadanta' ),
					'section'  => 'home_callout_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			

		

		$wp_customize->add_setting( 'callout_button_newtab', array(
			'default' => false,
			'sanitize_callback' => 'sanitize_text_field',
		) );
		
		$wp_customize->add_control('callout_button_newtab', array(
			'label'    => __('Open Button Url In New Tab', 'avadanta' ),
			'section'  => 'home_callout_section',
			'type' => 'checkbox',
			'priority' => 30,
		) );

	function avadanta_sanitize_float( $input ) {
	    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
	}
				
		// contact form title
		$wp_customize->add_setting('callout_title_one',array(
		'capability'  => 'edit_theme_options',
		'default' => __('Any Plan to Start a Business','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => $selective_refresh,
		));
		$wp_customize->add_control('callout_title_one',array(
		'label' => __('Callout Title','avadanta'),
		'section' => 'home_callout_section',
		'type' => 'text',
		)); 

				$wp_customize->add_setting('callout_title_two',array(
		'capability'  => 'edit_theme_options',
		'default' => __('Join our community by using our services and grow your business locally & worldwide
','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => $selective_refresh,
		));
		$wp_customize->add_control('callout_title_two',array(
		'label' => __('Callout Title','avadanta'),
		'section' => 'home_callout_section',
		'type' => 'text',
		)); 

		$wp_customize->add_setting('callout_title_button',array(
		'capability'  => 'edit_theme_options',
		'default' => __('Contact Us','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => $selective_refresh,
		));
		$wp_customize->add_control('callout_title_button',array(
		'label' => __('Callout Button One Title','avadanta'),
		'section' => 'home_callout_section',
		'type' => 'text',
		));
		// Contact title
		$wp_customize->add_setting('callout_title_url',array(
		'capability'  => 'edit_theme_options',
		'default' => __('#','avadanta'),
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => $selective_refresh,
		));
		$wp_customize->add_control('callout_title_url',array(
		'label' => __('Callout button Url','avadanta'),
		'section' => 'home_callout_section',
		'type' => 'url',
		));

	

	$wp_customize->selective_refresh->add_partial( 'callout_title_one', array(
		'selector'            => '.cta-sec .sub-title',
		'settings'            => 'callout_title_one',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'callout_title_two', array(
		'selector'            => '.cta-sec .main-title',
		'settings'            => 'callout_title_two',
	
	) );
	

	$wp_customize->selective_refresh->add_partial( 'callout_title_button', array(
	'selector'            => '.cta-sec .btn-area a',
	'settings'            => 'callout_title_button',

	) );
	 
}

add_action( 'customize_register', 'avata_avadanta_callout_customize_register' );

endif;
?>