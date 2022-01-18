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

		         <div id="tec-services" class="tec-services style2 gray-bg2 pt-100 pb-70 md-pt-80 md-pb-50 sm-pt-72">
                <div class="container">
		<?php
		$theme = wp_get_theme();
  		if ( 'Teczilla Agency' == $theme->name || 'Teczilla Corporate' == $theme->name || 'Teczilla startup' == $theme->name || 'Teczilla Finance' == $theme->name || 'Teczilla Dark' == $theme->name ){
  			?>

                	<div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-left">
                            <div class="sub-title primary"><?php echo esc_html($home_service_section_title); ?></div>
                            <h2 class="title mb-0"><?php echo esc_html($home_service_section_subtitle); ?></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50"><?php echo esc_html($home_service_section_discription); ?></p>
                        </div>
                    </div>
                	<?php

                	    }
						avata_avadanta_service_content( $avadanta_service_content );
						?>
                    
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
			echo '<div class="row gutter-20">';
			foreach ( $avadanta_service_content as $service_item ) :
				$icon = ! empty( $service_item->icon_value ) ?  $service_item->icon_value : '';
				$image = ! empty( $service_item->image_url ) ?  $service_item->image_url: '';
				$title = ! empty( $service_item->title ) ? $service_item->title : '';
				$text = ! empty( $service_item->text ) ?  $service_item->text : '';
				$link = ! empty( $service_item->link ) ? $service_item->link : '';
				$color = ! empty( $service_item->color ) ? $service_item->color : '';
				$choice = ! empty( $service_item->choice ) ? $service_item->choice : 'customizer_repeater_image';
				$open_new_tab = ! empty( $service_item->open_new_tab ) ? $service_item->open_new_tab : 'no';

					 $avadanta_col_layout = get_theme_mod( 'avadanta_service_col_layout','4');

				
				?>

				<div class="col-lg-<?php echo $avadanta_col_layout ?> col-md-6 mb-30">
                            <div class="service-wrap">
                            <?php if($choice == 'customizer_repeater_image'){ ?>	
								<?php if ( ! empty( $image ) ) : ?>
								<div class="image-part">
                                <img src="<?php echo esc_url($image); ?>" alt="banner">
                                <?php endif; ?>
                                </div>
							<?php } ?>

						<?php if($choice == 'customizer_repeater_icon'){ ?>
						<?php if ( ! empty( $icon ) ) :?>
						<div class="image-part">
			                    <i class="fa <?php echo esc_html($icon); ?>"></i>
                                <?php endif; ?>
                                </div>
						<?php }  
						$theme = wp_get_theme();  if('Teczilla Creative' == $theme->name) {?>
                                <div class="content-part text-left ">
                                    <h3 class="title"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h3>
                                    <div class="desc"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></div>
                                </div>
                            <?php } else {?>
                            	<div class="content-part text-center ">
                                    <h3 class="title"><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a></h3>
                                    <div class="desc"><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></div>
                                </div>
                            <?php } ?>
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