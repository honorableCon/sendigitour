<?php
function avata_avadanta_get_team_default() {

	return apply_filters(
		'avadanta_team_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'David Fahim', 'bovity' ),
				'subtitle'   => esc_html__( 'Web Developer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/team01.jpg'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'bovity' ),
				'subtitle'   => esc_html__( 'Web Designer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/team02.jpg'),
				),
				array(
				'title'      => esc_html__( 'William Jason', 'bovity' ),
				'subtitle'   => esc_html__( 'Programmer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/team03.jpg'),
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
				'title'      => esc_html__( 'Performance', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/port1.jpg'),
				'link'       => '#',
				'text' => esc_html__('Lorem ipsum is simply dummy text of the printing and typesetting industry.', 'bovity'),
				),
				array(
				'title'      => esc_html__( 'Valuation', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/port2.jpg'),
				'link'       => '#',
				'text' => esc_html__('Lorem ipsum is simply dummy text of the printing and typesetting industry.', 'bovity'),

				),
				

				array(
				'title'      => esc_html__( 'Technology', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/port3.jpg'),
				'link'       => '#',
				'text' => esc_html__('Lorem ipsum is simply dummy text of the printing and typesetting industry.', 'bovity'),

				),
				array(
				'title'      => esc_html__( 'Memory', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/bovity/assets/images/port4.jpg'),
				'link'       => '#',
				'text' => esc_html__('Lorem ipsum is simply dummy text of the printing and typesetting industry.', 'bovity'),

				),		
					
			)
		)
	);
}


function avata_avadanta_get_about_faq_default() {

	return apply_filters(
		'avadanta_about_content', json_encode(
			array(
				array(
				'title'      => esc_html__( 'What Are the process here?', 'bovity' ),
				'text'       => esc_html__('We carefully consider our solutions to support each and every stage of your in each way of your growth and value.
', 'bovity'),
				),
				array(
				'title'      => esc_html__( 'Benifits of staying here', 'bovity' ),
				'text'       => esc_html__('Lorem ipsum dolor sit amet, consectetur adipis cing elit, sed do eiusmod tempor incididunt', 'bovity'),
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
				'title'      => esc_html__( 'Infuring Your Future From Today', 'bovity' ),
				'subtitle'      => esc_html__( 'Building Business Effective', 'bovity' ),
				'text'       => esc_html__('We carefully consider our solutions to support each and every stage of your in each way of your growth and value.
', 'bovity'),
				'button_text'      => esc_html__( 'Know More', 'bovity' ),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/vesta/assets/images/slider1.jpg'),
				),
				array(
				'title'      => esc_html__( 'High Performance', 'bovity' ),
				'subtitle'      => esc_html__( 'Best Solution For Business Is Here', 'bovity' ),
				'text'       => esc_html__('We carefully consider our solutions to support each and every stage of your in each way of your growth and value.', 'bovity'),
				'button_text'      => esc_html__( 'Know More', 'bovity' ),
				'link'      => '#',
                'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/vesta/assets/images/slider2.jpg'),
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
				'title'      => esc_html__( '24/7 Service
', 'bovity' ),	
				'icon_value' => 'fa-laptop',
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',

				),
				array(
				'title'      => esc_html__( 'Special Care
', 'bovity' ),
				'icon_value' => 'fa-bullhorn',
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),
				'choice'	=> 'customizer_repeater_icon',
				'link'       => '#',
				),
				array(
				'title'      => esc_html__( 'Quality Team
', 'bovity' ),
				'icon_value' => 'fa-cubes',
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),
				'choice'	=> 'customizer_repeater_icon',
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
				'title'      => esc_html__( 'David Fahim', 'bovity' ),
				'subtitle'   => esc_html__( 'Web Developer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi1.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),

				),
				array(
				'title'      => esc_html__( 'Kiron Jorge', 'bovity' ),
				'subtitle'   => esc_html__( 'Web Designer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi2.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),
				),
				array(
				'title'      => esc_html__( 'Robart Jason', 'bovity' ),
				'subtitle'   => esc_html__( 'Programmer', 'bovity' ),
				'image_url'     => esc_url(AVATA_PLUGIN_URL . 'library/avadanta/assets/images/testi3.png'),
				'text'       => esc_html__('Dorem ipsum dolor sit amet, consectetur adipisicing elised doingyt eiusmod teididunt ut labore et dolore eiusmod tempor.', 'bovity'),
				),				
		
			)
		)
	);
}