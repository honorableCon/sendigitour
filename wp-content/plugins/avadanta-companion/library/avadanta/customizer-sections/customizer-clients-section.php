<?php
if ( ! function_exists( 'avata_avadanta_clients_customize_register' ) ) :
function avata_avadanta_clients_customize_register($wp_customize){
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
//Clients Section
			$wp_customize->add_section('avadanta_clients_section',array(
					'title' => __('Clients Section','avadanta'),
					'panel' => 'home_section_settings',
					'priority'  => '',
					));
		
			$wp_customize->add_setting( 'clients_section_enable' , array( 'default' => 'on') );
			$wp_customize->add_control(	'clients_section_enable' , array(
					'label'    => __( 'Enable Home Clients Section', 'avadanta' ),
					'section'  => 'avadanta_clients_section',
					'type'     => 'radio',
					'choices' => array(
						'on'=>__('ON', 'avadanta'),
						'off'=>__('OFF', 'avadanta')
					)
			));
			
			
			if ( class_exists( 'Avadanta_Repeater' ) ) {
			$wp_customize->add_setting(
				'avadanta_clients_content', array(
				)
			);

			$wp_customize->add_control(
				new Avadanta_Repeater(
					$wp_customize, 'avadanta_clients_content', array(
						'label'                            => esc_html__( 'Clients Content', 'avadanta' ),
						'section'                          => 'avadanta_clients_section',
						'priority'                         => 15,
						'add_field_label'                  => esc_html__( 'Add new Clients', 'avadanta' ),
						'item_name'                        => esc_html__( 'Clients', 'avadanta' ),
						'customizer_repeater_image_control' => true,
					)
				)
			);
		} 

class Avadanta_clients__section_upgrade extends WP_Customize_Control {
			public function render_content() { ?>
				<a href="<?php echo esc_url( 'https://www.avadantathemes.com/product/avadanta-pro/' ); ?>" target="_blank"><h3 class="customizer_avadantaclients_upgrade_section" style="display: none;">
					<?php _e('Upgrade to Pro','avadanta'); ?></h3> </a>  
				
			<?php
			}
		}
		
		$wp_customize->add_setting( 'avadanta_clients_upgrade_to_pro', array(
			'capability'			=> 'edit_theme_options',
			'sanitize_callback'	=> 'wp_filter_nohtml_kses',
		));
		$wp_customize->add_control(
			new Avadanta_clients__section_upgrade(
			$wp_customize,
			'avadanta_clients_upgrade_to_pro',
				array(
					'section'				=> 'avadanta_clients_section',
					'settings'				=> 'avadanta_clients_upgrade_to_pro',
					'priority'                         => 20,
				)
			)
		);


}
add_action( 'customize_register', 'avata_avadanta_clients_customize_register' );
endif;
    /**
	* Add selective refresh for Front page clients section controls.
	*/
	
function avata_avadanta_register_home_clients_section_partials( $wp_customize ){
	
	$wp_customize->selective_refresh->add_partial( 'avadanta_clients_content', array(
		'selector'            => '.section-logo .row',
		'settings'            => 'avadanta_clients_content',
	
	) );
	
	

}
add_action( 'customize_register', 'avata_avadanta_register_home_clients_section_partials' );


?>