<?php
if ( ! function_exists( 'avata_avadanta_service_customize_register' ) ) :
function avata_avadanta_service_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
		/* Services section */
		$wp_customize->add_section( 'services_section' , array(
			'title'      => __('Service Section', 'avadanta'),
			'panel'  => 'home_section_settings',
			'priority'  => '',
		) );
		
		// Enable service
		$wp_customize->add_setting( 'home_service_section_enabled' , array( 'default' => 'on') );
		$wp_customize->add_control(	'home_service_section_enabled' , array(
				'label'    => __( 'Enable Services On Homepage', 'avadanta' ),
				'section'  => 'services_section',
				'type'     => 'radio',
				'choices' => array(
					'on'=>__('ON', 'avadanta'),
					'off'=>__('OFF', 'avadanta')
				)
		));
		
		// Service section title
		$wp_customize->add_setting( 'home_service_section_title',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Our World Class Services','avadanta'),
		'sanitize_callback' => 'avata_avadanta_home_page_sanitize_text',
		));	
		$wp_customize->add_control( 'home_service_section_title',array(
		'label'   => __('Title','avadanta'),
		'section' => 'services_section',
		'type' => 'text',
		));	
		

		//room section discription
		$wp_customize->add_setting( 'home_service_section_discription',array(
		'capability'     => 'edit_theme_options',
		'default' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
','avadanta'),
		'sanitize_callback' => 'avata_avadanta_home_page_sanitize_text',
		'transport'         => $selective_refresh,
		));	
		$wp_customize->add_control( 'home_service_section_discription',array(
		'label'   => __('Description','avadanta'),
		'section' => 'services_section',
		'type' => 'textarea',
		));	

				//Contact form section Background Image
		$wp_customize->add_setting( 'service_background_image', array(
			'default' => AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg.png',
			  'sanitize_callback' => 'esc_url_raw',
			) );
			
			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'service_background_image', array(
			  'label'    => __( 'Background Image', 'avadanta' ),
			  'section'  => 'services_section',
			  'settings' => 'service_background_image',
			) ) );
		

			 $wp_customize->add_setting('avadanta_service_opacity_section',
		    array(
		        'default'           => '.92',
		        'sanitize_callback' => 'avadanta_sanitize_float'
		    )
		);
		$wp_customize->add_control('avadanta_service_opacity_section',
		    array(
		        'label'    => __('Service Overlay Opacity', 'avadanta'),
		        'section'  => 'services_section',
		        'type'     => 'number',
		        'input_attrs' => array(
		            'min' => '0.01', 'step' => '0.01', 'max' => '1',
		          ),
		        'priority' => 10,

		    )
		);

        $wp_customize->add_setting('avadanta_service_background',array(
        'default' => esc_html__('#24243e','avadanta'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'avadanta_service_background',array(
            'label' => esc_html__('Service Overlay','avadanta'),           
            'description' => esc_html__('Service Background Overlay','avadanta'),
            'section' => 'services_section',
            'settings' => 'avadanta_service_background'
        ))
    );


	    // column layout
		$wp_customize->add_setting(
		'avadanta_service_col_layout',
			array(
				'default' => '4',
				'sanitize_callback' => 'avadanta_comapanion_sanitize_select',
			)
		);
		$avadanta_section_col_layout = avadanta_col_layout_option();
		
		$wp_customize->add_control(
		'avadanta_service_col_layout',
			array(
				'type' => 'radio',
				'label' => esc_html__('Column Layout Option ', 'avadanta'),
				'description' => '',
				'section' => 'services_section',
				'choices' => $avadanta_section_col_layout,
				'priority' => 10,
			)
		);


		if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting( 'avadanta_service_content', array(
			) );

			$wp_customize->add_control( new Avadanta_Repeater( $wp_customize, 'avadanta_service_content', array(
				'label'                             => esc_html__( 'Service Content', 'avadanta' ),
				'section'                           => 'services_section',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new Service', 'avadanta' ),
				'item_name'                         => esc_html__( 'Service', 'avadanta' ),
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_image_control' => true,
				) ) );
		}

class Avadanta_services__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a href="<?php echo esc_url( 'https://www.avadantathemes.com/product/avadanta-pro/' ); ?>" target="_blank"><h3 class="customizer_service_upgrade_section" style="display: none;">
					<?php _e('Upgrade to Pro','avadanta'); ?></h3> </a>  
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'avadanta_service_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_services__section_upgrade(
			$wp_customize,
			'avadanta_service_upgrade_to_pro',
				array(
					'section'				=> 'services_section',
					'settings'				=> 'avadanta_service_upgrade_to_pro',
				)
			)
		);

			

}
add_action( 'customize_register', 'avata_avadanta_service_customize_register' );
endif;

/**
 * Add selective refresh for Front page section section controls.
 */
function avata_avadanta_register_home_service_section_partials( $wp_customize ){

	//Slider section
	$wp_customize->selective_refresh->add_partial( 'avadanta_service_content', array(
		'selector'            => '.srvc .gutter-vr-40px',
		'settings'            => 'avadanta_service_content',
	
	) );
	
	//Slider section
	$wp_customize->selective_refresh->add_partial( 'home_service_section_title', array(
		'selector'            => '.srvc .section-head',
		'settings'            => 'home_service_section_title',
		'render_callback'  => 'avata_avadanta_service_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_service_section_discription', array(
		'selector'            => '.srvc .section-head h2',
		'settings'            => 'home_service_section_discription',
		'render_callback'  => 'avata_avadanta_service_section_discription_render_callback',
	
	) );
	
}
add_action( 'customize_register', 'avata_avadanta_register_home_service_section_partials' );

function avata_avadanta_service_section_title_render_callback() {
	return get_theme_mod( 'home_service_section_title' );
}

function avata_avadanta_service_section_discription_render_callback() {
	return get_theme_mod( 'home_service_section_discription' );
}

if (!function_exists('avadanta_col_layout_option')) :
    function avadanta_col_layout_option()
    {
        $avadanta_col_layout_option = array(
            '6' => esc_html__('2 Column Layout', 'avadanta'),
			'4' => esc_html__('3 Column Layout', 'avadanta'),
			'3' => esc_html__('4 Column Layout', 'avadanta'), 
        );
        return apply_filters('avadanta_col_layout_option', $avadanta_col_layout_option);
    }
endif;

?>