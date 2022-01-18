<?php
/**
 * Team Section
 */
if ( ! function_exists( 'avata_avadanta_clients' ) ) :

	function avata_avadanta_clients() {

		$clients_section_enable = get_theme_mod('clients_section_enable','on');
		$contact_title = get_theme_mod('contact_title','Locate Us');
		$contact_cont = get_theme_mod('contact_cont','Find on Google Map');
		$phone_title = get_theme_mod('phone_title','Emergency Call
');
		$contact_phone = get_theme_mod('contact_phone','+590 1234 567 890');
		$address_title = get_theme_mod('address_title','Contact Us
');
		$contact_address = get_theme_mod('contact_address','Send Us Email

');
		if($clients_section_enable !='off')
		{


		?>
  <section class="address-sec">
                <div class="container">
                    <div class="row">
                    	<?php if($contact_title!=="" || $contact_cont!=="") { ?>
                        <div class="col-md-4 p-0">
                            <div class="address-info text-center bg-one">
                                <div class="icon-box">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <span><?php echo esc_html($contact_title); ?></span>
                                <p><?php echo esc_html($contact_cont); ?></p>
                            </div>
                        </div>
                    <?php } if($phone_title!=="" || $contact_phone!=="") {?>
                        <div class="col-md-4 p-0">
                            <div class="address-info text-center bg-two">
                                <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span><?php echo esc_html($phone_title); ?></span>
                                <p><?php echo esc_html($contact_phone); ?></p>
                            </div>
                        </div>
                        <?php } if($address_title!=="" || $contact_address!=="") {?>
                        <div class="col-md-4 p-0">
                            <div class="address-info text-center bg-one">
                                <div class="icon-box">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <span><?php echo esc_html($address_title); ?></span>
                                <p><?php echo esc_html($contact_address); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
                </div>
            </section>
<?php	
} 
}
endif;
if ( function_exists( 'avata_avadanta_clients' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_clients' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_clients', absint( $section_priority ) );
}