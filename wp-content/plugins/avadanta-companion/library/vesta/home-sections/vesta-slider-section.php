<?php
/**
 * Slider Section
 */
if ( ! function_exists( 'avata_avadanta_slider' ) ) :

    function avata_avadanta_slider() {

        $avadanta_slider_options = get_theme_mod('avadanta_slider_content',avata_avadanta_get_slider_default());
        $home_slider_section_enabled = get_theme_mod('home_slider_section_enabled','on');
        $avadanta_slider_opacity_section = get_theme_mod('avadanta_slider_opacity_section','0.55');
        $count=1;
        if($home_slider_section_enabled !='off')
     {  
        ?>
        <div class="home-area">
            <div class="container-fluid m-0 p-0">
                <div class="home-slider owl-carousel owl-theme">

                    <?php $avadanta_slider_options = json_decode($avadanta_slider_options);
                    if( $avadanta_slider_options!='' )
                    {
                    foreach($avadanta_slider_options as $slider_item){
                    $title    = ! empty( $slider_item->title ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->title, 'slider section' ) : '';
                     $text    = ! empty( $slider_item->text ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->text, 'slider section' ) : '';
                     $image    = ! empty( $slider_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->image_url, 'slider section' ) : '';
                    $link     = ! empty( $slider_item->link ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->link, 'slider section' ) : '';

                    $button     = ! empty( $slider_item->button_text ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->button_text, 'slider section' ) : '';
                    $subtitle    = ! empty( $slider_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->subtitle, 'slider section' ) : '';

                     ?>
                    <div class="slider-item item-bg1" style="background-image: url('<?php echo esc_url($image); ?>');">
                        <div class="slider-content banner-content">
                            <div class="container text-left">
                            <span><?php echo esc_html($subtitle); ?></span>
                            <h1><?php echo esc_html($title); ?></h1>
                            <?php if($button!=="") { ?>
                                <p><?php echo esc_html($text); ?></p>
                            <div class="slider-btn">
                                <a href="<?php echo esc_url($link); ?>" class="app-btn"><?php echo esc_html($button); ?></a>
                            </div>
                        <?php } ?>
                            </div>
                        </div>
                    </div>

                    <?php
                        $count++;
                    } } ?>                  
                </div>
            </div>
        </div>

<?php

         }
     }
endif;

if ( function_exists( 'avata_avadanta_slider' ) ) {
    $section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_slider' );
    add_action( 'avata_avadanta_sections', 'avata_avadanta_slider', absint( $section_priority ) );
}

