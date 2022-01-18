<?php
function avata_avadanta_get_team_default() {

	return apply_filters(
		'avadanta_team_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'David Fahim', 'avadanta' ),
				'subtitle'   => esc_html__( 'Web Developer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team5.jpg'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'avadanta' ),
				'subtitle'   => esc_html__( 'Web Designer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team6.jpg'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'avadanta' ),
				'subtitle'   => esc_html__( 'Programmer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/team7.jpg'),
				),

				array(
				'title'      => esc_html__( 'Muktar Amint', 'avadanta' ),
				'subtitle'   => esc_html__( 'Influencer', 'avadanta' ),
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
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port8.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Branding', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port4.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Insurance', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port6.jpg'),
				'link'       => '#',
				),

				array(
				'title'      => esc_html__( 'Creative', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port7.jpg'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Analysis', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port5.png'),
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Environment', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/port3.jpg'),
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
				'title'      => esc_html__( 'Digital Experience to help Grow', 'avadanta' ),
				'text'       => esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor', 'avadanta'),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/slider-consult.jpg'),
				),
				array(
				'title'      => esc_html__( 'We increase brands values', 'avadanta' ),
				'text'       => esc_html__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor', 'avadanta'),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/slider2.jpg'),
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
				'icon_value' => 'fa-laptop',
				'title'      => esc_html__( 'Digital Marketing', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-bullhorn',
				'title'      => esc_html__( 'Insurance Business', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-cubes',
				'title'      => esc_html__( 'Business Plan', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-asterisk',
				'title'      => esc_html__( 'Analytics', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-database',
				'title'      => esc_html__( 'Database', 'avadanta' ),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				'open_new_tab' => 'no',
				),
				array(
				'icon_value' => 'fa-user',
				'title'      => esc_html__( 'Planning', 'avadanta' ),
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
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/1.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/2.png'),
				'link'       => '#',
				),
				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/3.png'),
				'link'       => '#',
				),

				array(
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/4.png'),
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
				'title'      => esc_html__( 'David Fahim', 'avadanta' ),
				'subtitle'   => esc_html__( 'Web Developer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi3.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'avadanta' ),
				'subtitle'   => esc_html__( 'Web Designer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi2.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'avadanta' ),
				'subtitle'   => esc_html__( 'Programmer', 'avadanta' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi1.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'avadanta'),
				),				
		
			)
		)
	);
}