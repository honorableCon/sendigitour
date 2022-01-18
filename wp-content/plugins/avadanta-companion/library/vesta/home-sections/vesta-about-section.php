<?php
/**
 * About Section
 */
if ( ! function_exists( 'avata_avadanta_about' ) ) :
function avata_avadanta_about() {

$avadanta_about_options = get_theme_mod('avadanta_about_content',avata_avadanta_get_about_faq_default());

$about_section_enable = get_theme_mod('about_section_enable','on');


		$home_about_section_title = get_theme_mod('home_about_section_title','Welcome');

        $home_about_section_subtitle = get_theme_mod('home_about_section_subtitle','We Are Here to Increase Your Knowledge With Experience.
');        
		$home_about_section_discription = get_theme_mod('home_about_section_discription','Our designers and engineers know collaboration is the essence of any project. It’s a simple philosophy we followed for nearly two decades. And it delivers results.');
        
		$home_about_thumb = get_theme_mod('home_about_thumb',AVATA_PLUGIN_URL .'library/vesta/assets/images/about-us.png');


if($about_section_enable !='off')
{
 ?>

<section class="about-sec ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="about-title">
                                    <span><?php echo esc_html($home_about_section_title); ?></span>
                                    <h2><?php echo esc_html($home_about_section_subtitle); ?></h2>
                                    <p class="pb-4">
                                       <?php echo esc_html($home_about_section_discription); ?>
                                    </p>
                            </div>
                            <div class="about-faq">
                                <div class="faq-accordion">

                                    <ul class="accordion">
                                        <?php 
                                        $avadanta_about_options = json_decode($avadanta_about_options);
                                        if( $avadanta_about_options!='' )
                                        {
                                        foreach($avadanta_about_options as $about_item){
                                        $title    = ! empty( $about_item->title ) ? apply_filters( 'avadanta_translate_single_string', $about_item->title, 'About section' ) : '';
                                         $text    = ! empty( $about_item->text ) ? apply_filters( 'avadanta_translate_single_string', $about_item->text, 'About section' ) : '';

                                         ?>
                                         <li class="accordion-item">
                                            <a class="accordion-title" href="javascript:void(0)">
                                                <i class="fa fa-chevron-down"></i>
                                                <?php echo esc_html($title); ?>
                                            </a>
            
                                            <div class="accordion-content">
                                                <p>
                                                    <?php echo esc_html($text); ?>
                                                </p>
                                            </div>
                                        </li>
                                       
                                        <?php } } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <div class="about-img mt-5">
                                <img src="<?php echo $home_about_thumb; ?>">
                            </div>
                        </div> 
                    </div>
                </div>
</section>

<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_about' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_about' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_about', absint( $section_priority ) );
}