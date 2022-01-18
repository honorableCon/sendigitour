<?php
if ( ! function_exists( 'avata_teczilla_testimonial_customize_register' ) ) :
function avata_teczilla_testimonial_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
//Testimonial Section
			$wp_customize->add_section('avadanta_testimonial_section',array(
					'title' => __('Testimonial Section','avadanta'),
					'panel' => 'home_section_settings',
					'priority'  => '',
					));
		
			$wp_customize->add_setting( 'testimonial_section_enable' , array( 'default' => 'on') );
			$wp_customize->add_control(	'testimonial_section_enable' , array(
					'label'    => __( 'Enable Home Testimonial Section', 'avadanta' ),
					'section'  => 'avadanta_testimonial_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			
			// Testimonial section title
			$wp_customize->add_setting( 'home_testimonial_section_title',array(
			'default' => __('How We Vesta','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
			));	
			$wp_customize->add_control( 'home_testimonial_section_title',array(
			'label'   => __('Title','avadanta'),
			'section' => 'avadanta_testimonial_section',
			'type' => 'text',
			));	
			
			$wp_customize->add_setting( 'home_testimonial_section_subtitle',array(
			'default' => __('What People and Clients Think About Us?
','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			));	
			$wp_customize->add_control( 'home_testimonial_section_subtitle',array(
			'label'   => __('Sub Title','avadanta'),
			'section' => 'avadanta_testimonial_section',
			'type' => 'text',
			));	

			$wp_customize->add_setting( 'home_testimonial_section_description',array(
			'default' => __('Lorem ipsum is simply dummy text of the printing and typesetting industry.','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			));	
			$wp_customize->add_control( 'home_testimonial_section_description',array(
			'label'   => __('Description','avadanta'),
			'section' => 'avadanta_testimonial_section',
			'type' => 'text',
			));	
			
			if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting(
				'avadanta_testimonial_content', array(
				)
			);

			$wp_customize->add_control(
				new Avadanta_Repeater(
					$wp_customize, 'avadanta_testimonial_content', array(
						'label'                            => esc_html__( 'Testimonial Content', 'avadanta' ),
						'section'                          => 'avadanta_testimonial_section',
						'priority'                         => 15,
						'add_field_label'                  => esc_html__( 'Add new Testimonial Member', 'avadanta' ),
						'item_name'                        => esc_html__( 'Testimonial', 'avadanta' ),
						'customizer_repeater_image_control' => true,  
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_text_control'  => true,
						
						
					)
				)
			);
		} 
class Avadanta_testimonial__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a href="<?php echo esc_url( 'https://www.avadantathemes.com/product/avadanta-pro/' ); ?>" target="_blank"><h3 class="customizer_testimonial_upgrade_section" style="display: none;">
					<?php _e('Upgrade to Pro','avadanta'); ?></h3> </a>  
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'bovity_testimonial_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_testimonial__section_upgrade(
			$wp_customize,
			'bovity_testimonial_upgrade_to_pro',
				array(
					'section'				=> 'avadanta_testimonial_section',
					'settings'				=> 'bovity_testimonial_upgrade_to_pro',
					'priority'                         => 20,
				)
			)
		);

}
add_action( 'customize_register', 'avata_teczilla_testimonial_customize_register' );
endif;
    /**
	* Add selective refresh for Front page testimonial section controls.
	*/
	
function avata_avadanta_register_home_testimonial_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'home_testimonial_section_title', array(
		'selector'            => '.testimonial-sec .common-sec-heading span',
		'settings'            => 'home_testimonial_section_title',
		'render_callback'  => 'home_testimonial_section_title_render_callback',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'home_testimonial_section_subtitle', array(
		'selector'            => '.testimonial-sec .common-sec-heading .section-title',
		'settings'            => 'home_testimonial_section_subtitle',
		'render_callback'  => 'home_testimonial_section_discription_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_testimonial_section_description', array(
		'selector'            => '.testimonial-sec .common-sec-heading p',
		'settings'            => 'home_testimonial_section_description',
		'render_callback'  => 'home_testimonial_section_discription_render_callback',
	
	) );

	$wp_customize->selective_refresh->add_partial( 'avadanta_testimonial_content', array(
		'selector'            => '.testimonial-sec #testimonial-slider',
		'settings'            => 'avadanta_testimonial_content',
		'render_callback'  => 'home_testimonial_section_discription_render_callback',
	
	) );

}
add_action( 'customize_register', 'avata_avadanta_register_home_testimonial_section_partials' );


?>