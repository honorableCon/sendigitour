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
	<div class="section section-logo bg-secondary">
		<div class="container">
			<div class="row justify-content-center justify-content-md-between gutter-vr-30px">
				<?php $clients_options = json_decode($clients_options);
					if( $clients_options!='' )
					{
					foreach($clients_options as $clients_item){
				
					 $image    = ! empty( $clients_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $clients_item->image_url, 'Portffolio section' ) : '';

					 ?>
				<div class="col-sm-3 col-md-2 col-5">
					<div class="logo-item">
						<img src="<?php echo esc_url($image) ?>" alt="">
					</div>
				</div><!-- .col -->
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
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_clients' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_clients', absint( $section_priority ) );
}