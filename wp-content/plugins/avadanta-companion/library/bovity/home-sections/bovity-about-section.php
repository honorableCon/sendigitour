<?php
/**
 * About Section
 */
if ( ! function_exists( 'avata_avadanta_about' ) ) :
function avata_avadanta_about() {
$about_section_enable = get_theme_mod('about_section_enable','on');


		$home_about_section_title = get_theme_mod('home_about_section_title','Welcome');

        $home_about_section_subtitle = get_theme_mod('home_about_section_subtitle','We Are Here to Increase Your Knowledge With Experience.
');        
		$home_about_section_discription = get_theme_mod('home_about_section_discription','Our designers and engineers know collaboration is the essence of any project. It’s a simple philosophy we followed for nearly two decades. And it delivers results.');
        
		$home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/bovity/assets/images/about-us.png');

        $home_about_section_btn = get_theme_mod('home_about_section_btn',__('About Us','avadanta'));
        $home_about_section_btnurl = get_theme_mod('home_about_section_btnurl',__('#','avadanta'));

if($about_section_enable !='off')
{
 ?>

              <div class="offer-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="offer-item">
                            <div class="section-title">
                                <span><?php echo esc_html($home_about_section_title); ?></span>
                                <h2><?php echo esc_html($home_about_section_subtitle); ?></h2>
                                <p class="pb-4">
                                   <?php echo esc_html($home_about_section_discription); ?>
                                </p>
                                <a href="<?php echo esc_url($home_about_section_btnurl); ?>" class="default-btn default-bg-white border-btn">
                                    <?php echo esc_html($home_about_section_btn); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-6">
                        <div class="offer-img">
                            <div class="images-offer">
                                <img src="<?php echo $home_about_thumb; ?>">
                            </div>
                        </div>
                       
                    </div> 
                </div>
            </div>
        </div>

<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_about' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_about' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_about', absint( $section_priority ) );
}