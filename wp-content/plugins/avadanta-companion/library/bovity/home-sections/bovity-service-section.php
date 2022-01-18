<?php
/**
 * Services Section
 */
if ( ! function_exists( 'avata_avadanta_service' ) ) :

	function avata_avadanta_service() {

		$home_service_section_enabled = get_theme_mod('home_service_section_enabled','on');
		$home_service_section_title = get_theme_mod('home_service_section_title',__('Our World Class Services','avadanta'));
		$home_service_section_subtitle = get_theme_mod('home_service_section_subtitle',__('What We Do To Serve You Best Our Services','avadanta'));
		$home_service_section_discription = get_theme_mod('home_service_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.','avadanta'));
		$avadanta_service_content  = get_theme_mod( 'avadanta_service_content',avata_avadanta_get_service_default());
		$service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg.jpg');

		$section_is_empty = empty( $avadanta_service_content ) && empty( $home_service_section_discription ) && empty( $home_service_section_title );
		if($home_service_section_enabled !='off')
     {	
		?>
		   <section class="service-area pt-100">
            <div class="container">
                <div class="maintenance-text">
                    <div class="section-title text-center">
                        <span><?php echo esc_html($home_service_section_title); ?></span>
                        <h2 class="margin-auto"><?php echo esc_html($home_service_section_subtitle); ?></h2>
                    </div>
                </div>                
       
                	<?php
						avata_avadanta_service_content( $avadanta_service_content );
						?>
                  </div>
                  </section>  
               

		<?php } }
endif;

function avata_avadanta_service_content( $avadanta_service_content, $is_callback = false ) {
	if ( ! $is_callback ) {
	?>
	<?php
	}
	if ( ! empty( $avadanta_service_content ) ) :

		$allowed_html = array(
		'br'     => array(),
		'em'     => array(),
		'strong' => array(),
		'b'      => array(),
		'i'      => array(),
		);
		
		$avadanta_service_content = json_decode( $avadanta_service_content );
		if ( ! empty( $avadanta_service_content ) ) {
			$i = 1;
			echo '<div class="service-slider owl-carousel owl-theme pt-45">';
			foreach ( $avadanta_service_content as $service_item ) :
				$text = ! empty( $service_item->text ) ?  $service_item->text : '';
				$link = ! empty( $service_item->link ) ? $service_item->link : '';
				$color = ! empty( $service_item->color ) ? $service_item->color : '';
				$choice = ! empty( $service_item->choice ) ? $service_item->choice : 'customizer_repeater_icon';
				$open_new_tab = ! empty( $service_item->open_new_tab ) ? $service_item->open_new_tab : 'no';
				$title = ! empty( $service_item->title ) ? $service_item->title : '';
				$icon = ! empty( $service_item->icon_value ) ?  $service_item->icon_value : '';
				
				?>

                      <div class="service-item">
                          <div class="service-icon">
                            <i class="fa <?php echo esc_attr($icon); ?>"></i>
                        </div>
                        <a href="<?php echo esc_url($link); ?>"><h3><?php echo esc_html($title); ?></h3></a>
                        <p><?php echo esc_html($text); ?> </p>
                        <a href="<?php echo esc_url($link); ?>" class="read-more-btn">
                            <i class="fa fa-long-arrow-left"></i>
                           <?php echo esc_html__('READ MORE','bovity'); ?> 
                        </a>
                    </div>
				<?php
				
				$i++;

			endforeach;
			echo '</div>';
		}// End if().
		endif;
	if ( ! $is_callback ) {
	?>
		<?php
	}
}

if ( function_exists( 'avata_avadanta_service' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_service' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_service', absint( $section_priority ) );
}

?>