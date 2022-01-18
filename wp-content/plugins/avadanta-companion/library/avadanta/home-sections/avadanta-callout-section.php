<?php
/**
 * Callout Section
 */
if ( ! function_exists( 'avata_avadanta_callout' ) ) :
function avata_avadanta_callout() {

$avadanta_callout_enable = get_theme_mod('avadanta_callout_enable','on');
if($avadanta_callout_enable !='off')
{ 

$callout_background_image = get_theme_mod('callout_background_image',AVATA_PLUGIN_URL .'library/avadanta/assets/images/callout.jpg');
$callout_title_one = get_theme_mod('callout_title_one','Lets Change the world we all together
');
$callout_title_button = get_theme_mod('callout_title_button','Contact Us');
$callout_title_url = get_theme_mod('callout_title_url','#');
$callout_button_newtab = get_theme_mod('callout_button_newtab','');


?>
			<div class="project-area project-call section-m bg-dark-s2 tc-light">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="d-lg-flex text-center text-lg-left align-items-center justify-content-between">
								<?php if(!empty($callout_title_one)) { ?>
								<h2 class="fw-4"><?php echo esc_html($callout_title_one); ?></h2>
								<?php } ?>
								<?php if(!empty($callout_title_button)) { ?>
								<a href="<?php echo esc_url($callout_title_url); ?>" class="btn btn-sm" target="<?php if(!empty($callout_button_newtab)){ ?> _blank <?php }?>"><?php echo esc_html($callout_title_button); ?></a>
								<?php } ?>
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