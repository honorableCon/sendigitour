<?php
if ( ! function_exists( 'avata_avadanta_news_customize_register' ) ) :
function avata_avadanta_news_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

	$wp_customize->add_section('avadanta_latest_news_section',array(
			'title' => esc_html__('Latest News Section','avadanta'),
			'panel' => 'home_section_settings',
			'priority'  => '',
			));
		
			
	// Enable news section
	$wp_customize->add_setting( 'latest_news_section_enable' , array( 'default' => 'on',  'sanitize_callback' => 'avadanta_sanitize_radio',) );
			$wp_customize->add_control(	'latest_news_section_enable' , array(
					'label'    => esc_html__( 'Enable Home News Section', 'avadanta' ),
					'section'  => 'avadanta_latest_news_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>esc_html__('ON', 'avadanta'),
						'off'=>esc_html__('OFF', 'avadanta')
					)
			));



		// News section title
		$wp_customize->add_setting( 'home_news_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('OUR NEWS & BLOGS','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_title',array(
		'label'   => esc_html__('Title','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	


	
		// News section title
		$wp_customize->add_setting( 'home_news_section_subtitle',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Lorem ipsum dolor sit amet elit.
','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_subtitle',array(
		'label'   => esc_html__('Sub Title','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	
		

		// News section title
		$wp_customize->add_setting( 'home_news_section_description',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.
','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_description',array(
		'label'   => esc_html__('Description','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	
		

		// enable / disable meta section 
		$wp_customize->add_setting(
			'blog_meta_section_enable',
			array('capability'  => 'edit_theme_options',
			'default' => true,
			'sanitize_callback' => 'avadanta_sanitize_checkbox',
			
			));
		$wp_customize->add_control(
			'blog_meta_section_enable',
			array(
				'type' => 'checkbox',
				'label' => esc_html__('Enable post meta values, like author name, date, comments, etc.','avadanta'),
				'section' => 'avadanta_latest_news_section',
			)
		);

		}
add_action( 'customize_register', 'avata_avadanta_news_customize_register' );
endif;

function avata_avadanta_register_home_news_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
		'selector'            => '.tec-blog  .first-half .sub-title',
		'settings'            => 'home_news_section_title',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_subtitle', array(
		'selector'            => '.tec-blog  .first-half .title',
		'settings'            => 'home_news_section_subtitle',
	
	) );

		$wp_customize->selective_refresh->add_partial( 'home_news_section_description', array(
		'selector'            => '.tec-blog  .last-half .desc',
		'settings'            => 'home_news_section_description',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'blog_meta_section_enable', array(
		'selector'            => '.tec-blog .tec-carousel',
		'settings'            => 'blog_meta_section_enable',
	
	) );


}
add_action( 'customize_register', 'avata_avadanta_register_home_news_section_partials' );
