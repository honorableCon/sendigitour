<?php
if ( ! function_exists( 'avata_avadanta_portfolio_customize_register' ) ) :
function avata_avadanta_portfolio_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
//Portfolio Section
			$wp_customize->add_section('avadanta_portfolio_section',array(
					'title' => __('Portfolio Section','avadanta'),
					'panel' => 'home_section_settings',
					'priority'  => '',
					));
		
			$wp_customize->add_setting( 'portfolio_section_enable' , array( 'default' => 'on') );
			$wp_customize->add_control(	'portfolio_section_enable' , array(
					'label'    => __( 'Enable Home Portfolio Section', 'avadanta' ),
					'section'  => 'avadanta_portfolio_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			
			// Portfolio section title
			$wp_customize->add_setting( 'home_portfolio_section_title',array(
			'default' => __('Our Portfolio','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			));	
			$wp_customize->add_control( 'home_portfolio_section_title',array(
			'label'   => __('Title','avadanta'),
			'section' => 'avadanta_portfolio_section',
			'type' => 'text',
			));	
			

			// Portfolio section Sub
			$wp_customize->add_setting( 'home_portfolio_section_subtitle',array(
			'default' => __('Our Network & Industry Experience are Unmatched
','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			));	
			$wp_customize->add_control( 'home_portfolio_section_subtitle',array(
			'label'   => __('Sub Title','avadanta'),
			'section' => 'avadanta_portfolio_section',
			'type' => 'text',
			));	




			if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting(
				'avadanta_portfolio_content', array(
				)
			);

			$wp_customize->add_control(
				new Avadanta_Repeater(
					$wp_customize, 'avadanta_portfolio_content', array(
						'label'                            => esc_html__( 'Portfolio Content', 'avadanta' ),
						'section'                          => 'avadanta_portfolio_section',
						'priority'                         => 15,
						'add_field_label'                  => esc_html__( 'Add new Portfolio', 'avadanta' ),
						'item_name'                        => esc_html__( 'Portfolio', 'avadanta' ),
						'customizer_repeater_title_control' => true,
						'customizer_repeater_image_control' => true,
						'customizer_repeater_link_control'  => true,
						'customizer_repeater_text_control'  => true,
					)
				)
			);
		} 

class Avadanta_portfolio__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a href="<?php echo esc_url( 'https://www.avadantathemes.com/product/avadanta-pro/' ); ?>" target="_blank"><h3 class="customizer_portfolio_upgrade_section" style="display: none;">
					<?php _e('Upgrade to Pro','avadanta'); ?></h3> </a>  
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'bovity_portfolio_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_portfolio__section_upgrade(
			$wp_customize,
			'bovity_portfolio_upgrade_to_pro',
				array(
					'section'				=> 'avadanta_portfolio_section',
					'settings'				=> 'bovity_portfolio_upgrade_to_pro',
					'priority'                         => 20,
				)
			)
		);

}
add_action( 'customize_register', 'avata_avadanta_portfolio_customize_register' );
endif;
    /**
	* Add selective refresh for Front page portfolio section controls.
	*/
	
function avata_avadanta_register_home_portfolio_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'home_portfolio_section_title', array(
		'selector'            => '.service-sec .common-sec-heading',
		'settings'            => 'home_portfolio_section_title',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_portfolio_section_subtitle', array(
		'selector'            => '.service-sec h2',
		'settings'            => 'home_portfolio_section_subtitle',
	
	) );

		$wp_customize->selective_refresh->add_partial( 'avadanta_portfolio_content', array(
		'selector'            => '.service-sec .service-slider',
		'settings'            => 'avadanta_portfolio_content',
	
	) );

}
add_action( 'customize_register', 'avata_avadanta_register_home_portfolio_section_partials' );


if (!function_exists('avadanta_port_col_layout_option')) :
    function avadanta_port_col_layout_option()
    {
        $avadanta_port_col_layout_option = array(
			'4' => esc_html__('3 Column Layout', 'avadanta'),
			'3' => esc_html__('4 Column Layout', 'avadanta'), 
        );
        return apply_filters('avadanta_port_col_layout_option', $avadanta_port_col_layout_option);
    }
endif;

?>