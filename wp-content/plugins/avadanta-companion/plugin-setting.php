<?php
function avata_activate() {
	$theme = wp_get_theme();
	

	if ( 'Avadanta' == $theme->name || 'Avadanta Business' == $theme->name || 'Avadanta Consulting' == $theme->name || 'Avadanta Corporate' == $theme->name || 'Avadanta Agency' == $theme->name){
		
		require_once('library/avadanta/customizer-sections/customizer-slider-section.php');
		require_once('library/avadanta/customizer-sections/customizer-about-section.php');	
		require_once('library/avadanta/customizer-sections/customizer-service-section.php');
		require_once('library/avadanta/customizer-sections/customizer-portfolio-section.php');
		require_once('library/avadanta/customizer-sections/customizer-team-section.php');
		require_once('library/avadanta/customizer-sections/customizer-testimonial-section.php');
		require_once('library/avadanta/customizer-sections/customizer-callout-section.php');
		require_once('library/avadanta/customizer-sections/customizer-news-section.php');
		require_once('library/avadanta/customizer-sections/customizer-clients-section.php');
		require_once('library/avadanta/home-sections/avadanta-slider-section.php');

		$section_order = get_theme_mod( 'avadanta_homepage_section_order_list' );

		if( empty( $section_order ) ) {

		    $avadanta_home_section_order = array(

	                            'aboutus',
	                            'features',
	                            'gallery',
	                            'ourteam',
	                            'testimonial',                                    
	                            'cta',
	                            'ourblog',
	                            'courses',
		                        );
		} else {
		    $save_section_order = explode( ',' , $section_order);

		    $section_order_pop = array_pop( $save_section_order );

		    $avadanta_home_section_order = $save_section_order;
		}

		foreach ( $avadanta_home_section_order  as $key => $value ) {  
			if( $value == 'aboutus' ) {
			require_once('library/avadanta/home-sections/avadanta-about-section.php');
			}
			if( $value == 'features' ) {
			require_once('library/avadanta/home-sections/avadanta-service-section.php');
			}
			if( $value == 'gallery' ) {	
			require_once('library/avadanta/home-sections/avadanta-portfolio-section.php');
			}
			if( $value == 'ourteam' ) {
			require_once('library/avadanta/home-sections/avadanta-team-section.php');
			}
			if( $value == 'testimonial' ) {
			require_once('library/avadanta/home-sections/avadanta-testimonial-section.php');
			}
			if( $value == 'cta' ) {
			require_once('library/avadanta/home-sections/avadanta-callout-section.php');
			}
			if( $value == 'ourblog' ) {
			require_once('library/avadanta/home-sections/avadanta-news-section.php');
			}
			if( $value == 'courses' ) {
			require_once('library/avadanta/home-sections/avadanta-clients-section.php');
			}

		}

		require_once('library/avadanta/customizer.php');

		if('Avadanta Business' == $theme->name)
		{	
		require_once('library/avadanta/default-data-business.php');
		}
		elseif('Avadanta' == $theme->name){
			require_once('library/avadanta/default-data.php');
		}
		elseif('Avadanta Consulting' == $theme->name) {
		require_once('library/avadanta/default-data-consulting.php');
		}
		elseif('Avadanta Agency' == $theme->name){
		require_once('library/avadanta/default-data-agency.php');
		}
		elseif('Avadanta Corporate' == $theme->name){
		require_once('library/avadanta/default-data-corpo.php');
		}
		
	}

elseif ( 'Teczilla' == $theme->name || 'Teczilla Consulting' == $theme->name || 'Teczilla Business' == $theme->name || 'Teczilla Agency' == $theme->name || 'Teczilla Corporate' == $theme->name || 'Teczilla startup' == $theme->name || 'Teczilla Finance' == $theme->name || 'Teczilla Dark' == $theme->name || 'Teczilla Creative' == $theme->name || 'Teczilla Trading' == $theme->name || 'Teczilla Portfolio' == $theme->name || 'Teczilla Organization' == $theme->name ){
		
		

		require_once('library/teczilla/customizer-sections/customizer-slider-section.php');
		require_once('library/teczilla/customizer-sections/customizer-about-section.php');	
		require_once('library/teczilla/customizer-sections/customizer-service-section.php');
		require_once('library/teczilla/customizer-sections/customizer-callout-section.php');
		require_once('library/teczilla/customizer-sections/customizer-portfolio-section.php');
		require_once('library/teczilla/customizer-sections/customizer-testimonial-section.php');
		require_once('library/teczilla/customizer-sections/customizer-team-section.php');
		require_once('library/teczilla/customizer-sections/customizer-news-section.php');
		require_once('library/teczilla/customizer-sections/customizer-clients-section.php');
		require_once('library/teczilla/home-sections/teczilla-slider-section.php');


		$tec_section_order = get_theme_mod( 'teczilla_homepage_section_order_list' );

		if( empty( $tec_section_order ) ) {
		if ( 'Teczilla Creative' == $theme->name || 'Teczilla Portfolio' == $theme->name ){

		    $teczilla_home_section_order = array(

									'features',
		                            'aboutus',
		                            'cta',
		                            'gallery',
		                            'testimonial',                                    
		                            'ourteam',
		                            'ourblog',
		                          	'courses',
		                        );

			} else {

		    $teczilla_home_section_order = array(


		                            'aboutus',
		                            'features',
		                            'cta',
		                            'gallery',
		                            'testimonial',                                    
		                            'ourteam',
		                            'ourblog',
		                          	'courses',
		                        );	
}

		} else {
		    $tec_save_section_order = explode( ',' , $tec_section_order);

		    $tec_section_order_pop = array_pop( $tec_save_section_order );

		    $teczilla_home_section_order = $tec_save_section_order;
		}

		foreach ( $teczilla_home_section_order  as $key => $value ) {  
			if( $value == 'aboutus' ) {
			require_once('library/teczilla/home-sections/teczilla-about-section.php');
			}
			if( $value == 'features' ) {
			require_once('library/teczilla/home-sections/teczilla-service-section.php');
			}
			if( $value == 'cta' ) {
			require_once('library/teczilla/home-sections/teczilla-callout-section.php');
			}
			if( $value == 'gallery' ) {	
			require_once('library/teczilla/home-sections/teczilla-portfolio-section.php');
			}
			if( $value == 'testimonial' ) {
			require_once('library/teczilla/home-sections/teczilla-testimonial-section.php');
			}
			if( $value == 'ourteam' ) {
			require_once('library/teczilla/home-sections/teczilla-team-section.php');
			}
			if( $value == 'ourblog' ) {
			require_once('library/teczilla/home-sections/teczilla-news-section.php');
			}
			if( $value == 'courses' ) {
			require_once('library/teczilla/home-sections/teczilla-clients-section.php');
			}

		}


		require_once('library/teczilla/customizer.php');
		if('Teczilla' == $theme->name || 'Teczilla Consulting' == $theme->name)
		{	
		require_once('library/teczilla/default-data.php');
		}
		elseif('Teczilla Business' == $theme->name){
			require_once('library/teczilla/default-data2.php');
		}
		elseif('Teczilla Agency' == $theme->name){

			require_once('library/teczilla/default-data3.php');
		}
		elseif('Teczilla Corporate' == $theme->name){

			require_once('library/teczilla/default-data3.php');
		}
		elseif('Teczilla startup' == $theme->name){

			require_once('library/teczilla/default-data4.php');
		}
		elseif('Teczilla Finance' == $theme->name){

			require_once('library/teczilla/default-data5.php');
		}
			elseif('Teczilla Dark' == $theme->name){

			require_once('library/teczilla/default-data6.php');
		}

		elseif('Teczilla Creative' == $theme->name){

			require_once('library/teczilla/default-data7.php');
		}

			elseif('Teczilla Trading' == $theme->name){

			require_once('library/teczilla/default-data8.php');
		}

			elseif('Teczilla Portfolio' == $theme->name){

			require_once('library/teczilla/default-data8.php');
		}
		elseif('Teczilla Organization' == $theme->name){

			require_once('library/teczilla/default-data8.php');
		}	
	}

	if ( 'Bovity' == $theme->name || 'Bovity Corporate' == $theme->name){
		

		require_once('library/bovity/customizer-sections/customizer-slider-section.php');
		require_once('library/bovity/customizer-sections/customizer-about-section.php');	
		require_once('library/bovity/customizer-sections/customizer-service-section.php');
		require_once('library/bovity/customizer-sections/customizer-portfolio-section.php');
		require_once('library/bovity/customizer-sections/customizer-testimonial-section.php');
		require_once('library/bovity/customizer-sections/customizer-team-section.php');
		require_once('library/bovity/customizer-sections/customizer-callout-section.php');
		require_once('library/bovity/customizer-sections/customizer-news-section.php');
		require_once('library/bovity/home-sections/bovity-slider-section.php');


		$bovity_section_order = get_theme_mod( 'bovity_homepage_section_order_list' );

		if( empty( $bovity_section_order ) ) {

		    $bovity_home_section_order = array(
		                           	'aboutus',
		                            'features',
		                            'gallery',
		                          	'testimonial',
		                           	'ourteam',                                    
		                            'cta',
		                            'ourblog',
		                        );
		} else {
		    $bovity_save_section_order = explode( ',' , $bovity_section_order);

		    $bov_section_order_pop = array_pop( $bovity_save_section_order );

		    $bovity_home_section_order = $bovity_save_section_order;
		}

		foreach ( $bovity_home_section_order  as $key => $value ) {  
			if( $value == 'aboutus' ) {
			require_once('library/bovity/home-sections/bovity-about-section.php');
			}
			if( $value == 'features' ) {
			require_once('library/bovity/home-sections/bovity-service-section.php');
			}
			if( $value == 'cta' ) {
			require_once('library/bovity/home-sections/bovity-callout-section.php');
			}
			if( $value == 'gallery' ) {	
			require_once('library/bovity/home-sections/bovity-portfolio-section.php');

			}
			if( $value == 'testimonial' ) {
			require_once('library/bovity/home-sections/bovity-testimonial-section.php');
			}

			if( $value == 'ourteam' ) {
			require_once('library/bovity/home-sections/bovity-team-section.php');
			}
			if( $value == 'ourblog' ) {
			require_once('library/bovity/home-sections/bovity-news-section.php');
			}
		}


		require_once('library/bovity/customizer.php');
		require_once('library/bovity/default-data.php');
	}

	if ( 'Vesta' == $theme->name){
		
		
		require_once('library/vesta/customizer-sections/customizer-slider-section.php');
		require_once('library/vesta/customizer-sections/customizer-about-section.php');	
		require_once('library/vesta/customizer-sections/customizer-service-section.php');
		require_once('library/vesta/customizer-sections/customizer-portfolio-section.php');
		require_once('library/vesta/customizer-sections/customizer-testimonial-section.php');
		require_once('library/vesta/customizer-sections/customizer-team-section.php');
		require_once('library/vesta/customizer-sections/customizer-callout-section.php');
		require_once('library/vesta/customizer-sections/customizer-news-section.php');
		require_once('library/vesta/customizer-sections/customizer-clients-section.php');
		require_once('library/vesta/home-sections/vesta-slider-section.php');


		$vesta_section_order = get_theme_mod( 'vesta_homepage_section_order_list' );

		if( empty( $vesta_section_order ) ) {

		    $vesta_home_section_order = array(
		                           	'aboutus',
		                            'features',
		                            'gallery',
		                          	'testimonial',
		                           	'ourteam',                                    
		                            'cta',
		                            'ourblog',
		                        );
		} else {
		    $vesta_save_section_order = explode( ',' , $vesta_section_order);

		    $bov_section_order_pop = array_pop( $vesta_save_section_order );

		    $vesta_home_section_order = $vesta_save_section_order;
		}

		foreach ( $vesta_home_section_order  as $key => $value ) {  
			if( $value == 'aboutus' ) {
			require_once('library/vesta/home-sections/vesta-about-section.php');
			}
			if( $value == 'features' ) {
			require_once('library/vesta/home-sections/vesta-service-section.php');
			}
			if( $value == 'cta' ) {
			require_once('library/vesta/home-sections/vesta-callout-section.php');
			}
			if( $value == 'gallery' ) {	
			require_once('library/vesta/home-sections/vesta-portfolio-section.php');

			}
			if( $value == 'testimonial' ) {
			require_once('library/vesta/home-sections/vesta-testimonial-section.php');
			}

			if( $value == 'ourteam' ) {
			require_once('library/vesta/home-sections/vesta-team-section.php');
			}
			if( $value == 'ourblog' ) {
			require_once('library/vesta/home-sections/vesta-news-section.php');
			}
			}
			
			require_once('library/vesta/home-sections/vesta-clients-section.php');
			


		require_once('library/vesta/customizer.php');
		require_once('library/vesta/default-data.php');
	}
}
add_action( 'init', 'avata_activate' );