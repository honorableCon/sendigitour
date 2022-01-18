<?php
/**
 * Callout Section
 */
if ( ! function_exists( 'avata_avadanta_callout' ) ) :
function avata_avadanta_callout() {

$avadanta_callout_enable = get_theme_mod('avadanta_callout_enable','on');
if($avadanta_callout_enable !='off')
{ 

$callout_title_one = get_theme_mod('callout_title_one','Any Plan to Start a Business
');
$callout_title_two = get_theme_mod('callout_title_two','Join our community by using our services and grow your business locally & worldwide
');
$callout_title_button = get_theme_mod('callout_title_button','Contact Us');
$callout_title_url = get_theme_mod('callout_title_url','#');
$callout_button_newtab = get_theme_mod('callout_button_newtab','');


?>


      <section class="cta-sec">
                <div class="container">
                    <div class="text-center">
                        <?php if(!empty($callout_title_one)) { ?>
                        <span class="sub-title"><?php echo esc_html($callout_title_one); ?></span>
                        <?php }  if(!empty($callout_title_two)) { ?>
                        <h2 class="main-title white-color"><?php echo esc_html($callout_title_two); ?></h2>
                    <?php } ?>
                        <div class="btn-area">
                            <a href="<?php echo esc_url($callout_title_url); ?>" class="app-btn" target="<?php if(!empty($callout_button_newtab)){ ?> _blank <?php }?>"><?php echo esc_html($callout_title_button);  ?></a>
                        </div>
                    </div>
                </div>
            </section>
<?php
}
}
endif;
	if ( function_exists( 'avata_avadanta_callout' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_callout' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_callout', absint( $section_priority ) );
}