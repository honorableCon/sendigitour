<?php
/**
 * Services Section
 */
if ( ! function_exists( 'avata_avadanta_service' ) ) :

	function avata_avadanta_service() {

		$home_service_section_enabled = get_theme_mod('home_service_section_enabled','on');
		$home_service_section_title = get_theme_mod('home_service_section_title',__('Our World Class Services','avadanta'));
		$home_service_section_discription = get_theme_mod('home_service_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.','avadanta'));
		$avadanta_service_content  = get_theme_mod( 'avadanta_service_content',avata_avadanta_get_service_default());
		$theme = wp_get_theme();
		if ( 'Avadanta Consulting' == $theme->name ){
		$service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg.png');
    } elseif('Avadanta Corporate' == $theme->name) {

    $service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg1.jpg');

    } elseif( 'Avadanta' == $theme->name ){

    	    $service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg.jpg');

    }

    elseif( 'Avadanta Agency' == $theme->name ){

    	    $service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg1.jpg');

    }

        elseif( 'Avadanta Business' == $theme->name ){

    	    $service_background_image = get_theme_mod('service_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/ser-bg.png');

    }
		$section_is_empty = empty( $avadanta_service_content ) && empty( $home_service_section_discription ) && empty( $home_service_section_title );
		if($home_service_section_enabled !='off')
     {	
		?>
	<div class="section section-x section-block tc-light srvc">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="section-head">
						<h5 class="heading-xs dash dash-both"><?php echo esc_html($home_service_section_title); ?></h5>
						<h2><?php echo esc_html($home_service_section_discription); ?></h2>
					</div>
					<?php
						avata_avadanta_service_content( $avadanta_service_content );
						?>
				</div><!-- .col -->
			</div><!-- .row -->
			
		</div>
		<div class="bg-image bg-fixed">
			<img src="<?php echo esc_url($service_background_image); ?>" alt="">
		</div>
	</div>
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
			echo '<div class="row gutter-vr-40px">';
			foreach ( $avadanta_service_content as $service_item ) :
				$icon = ! empty( $service_item->icon_value ) ?  $service_item->icon_value : '';
				$image = ! empty( $service_item->image_url ) ?  $service_item->image_url: '';
				$title = ! empty( $service_item->title ) ? $service_item->title : '';
				$text = ! empty( $service_item->text ) ?  $service_item->text : '';
				$link = ! empty( $service_item->link ) ? $service_item->link : '';
				$color = ! empty( $service_item->color ) ? $service_item->color : '';
				$choice = ! empty( $service_item->choice ) ? $service_item->choice : 'customizer_repeater_icon';
				$open_new_tab = ! empty( $service_item->open_new_tab ) ? $service_item->open_new_tab : 'no';

					 $avadanta_col_layout = get_theme_mod( 'avadanta_service_col_layout','4');

				
				?>
							<div class="col-sm-<?php echo $avadanta_col_layout ?>">
								<div class="feature">
									<div class="feature-icon feature-icon-s2">
										<em class="fa <?php echo esc_html( $icon ); ?>"></em>
									</div>
									<div class="feature-content feature-content-s4">
										<a href="<?php echo esc_url($link); ?>" target="<?php if(!empty($open_new_tab)){ ?> _blank <?php }?>" ><h4><?php echo esc_html( $title ); ?></h4></a>
										<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
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