<?php
if( ! function_exists( 'avadanta_custom_typography_css' ) ):
    function avadanta_custom_typography_css() {
    
	$teczilla_typography_show = get_theme_mod('teczilla_show_typography', 0);
    If($teczilla_typography_show == 1):
        
        $teczilla_custom_css1 = '';
		if(get_theme_mod('teczilla_typography_base_font_family') != null):
			$teczilla_custom_css1 .="body { font-family: " .esc_attr( get_theme_mod('teczilla_typography_base_font_family') )." !important; }\n";
        endif;
    
        wp_add_inline_style( 'teczilla-style', $teczilla_custom_css1 );
		
		endif;
    }
endif;
add_action( 'wp_enqueue_scripts', 'avadanta_custom_typography_css' );