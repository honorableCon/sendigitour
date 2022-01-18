<?php
function avata_avadanta_get_team_default() {

	return apply_filters(
		'avadanta_team_content', json_encode(
			array(
					array(
				'title'      => esc_html__( 'Joe Russo', 'avadanta' ),
				'subtitle'   => esc_html__( 'Tester', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team7.jpg'),
				),
				array(
				'title'      => esc_html__( 'Mark Town', 'avadanta' ),
				'subtitle'   => esc_html__( 'Graphics', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team6.jpg'),
				),
			
				array(
				'title'      => esc_html__( 'Gokie Lopez', 'avadanta' ),
				'subtitle'   => esc_html__( 'Web Developer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team5.jpg'),

				),

				array(
				'title'      => esc_html__( 'Edward Mathew', 'avadanta' ),
				'subtitle'   => esc_html__( 'Immigration Expert', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team8.jpg'),
				),
				
		
			)
		)
	);
}


function avata_avadanta_get_portfolio_default() {

	return apply_filters(
		'avadanta_portfolio_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'Marketing', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port4.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Branding', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port3.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Insurance', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port8.jpg'),
				'link'       => '#',
				),

				array(
				'title'      => esc_html__( 'Creative', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port6.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Analysis', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port5.png'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Environment', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port7.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Tasking', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port2.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Valuation', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port1.jpg'),
				'link'       => '#',
				),
				
		
			)
		)
	);
}

function avata_avadanta_get_slider_default() {

	return apply_filters(
		'avadanta_slider_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'Grow your business', 'avadanta' ),
				'text'       => esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor', 'avadanta'),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/slider-agency.jpg'),
				),
				array(
				'title'      => esc_html__( 'We Are always with you', 'avadanta' ),
				'text'       => esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor', 'avadanta'),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/slider-corpo1.jpg'),
				),
		
			)
		)
	);
}

function avata_avadanta_get_service_default() {

	return apply_filters(
		'avadanta_service_content', json_encode(
			array(
				array(
				'icon_value' => 'fa-bank',
				'title'      => esc_html__( 'Testing', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-camera-retro',
				'title'      => esc_html__( 'Financial Solution', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-bar-chart-o',
				'title'      => esc_html__( 'Digital Growth', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-asterisk',
				'title'      => esc_html__( 'Skill Variable', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-th-large',
				'title'      => esc_html__( 'Data Processing', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-trello',
				'title'      => esc_html__( 'Better Output', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
		
			)
		)
	);
}

function avata_avadanta_get_clients_default() {

	return apply_filters(
		'avadanta_clients_content', json_encode(
			array(
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c1.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c5.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c3.png'),
				'link'       => '#',
				),

				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c4.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/avadanta-c2.png'),
				'link'       => '#',
				),	
			
			)
		)
	);
}

function avata_avadanta_get_testimonial_default() {

	return apply_filters(
		'avadanta_testimonial_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'Micke Rolls', 'avadanta' ),
				'subtitle'   => esc_html__( 'Engineer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi3.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),

				),
				array(
				'title'      => esc_html__( 'Jane Deago', 'avadanta' ),
				'subtitle'   => esc_html__( 'Business', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi2.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'avadanta' ),
				'subtitle'   => esc_html__( 'Mechanic', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi1.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				),				
		
			)
		)
	);
}