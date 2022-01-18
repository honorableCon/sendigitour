<?php
/**
 * About Section
 */
if ( ! function_exists( 'avata_avadanta_about' ) ) :
function avata_avadanta_about() {
$about_section_enable = get_theme_mod('about_section_enable','on');


		$home_about_section_title = get_theme_mod('home_about_section_title',__('Who we are
','avadanta'));

        $home_about_section_subtitle = get_theme_mod('home_about_section_subtitle','We can help you to unlock opportunity by creating human-centered products.
');        
		$home_about_section_discription = get_theme_mod('home_about_section_discription','Our designers and engineers know collaboration is the essence of any project. It’s a simple philosophy we followed for nearly two decades. And it delivers results.');
        
        $theme = wp_get_theme();
        if ( 'Avadanta Agency' == $theme->name ){

		$home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/teczilla/assets/images/about-agency.jpg');
        
        } elseif('Teczilla startup' == $theme->name || 'Teczilla Trading' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/teczilla/assets/images/us.jpg');
        } 

        elseif('Teczilla Finance' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/teczilla/assets/images/finance-us.jpg');
        }

        elseif('Teczilla Dark' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/teczilla/assets/images/about-dark.jpg');
        }
        else{

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/teczilla/assets/images/about-us.jpg');
        }

        $home_about_section_btn = get_theme_mod('home_about_section_btn',__('About Us','avadanta'));
        $home_about_section_btnurl = get_theme_mod('home_about_section_btnurl',__('#','avadanta'));

if($about_section_enable !='off')
{
 ?>

           <div class="tec-about inner pt-100 lg-pt-92 md-pt-80 pb-100 md-pb-80">
                <div class="container">
                    <div class="row y-middle mb-64 lg-mb-30 md-mb-0">
                        <div class="col-lg-6 md-mb-95">
                             <?php if($home_about_thumb) : ?>
                            <div class="image-part">
                                <img src="<?php echo $home_about_thumb; ?>" alt="">
                            </div>
                             <?php endif; ?>
                        </div>
                        <div class="col-lg-6 pl-50 md-pl-15 pr-50 lg-pr-15">
                            <div class="sec-title mb-25">
                                <div class="sub-title primary"><?php echo esc_html($home_about_section_title); ?></div>
                                <h2 class="title mb-18"><?php echo esc_html($home_about_section_subtitle); ?></h2>
                                <div class="desc mb-18"><?php echo esc_html($home_about_section_discription); ?></div>
                            </div>
                            
                            <div class="btn-part">
                                <a class="readon" href="<?php echo esc_url($home_about_section_btnurl); ?>"><?php echo esc_html($home_about_section_btn); ?></a>
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