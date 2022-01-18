<?php
/**
 * Slider Section
 */
if ( ! function_exists( 'avata_avadanta_slider' ) ) :

    function avata_avadanta_slider() {

        $avadanta_slider_options = get_theme_mod('avadanta_slider_content',avata_avadanta_get_slider_default());
        $home_slider_section_enabled = get_theme_mod('home_slider_section_enabled','on');
        $avadanta_slider_opacity_section = get_theme_mod('avadanta_slider_opacity_section','0.15');
        $count=1;
        if($home_slider_section_enabled !='off')
     {  
        ?>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <?php $avadanta_slider_options = json_decode($avadanta_slider_options);
                    if( $avadanta_slider_options!='' )
                    {
                    foreach($avadanta_slider_options as $slider_item){
                    $title    = ! empty( $slider_item->title ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->title, 'slider section' ) : '';
                     $text    = ! empty( $slider_item->text ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->text, 'slider section' ) : '';
                     $image    = ! empty( $slider_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->image_url, 'slider section' ) : '';
                    $link     = ! empty( $slider_item->link ) ? apply_filters( 'avadanta_translate_single_string', $slider_item->link, 'slider section' ) : '';


                     ?>
                    <div class="home-slider carousel-item <?php if($count==1){ ?>active <?php }?>">
                      <img src="<?php echo esc_url($image); ?>" class="d-block w-100" alt="...">
                      <div class="container">
                        <div class="slider-caption d-md-block">
                            <div class="slider-description">
                                <h3><?php echo esc_html($title); ?></h3>
                                <h1 class="slider-title"><?php echo esc_html($text); ?> </h1>
                            </div>
                            <div class="slider-bottom">
                                <ul>
                                    <li><a href="<?php echo esc_url($link); ?>" class="slider-btn banner-style"><?php echo esc_html__('Discover More','techzilla'); ?></a></li>
                                </ul>
                            </div>
                        </div>
                      </div>
                    </div>
                    
                   <?php
                        $count++;
                    } } ?>


                </div>

              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo esc_html__('Previous','techzilla'); ?></span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only"><?php echo esc_html__('Next','techzilla'); ?></span>
              </a>
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
    $section_priority = apply_filters( 'avadanta_section_priority',  'avata_avadanta_slider' );
    add_action( 'avata_avadanta_sections', 'avata_avadanta_slider', absint( $section_priority ) );
}

