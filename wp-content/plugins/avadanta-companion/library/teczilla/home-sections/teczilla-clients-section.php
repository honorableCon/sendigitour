<?php
/**
 * Team Section
 */
if ( ! function_exists( 'avata_avadanta_clients' ) ) :

	function avata_avadanta_clients() {

		$clients_options = get_theme_mod('avadanta_clients_content',avata_avadanta_get_clients_default());
		$clients_section_enable = get_theme_mod('clients_section_enable','on');
		if($clients_section_enable !='off')
		{
		?>
            <div class="tec-partner gray-bg pt-70 pb-98 md-pb-80">
                <div class="container">
                    <div class="tec-carousel-2 owl-carousel" data-loop="true" data-items="4" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="3" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-md-device-nav="false" data-md-device-dots="false">
				<?php 
					$clients_options = json_decode($clients_options);
					if( $clients_options!='' )
					{
					foreach($clients_options as $clients_item){
					 $image    = ! empty( $clients_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $clients_item->image_url, 'Portffolio section' ) : '';
					 ?>
			 		<div class="partner-item">
                            <a href="#"><img src="<?php echo esc_url($image) ?>" alt=""></a>
                    </div>
			<?php
					}
					
				}
			?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
<?php	
} 
}
endif;
if ( function_exists( 'avata_avadanta_clients' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority',  'avata_avadanta_clients' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_clients', absint( $section_priority ) );
}