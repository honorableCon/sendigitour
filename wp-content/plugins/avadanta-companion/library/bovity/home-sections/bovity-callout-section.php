<?php
/**
 * Callout Section
 */
if ( ! function_exists( 'avata_avadanta_callout' ) ) :
function avata_avadanta_callout() {

$avadanta_callout_enable = get_theme_mod('avadanta_callout_enable','on');
if($avadanta_callout_enable !='off')
{ 

$callout_title_one = get_theme_mod('callout_title_one','Join our community by using our services and grow your business locally & worldwide
');
$callout_title_button = get_theme_mod('callout_title_button','Contact Us');
$callout_title_url = get_theme_mod('callout_title_url','#');
$callout_title_button_two = get_theme_mod('callout_title_button_two','Dial Now');
$callout_title_url_two = get_theme_mod('callout_title_url_2','#');

$callout_button_newtab = get_theme_mod('callout_button_newtab','');


?>



                    <div class="service-payment service-payment-pb">
            <div class="container-fluid">
                <div class="service-paymen-bg">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="service-payment-text">
                                <h2 class="text-center pb-3">
                                    <?php if(!empty($callout_title_one)) { ?>
                                    <?php echo esc_html($callout_title_one); ?>
                                    <?php }  if(!empty($callout_title_two)) { ?>
                                        <?php echo esc_html($callout_title_two); } ?>
                                </h2>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 text-center">

                            <div class="service-payment-btn">
                                <a href="<?php echo esc_url($callout_title_url); ?>" class="default-btn default-bg-black mr-3" target="<?php if(!empty($callout_button_newtab)){ ?> _blank <?php }?>">
                                    <?php echo esc_html($callout_title_button);  ?>
                                </a>
                                <a href="<?php echo esc_url($callout_title_url_two); ?>" class="default-btn default-bg-black" target="<?php if(!empty($callout_button_newtab)){ ?> _blank <?php }?>">
                                    <?php echo esc_html($callout_title_button_two); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
<?php
}
}
endif;
	if ( function_exists( 'avata_avadanta_callout' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_callout' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_callout', absint( $section_priority ) );
}