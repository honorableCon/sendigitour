<?php
/**
 * About Section
 */
if ( ! function_exists( 'avata_avadanta_about' ) ) :
function avata_avadanta_about() {
$about_section_enable = get_theme_mod('about_section_enable','on');


		$home_about_section_title = get_theme_mod('home_about_section_title',__('We help clients to create Digital amazing experience.
','avadanta'));

        $home_about_section_subtitle = get_theme_mod('home_about_section_subtitle','We can help you to unlock opportunity by creating human-centered products.
');        
		$home_about_section_discription = get_theme_mod('home_about_section_discription','Our designers and engineers know collaboration is the essence of any project. It’s a simple philosophy we followed for nearly two decades. And it delivers results.');
        $theme = wp_get_theme();
        if ( 'Avadanta Consulting' == $theme->name ){
        $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/avadanta/assets/images/about-consult.jpg');
    } elseif('Avadanta' == $theme->name) {

        $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/avadanta/assets/images/about-us.jpg');

    }
    elseif('Avadanta Corporate' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/avadanta/assets/images/about-corpo.jpg');
    }

        elseif('Avadanta Agency' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/avadanta/assets/images/about-agency.jpg');
    }

            elseif('Avadanta Business' == $theme->name){

            $home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/avadanta/assets/images/about-corpo.jpg');
    }


        $home_about_section_btn = get_theme_mod('home_about_section_btn',__('About Us','avadanta'));
        $home_about_section_btnurl = get_theme_mod('home_about_section_btnurl',__('#','avadanta'));

if($about_section_enable !='off')
{
 ?>
    <div class="section section-x tc-grey abut">
        <div class="container">
            <div class="row justify-content-between align-items-center gutter-vr-30px">
                <div class="col-xl-7 col-lg-6">
                <?php if($home_about_thumb) : ?>
                    <div class="image-block">
                        <img src="<?php echo $home_about_thumb; ?>" alt="">
                    </div>
                     <?php endif; ?>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="text-block text-box-ml mtm-15">
                        <h2><?php echo esc_html($home_about_section_title); ?></h2>
                        <p class="lead"><?php echo esc_html($home_about_section_subtitle); ?></p>
                        <p><?php echo esc_html($home_about_section_discription); ?></p>
                        <a href="<?php echo esc_url($home_about_section_btnurl); ?>" class="btn"><?php echo esc_html($home_about_section_btn); ?></a>
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