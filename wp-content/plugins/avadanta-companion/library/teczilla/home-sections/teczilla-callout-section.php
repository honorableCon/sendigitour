<?php
/**
 * Callout Section
 */
if ( ! function_exists( 'avata_avadanta_callout' ) ) :
function avata_avadanta_callout() {

$avadanta_callout_enable = get_theme_mod('avadanta_callout_enable','on');
if($avadanta_callout_enable !='off')
{ 

$callout_background_image = get_theme_mod('callout_background_image',AVATA_PLUGIN_URL .'library/teczilla/assets/images/callout.jpg');
$callout_title_one = get_theme_mod('callout_title_one','Lets Change the world we all together
');
$callout_title_two = get_theme_mod('callout_title_two','These cases are
perfectly simple and easy to distinguish
');

$callout_title_button = get_theme_mod('callout_title_button','Contact Us');
$callout_title_url = get_theme_mod('callout_title_url','#');
$callout_button_newtab = get_theme_mod('callout_button_newtab','');


?>


			<div class="tec-cta bg21 pt-100 pb-100 md-pt-68 md-pb-80">
                <div class="container">
                    <div class="sec-title text-center">
                    	<?php if(!empty($callout_title_one)) { ?>
                        <div class="sub-title modify white"><?php echo esc_html($callout_title_one); ?></div>
                    <?php }  if(!empty($callout_title_two)) { ?>
                        <h2 class="title3 white-color"><?php echo esc_html($callout_title_two); ?></h2>
                        <?php } ?>
                        <div class="btn-part">
                            <?php if(!empty($callout_title_button)) { ?>
								<a href="<?php echo esc_url($callout_title_url); ?>" class="readon banner-style" target="<?php if(!empty($callout_button_newtab)){ ?> _blank <?php }?>"><?php echo esc_html($callout_title_button); ?></a>
								<?php } ?>
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