<?php
if ( ! function_exists( 'avata_avadanta_team_customize_register' ) ) :
function avata_avadanta_team_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
//Team Section
			$wp_customize->add_section('avadanta_team_section',array(
					'title' => __('Team Section','avadanta'),
					'panel' => 'home_section_settings',
				'priority'  => '',
					));
		
			$wp_customize->add_setting( 'team_section_enable' , array( 'default' => 'on') );
			$wp_customize->add_control(	'team_section_enable' , array(
					'label'    => __( 'Enable Home Team Section', 'avadanta' ),
					'section'  => 'avadanta_team_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			
			// Team section title
			$wp_customize->add_setting( 'home_team_section_title',array(
			'default' => __('Meet Our Team Members','avadanta'),
			'sanitize_callback' => 'sanitize_text_field',
			));	
			$wp_customize->add_control( 'home_team_section_title',array(
			'label'   => __('Title','avadanta'),
			'section' => 'avadanta_team_section',
			'type' => 'text',
			));	

			
			//Team section discription
			$wp_customize->add_setting( 'home_team_section_discription',array(
			'default'=> __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
','avadanta'),
			'transport'         => $selective_refresh,
			));	
			$wp_customize->add_control( 'home_team_section_discription',array(
			'label'   => __('Description','avadanta'),
			'section' => 'avadanta_team_section',
			'type' => 'textarea',
			));
			

	    // column layout
		$wp_customize->add_setting(
		'avadanta_team_col_layout',
			array(
				'default' => '3',
				'sanitize_callback' => 'avadanta_comapanion_sanitize_select',
			)
		);
		$avadanta_team_col_layout_option = avadanta_team_col_layout_option();
		
		$wp_customize->add_control(
		'avadanta_team_col_layout',
			array(
				'type' => 'radio',
				'label' => esc_html__('Column Layout Option ', 'avadanta'),
				'description' => '',
				'section' => 'avadanta_team_section',
				'choices' => $avadanta_team_col_layout_option,
				'priority' => 10,
			)
		);
			
			if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting(
				'avadanta_team_content', array(
				)
			);

			$wp_customize->add_control(
				new Avadanta_Repeater(
					$wp_customize, 'avadanta_team_content', array(
						'label'                            => esc_html__( 'Team Content', 'avadanta' ),
						'section'                          => 'avadanta_team_section',
						'priority'                         => 15,
						'add_field_label'                  => esc_html__( 'Add new Team Member', 'avadanta' ),
						'item_name'                        => esc_html__( 'Team', 'avadanta' ),
						'customizer_repeater_image_control' => true,
						'customizer_repeater_title_control' => true,
						'customizer_repeater_subtitle_control' => true,
						'customizer_repeater_repeater_control' => true,
						
					)
				)
			);
		} 

		class Avadanta_team__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
			<a href="<?php echo esc_url( 'https://www.avadantathemes.com/product/avadanta-pro/' ); ?>" target="_blank"><h3 class="customizer_team_upgrade_section" style="display: none;">
			<?php _e('Upgrade to Pro','avadanta'); ?> </h3></a> 
			<?php
			}
		}
		
		
		$wp_customize->add_setting( 'avadanta_team_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_team__section_upgrade(
			$wp_customize,
			'avadanta_team_upgrade_to_pro',
				array(
					'section'				=> 'avadanta_team_section',
					'settings'				=> 'avadanta_team_upgrade_to_pro',
					'priority'                         => 20,
				)
			)
		);
	


}
add_action( 'customize_register', 'avata_avadanta_team_customize_register' );
endif;
    /**
	* Add selective refresh for Front page team section controls.
	*/
	
function avata_avadanta_register_home_team_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'home_team_section_title', array(
		'selector'            => '.section-x.team .heading-xs',
		'settings'            => 'home_team_section_title',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_team_section_discription', array(
		'selector'            => '.section-x.team h2',
		'settings'            => 'home_team_section_discription',
	
	) );


$wp_customize->selective_refresh->add_partial( 'avadanta_team_content', array(
		'selector'            => '.section-x.team .gutter-vr-30px',
		'settings'            => 'avadanta_team_content',
	
	) );
}
add_action( 'customize_register', 'avata_avadanta_register_home_team_section_partials' );



if (!function_exists('avadanta_team_col_layout_option')) :
    function avadanta_team_col_layout_option()
    {
        $avadanta_team_col_layout_option = array(
            '6' => esc_html__('2 Column Layout', 'avadanta'),
			'4' => esc_html__('3 Column Layout', 'avadanta'),
        );
        return apply_filters('avadanta_team_col_layout_option', $avadanta_team_col_layout_option);
    }
endif;

?>