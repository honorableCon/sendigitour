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
}
	add_action( 'customize_register', 'avata_customize_register' );
endif;



function avadanta_inline_css2(){
$theme = wp_get_theme();

$custom_css      = '';
if ( 'Avadanta Business' == $theme->name){

$avadanta_color_scheme2 = get_theme_mod( 'avadanta_slider_opacity_section', '0.85' );
$avadanta_slider_background2 = get_theme_mod( 'avadanta_slider_background', '#141414' );
$custom_css      .= '.banner-s4 .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_color_scheme2) . '; 
	background:' . esc_attr( $avadanta_slider_background2) . ';}';

	$avadanta_service_opacity_section1 = get_theme_mod( 'avadanta_service_opacity_section', '0.80' );
$avadanta_service_background1 = get_theme_mod( 'avadanta_service_background', '#141414' );
$custom_css      .= '.srvc .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_service_opacity_section1) . '; 
	background:' . esc_attr( $avadanta_service_background1) . ';}';

} elseif('Avadanta Consulting' == $theme->name) {

	$avadanta_color_scheme2 = get_theme_mod( 'avadanta_slider_opacity_section', '0.72' );
$avadanta_slider_background2 = get_theme_mod( 'avadanta_slider_background', '#141414' );
$custom_css      .= '.banner-s4 .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_color_scheme2) . '; 
	background:' . esc_attr( $avadanta_slider_background2) . ';}';

	$avadanta_service_opacity_section1 = get_theme_mod( 'avadanta_service_opacity_section', '0.50' );
$avadanta_service_background1 = get_theme_mod( 'avadanta_service_background', '#141414' );
$custom_css      .= '.srvc .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_service_opacity_section1) . '; 
	background:' . esc_attr( $avadanta_service_background1) . ';}';
} 

elseif('Avadanta Corporate' == $theme->name) {

	$avadanta_color_scheme2 = get_theme_mod( 'avadanta_slider_opacity_section', '0.70' );
$avadanta_slider_background2 = get_theme_mod( 'avadanta_slider_background', '#04046f' );
$custom_css      .= '.banner-s4 .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_color_scheme2) . '; 
	background:' . esc_attr( $avadanta_slider_background2) . ';}';

	$avadanta_service_opacity_section1 = get_theme_mod( 'avadanta_service_opacity_section', '0.50' );
$avadanta_service_background1 = get_theme_mod( 'avadanta_service_background', '#04046f' );
$custom_css      .= '.srvc .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_service_opacity_section1) . '; 
	background:' . esc_attr( $avadanta_service_background1) . ';}';
} elseif('Avadanta Agency' == $theme->name) {


	$avadanta_color_scheme2 = get_theme_mod( 'avadanta_slider_opacity_section', '0.70' );
$avadanta_slider_background2 = get_theme_mod( 'avadanta_slider_background', '#010101' );
$custom_css      .= '.banner-s4 .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_color_scheme2) . '; 
	background:' . esc_attr( $avadanta_slider_background2) . ';}';

	$avadanta_service_opacity_section1 = get_theme_mod( 'avadanta_service_opacity_section', '0.50' );
$avadanta_service_background1 = get_theme_mod( 'avadanta_service_background', '#38af5f' );
$custom_css      .= '.srvc .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_service_opacity_section1) . '; 
	background:' . esc_attr( $avadanta_service_background1) . ';}';


} else {

$avadanta_color_scheme1 = get_theme_mod( 'avadanta_slider_opacity_section', '0.92' );
$avadanta_slider_background = get_theme_mod( 'avadanta_slider_background', '#24243e' );
$custom_css      .= '.banner-s4 .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_color_scheme1) . '; 
	background:' . esc_attr( $avadanta_slider_background) . ';}';

$avadanta_service_opacity_section = get_theme_mod( 'avadanta_service_opacity_section', '0.80' );
$avadanta_service_background = get_theme_mod( 'avadanta_service_background', '#24243e' );
$custom_css      .= '.srvc .bg-image.overlay-fall::after{
	opacity: ' . esc_attr( $avadanta_service_opacity_section) . '; 
	background:' . esc_attr( $avadanta_service_background) . ';}';
}



$avadanta_slider_titlebg = get_theme_mod( 'avadanta_slider_titlebg', '#fff' );

$custom_css      .= '.main-top-slide .banner-heading,.main-top-slide p{
	color: ' . esc_attr( $avadanta_slider_titlebg) . ' !important; }';
    wp_add_inline_style( 'avadanta-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'avadanta_inline_css2' );