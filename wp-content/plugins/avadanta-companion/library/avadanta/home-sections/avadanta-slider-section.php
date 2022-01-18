<?php
/**
 * Slider Section
 */
if ( ! function_exists( 'avata_avadanta_slider' ) ) :

    function avata_avadanta_slider() {

        $avadanta_slider_options = get_theme_mod('avadanta_slider_content',avata_avadanta_get_slider_default());
        $home_slider_section_enabled = get_theme_mod('home_slider_section_enabled','on');
        $avadanta_slider_opacity_section = get_theme_mod('avadanta_slider_opacity_section','0.95');

        if($home_slider_section_enabled !='off')
     {  
        ?>
			<div class="banner banner-s4 has-slider main-top-slide">
				<div class="has-carousel" data-effect="true" data-items="1" data-loop="true" data-dots="false" data-auto="true" data-navs="true">
                <?php $avadanta_slider_options = json_decode($avadanta_slider_options);
                    if( $avadanta_slider_options!='' )
                    {
                    foreach($avadanta_slider_options as $slider_item){
                
                    $title    = ! empty( $slider_item->title ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->title, 'slider section' ) : '';
                     $text    = ! empty( $slider_item->text ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->text, 'slider section' ) : '';
                     $image    = ! empty( $slider_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->image_url, 'slider section' ) : '';
                    $link     = ! empty( $slider_item->link ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->link, 'slider section' ) : '';

                     ?>
                    <div class="banner-block tc-light d-flex">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-xl-8 m-auto">
                                    <div class="banner-content">
                                        <h1 class="banner-heading animate t-u" data-animate="fade-in-up" data-delay="0.5" data-duration="0.5"><?php echo esc_html($title); ?></h1>
                                        <p class="lead lead-lg animate" data-animate="fade-in-up" data-delay="0.12" data-duration="0.5"><?php echo esc_html($text); ?></p>
                                        <div class="banner-btn animate" data-animate="fade-in-up" data-delay="0.20" data-duration="0.9">
                                            <a href="<?php echo esc_url($link); ?>"  class="menu-link btn"><?php echo esc_html__('Check Out Our Work','avadanta'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- bg -->
                        <div class="bg-image change-bg">
                            <img src="<?php echo esc_url($image); ?>" alt="banner">
                        </div>
                        <!-- end bg -->
                    </div>
                   <?php } } ?>
                </div>
              
			</div>
            <?php }

        else 
{
?>


<?php
}
         }
endif;

if ( function_exists( 'avata_avadanta_slider' ) ) {
    $section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_slider' );
    add_action( 'avata_avadanta_sections', 'avata_avadanta_slider', absint( $section_priority ) );
}

