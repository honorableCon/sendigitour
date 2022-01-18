<?php
if ( ! function_exists( 'avata_customize_register' ) ) :
	/**
	 * avadanta Customize Register
	 */
	
	function avata_customize_register( $wp_customize ) {
		$avadanta_slider_content_control = $wp_customize->get_setting( 'avadanta_slider_content' );
				if ( ! empty( $avadanta_slider_content_control ) ) {
			$avadanta_slider_content_control->default = avata_avadanta_get_slider_default();
	}
		$avadanta_service_content_control = $wp_customize->get_setting( 'avadanta_service_content' );
				if ( ! empty( $avadanta_service_content_control ) ) {
			$avadanta_service_content_control->default = avata_avadanta_get_service_default();
	}
		$avadanta_portfolio_content_control = $wp_customize->get_setting( 'avadanta_portfolio_content' );
				if ( ! empty( $avadanta_portfolio_content_control ) ) {
			$avadanta_portfolio_content_control->default = avata_avadanta_get_portfolio_default();
	}
		$avadanta_team_content_control = $wp_customize->get_setting( 'avadanta_team_content' );
				if ( ! empty( $avadanta_team_content_control ) ) {
			$avadanta_team_content_control->default = avata_avadanta_get_team_default();
    }

    		$avadanta_testimonial_content_control = $wp_customize->get_setting( 'avadanta_testimonial_content' );
				if ( ! empty( $avadanta_testimonial_content_control ) ) {
			$avadanta_testimonial_content_control->default = avata_avadanta_get_testimonial_default();
    }

    $avadanta_client_content_control = $wp_customize->get_setting( 'avadanta_clients_content' );
				if ( ! empty( $avadanta_client_content_control ) ) {
			$avadanta_client_content_control->default = avata_avadanta_get_clients_default();
    }


      /**
         * Section Reorder
        */
        $wp_customize->add_section( 'bovity_homepage_section_reorder', array(
            'title'     => esc_html__( 'Home Section Re Order', 'bovity' ),
            'priority'  => 5,
            'panel'       => 'home_section_settings',

        ) );
        
        $wp_customize->add_setting( 'bovity_homepage_section_order_list', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( new Avadanta_Section_Re_Order( $wp_customize, 'bovity_homepage_section_order_list', array(
            'type' => 'dragndrop',
            'priority'  => 3,
            'label' => esc_html__( 'Home Section Re Order', 'bovity' ),
            'section' => 'bovity_homepage_section_reorder',
                'choices'   => array(
                    'aboutus'      => esc_html__( 'About Us', 'bovity' ),
                    'features'       => esc_html__( 'Features Services', 'bovity' ),
                    'gallery'       => esc_html__( 'Gallery Section', 'bovity' ),
                    'testimonial'   => esc_html__( 'Testimonial Section', 'bovity' ),
                    'ourteam'           => esc_html__( 'Team Section', 'bovity' ),
                    'cta'       => esc_html__( 'Callout Section', 'bovity' ),
                    'ourblog'       => esc_html__( 'News Section', 'bovity' )


                ),
        ) ) );
}
	add_action( 'customize_register', 'avata_customize_register' );
endif;


function avadanta_inline_css3(){
$theme = wp_get_theme();

$custom_css      = '';

if ( 'Bovity Corporate' == $theme->name){

$avadanta_color_scheme1 = get_theme_mod( 'avadanta_slider_opacity_section', '0.65' );
$avadanta_slider_background = get_theme_mod( 'avadanta_slider_background', 'linear-gradient(to right, #1A2C79 30%, rgba(26, 44, 121, 0.18) 100%);' );
$custom_css      .= '.slider-item:before{
	opacity: ' . esc_attr( $avadanta_color_scheme1) . '; 
	background:' . esc_attr( $avadanta_slider_background) . ';}';
}

else{
$avadanta_color_scheme1 = get_theme_mod( 'avadanta_slider_opacity_section', '0.15' );
$avadanta_slider_background = get_theme_mod( 'avadanta_slider_background', '#000' );
$custom_css      .= '.slider-item:before{
    opacity: ' . esc_attr( $avadanta_color_scheme1) . '; 
    background-color:' . esc_attr( $avadanta_slider_background) . ';}';


}
    wp_add_inline_style( 'bovity-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'avadanta_inline_css3' );