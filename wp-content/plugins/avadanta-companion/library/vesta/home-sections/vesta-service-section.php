<?php
/**
 * Services Section
 */
if ( ! function_exists( 'avata_avadanta_service' ) ) :

	function avata_avadanta_service() {

		$home_service_section_enabled = get_theme_mod('home_service_section_enabled','on');
		$home_service_section_title = get_theme_mod('home_service_section_title',__('Our World Class Services','avadanta'));
		$home_service_section_subtitle = get_theme_mod('home_service_section_subtitle',__('What We Do To Serve You Best Our Services','avadanta'));
		$home_service_section_discription = get_theme_mod('home_service_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','avadanta'));
		$avadanta_service_content  = get_theme_mod( 'avadanta_service_content',avata_avadanta_get_service_default());

		$section_is_empty = empty( $avadanta_service_content ) && empty( $home_service_section_discription ) && empty( $home_service_section_title );
		if($home_service_section_enabled !='off')
     {	
		?>
			<section class="feature-sec ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                    		<div class="common-sec-heading">
                                <span><?php echo esc_html($home_service_section_title); ?></span>
                                <h2 class="section-title mb-30"><?php echo esc_html($home_service_section_subtitle); ?></h2>
                                <p class="description"><?php echo esc_html($home_service_section_discription); ?></p>
                            </div>
                		</div>                
                		<?php
						avata_avadanta_service_content( $avadanta_service_content );
						?>
                  	</div>
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
			echo '<div class="row mt-100">';
			foreach ( $avadanta_service_content as $service_item ) :
				$text = ! empty( $service_item->text ) ?  $service_item->text : '';
				$link = ! empty( $service_item->link ) ? $service_item->link : '';
				$color = ! empty( $service_item->color ) ? $service_item->color : '';
				$choice = ! empty( $service_item->choice ) ? $service_item->choice : 'customizer_repeater_icon';
				$open_new_tab = ! empty( $service_item->open_new_tab ) ? $service_item->open_new_tab : 'no';
				$title = ! empty( $service_item->title ) ? $service_item->title : '';
				$icon = ! empty( $service_item->icon_value ) ?  $service_item->icon_value : '';
				$avadanta_col_layout = get_theme_mod( 'avadanta_service_col_layout','4');
				
				?>

                      <div class="col-lg-<?php echo $avadanta_col_layout ?> col-md-6 col-sm-12">
                         <div class="feature-box text-center">
                          	<div class="feature-icon">
                            	<i class="fa <?php echo esc_attr($icon); ?>"></i>
                        	</div>
                        
                        <div class="feature-content">
                        <a href="<?php echo esc_url($link); ?>"><h3><?php echo esc_html($title); ?></h3></a>
                        <p><?php echo esc_html($text); ?> </p>
                        </div>
                    	</div>
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