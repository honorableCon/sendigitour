<?php
/**
 * Testimonial Section
 */
if ( ! function_exists( 'avata_avadanta_testimonial' ) ) :

	function avata_avadanta_testimonial() {

		$home_testimonial_section_enabled = get_theme_mod('testimonial_section_enable','on');
		$testimonial_options = get_theme_mod('avadanta_testimonial_content',avata_avadanta_get_testimonial_default());
		if($home_testimonial_section_enabled !='off')

     {
		?>
		<!-- code -->
		          <div class="client-area pt-100 pb-70">
            <div class="container">
               
					<?php
						$home_testimonial_section_title = get_theme_mod('home_testimonial_section_title',__('Client Feedback','avadanta'));
						$home_testimonial_section_subtitle = get_theme_mod('home_testimonial_section_subtitle',__('What People and Clients Think About Us?','avadanta'));
						?>
                     <div class="section-title text-center">
                    <span><?php echo esc_html($home_testimonial_section_title); ?></span>
                    <h2 class="margin-auto"><?php echo esc_html($home_testimonial_section_subtitle); ?></h2>
                </div>
			
 <div class="client-slider owl-carousel owl-theme">
					<?php $testimonial_options = json_decode($testimonial_options);
								if( $testimonial_options!='' )
								{
								foreach($testimonial_options as $testimonial_item){
							
								$title    = ! empty( $testimonial_item->title ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->title, 'Team section' ) : '';
								 $subtitle    = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->subtitle, 'Team section' ) : '';
								  $text    = ! empty( $testimonial_item->text ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->text, 'Team section' ) : '';
								 $image    = ! empty( $testimonial_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->image_url, 'Team section' ) : '';
								 ?>

                    <div class="client-item">
                        <div class="client-img">
                             <img src="<?php echo esc_url($image); ?>" alt="">
                        </div>
                        <div class="client-text">
                            <h3><?php echo esc_html($title); ?></h3>
                            <span><?php echo esc_html($subtitle); ?></span>
                        </div>
                        <div class="content">
                            <p><i class="bx bxs-quote-alt-left quote-icon-left"></i>
                               <?php echo esc_html($text); ?>
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div>

                 
				  
				  <?php } } ?>
		</div>		 		
</div>
</div>
	<?php	
} }
endif;
if ( function_exists( 'avata_avadanta_testimonial' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_testimonial' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_testimonial', absint( $section_priority ) );
}