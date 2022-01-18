<?php
if ( ! function_exists( 'avata_avadanta_clients_customize_register' ) ) :
function avata_avadanta_clients_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
//Clients Section
			$wp_customize->add_section('avadanta_clients_section',array(
					'title' => __('Contact Section','avadanta'),
					'panel' => 'home_section_settings',
					'priority'  => '',
					));
		
			$wp_customize->add_setting( 'clients_section_enable' , array( 'default' => 'on') );
			$wp_customize->add_control(	'clients_section_enable' , array(
					'label'    => __( 'Enable Home Contact Section', 'avadanta' ),
					'section'  => 'avadanta_clients_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			

		$wp_customize->add_setting('contact_title',array(
		'capability'  => 'edit_theme_options',
		'default' =>'Locate Us',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('contact_title',array(
		'label' => __('Contact Title','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 

		$wp_customize->add_setting('contact_cont',array(
		'capability'  => 'edit_theme_options',
		'default' =>'Find on Google Map',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('contact_cont',array(
		'label' => __('Contact','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 




		$wp_customize->add_setting('phone_title',array(
		'capability'  => 'edit_theme_options',
		'default' =>'Emergency Call',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('phone_title',array(
		'label' => __('Phone Title','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 

		$wp_customize->add_setting('contact_phone',array(
		'capability'  => 'edit_theme_options',
		'default' =>'+590 1234 567 890',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('contact_phone',array(
		'label' => __('Phone No.','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 
	 

		$wp_customize->add_setting('address_title',array(
		'capability'  => 'edit_theme_options',
		'default' =>'Contact Us',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('address_title',array(
		'label' => __('Address Title','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 

		$wp_customize->add_setting('contact_address',array(
		'capability'  => 'edit_theme_options',
		'default' =>'Send Us Email',
		'sanitize_callback' => 'sanitize_text_field',
		));
		$wp_customize->add_control('contact_address',array(
		'label' => __('Address','avadanta'),
		'section' => 'avadanta_clients_section',
		'type' => 'text',
		)); 

		$wp_customize->add_setting("vesta_enable_for_all", array(
        "sanitize_callback" => "vesta_sanitize_checkbox",
        "default" => 0,
    ));
    $wp_customize->add_control("vesta_enable_for_all", array(
        "type" => "checkbox",
        "label" => esc_html__("Enable Contact Section On All Pages", "bovity"),
        "section" => "avadanta_clients_section",
        "description" => esc_html__(
            "Check this box to Enable Contact Section On All Pages",
            "bovity"
        ),
    ));

    
    $wp_customize->add_setting("bovity_enable_for_all", array(
        "sanitize_callback" => "bovity_sanitize_select",
        "default" => "center",
    ));
    $wp_customize->add_control("bovity_enable_for_all", array(
        "type" => "select",
        "label" => esc_html__("Header Title Layout", "bovity"),
        "description" => esc_html__(
            "This will be apply for Header Title & Breadcrumb",
            "bovity"
        ),
        "section" => "bovity_breadcrumb_settings",
        "choices" => array(
            "right" => esc_html__("Right", "bovity"),
            "left" => esc_html__("Left", "bovity"),
            "center" => esc_html__("Center", "bovity"),
        ),
    ));



}
add_action( 'customize_register', 'avata_avadanta_clients_customize_register' );
endif;
    /**
	* Add selective refresh for Front page clients section controls.
	*/
	
function avata_avadanta_register_home_clients_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'clients_section_enable', array(
		'selector'            => '.address-sec .row',
		'settings'            => 'clients_section_enable',
	
	) );
}
add_action( 'customize_register', 'avata_avadanta_register_home_clients_section_partials' );


?>