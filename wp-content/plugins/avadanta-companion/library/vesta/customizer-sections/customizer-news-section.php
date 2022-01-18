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
		'default' => esc_html__('News And Updates','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_title',array(
		'label'   => esc_html__('Title','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	


			// News section Sub title
		$wp_customize->add_setting( 'home_news_section_subtitle',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Lets Checkout our All Latest News
','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_subtitle',array(
		'label'   => esc_html__('Title','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	
		
		$wp_customize->add_setting( 'home_news_section_description',array(
		'capability'     => 'edit_theme_options',
		'default' => esc_html__('Lorem ipsum is simply dummy text of the printing and typesetting industry','avadanta'),
		'sanitize_callback' => 'sanitize_text_field',
		));	
		$wp_customize->add_control( 'home_news_section_description',array(
		'label'   => esc_html__('Description','avadanta'),
		'section' => 'avadanta_latest_news_section',
		'type' => 'text',
		));	
		
        $wp_customize->add_setting('num_post_page',
            array(
                'default'           => '3',
                'sanitize_callback' => 'avata_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('num_post_page',
            array(
                'label'    => __('No. of Post Per Page', 'teczilla'),
                'section'  => 'avadanta_latest_news_section',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '1', 'step' => '', 'max' => '10',
                  ),
                'priority' => 10,

            )
        );

	

		}
add_action( 'customize_register', 'avata_avadanta_news_customize_register' );
endif;

function avata_avadanta_register_home_news_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
		'selector'            => '.blog-sec .common-sec-heading span',
		'settings'            => 'home_news_section_title',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_subtitle', array(
		'selector'            => '.blog-sec .common-sec-heading h2',
		'settings'            => 'home_news_section_subtitle',
	
	) );

		$wp_customize->selective_refresh->add_partial( 'home_news_section_description', array(
		'selector'            => '.blog-sec .common-sec-heading p',
		'settings'            => 'home_news_section_description',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'blog_meta_section_enable', array(
		'selector'            => '#blog .gutter-vr-30px',
		'settings'            => 'blog_meta_section_enable',
	
	) );


}
add_action( 'customize_register', 'avata_avadanta_register_home_news_section_partials' );