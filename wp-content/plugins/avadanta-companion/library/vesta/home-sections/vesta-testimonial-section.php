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
   			<section class="testimonial-sec ptb-100">
                <div class="container">
               
					<?php
						$home_testimonial_section_title = get_theme_mod('home_testimonial_section_title',__('How We Vesta','avadanta'));
						$home_testimonial_section_subtitle = get_theme_mod('home_testimonial_section_subtitle',__('What People and Clients Think About Us?','avadanta'));
						$home_testimonial_section_description = get_theme_mod('home_testimonial_section_description',__('Lorem ipsum is simply dummy text of the printing and typesetting industry.','avadanta'));

						
						?>
				<div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                    	<div class="common-sec-heading">
                    	<span><?php echo esc_html($home_testimonial_section_title); ?></span>
                    	<h2 class="section-title mb-30"><?php echo esc_html($home_testimonial_section_subtitle); ?></h2>
                    	<p class="description"><?php echo esc_html($home_testimonial_section_description); ?></p>

                	</div>
                </div>
			</div>
                     <div class="row mt-100">
                         <div class="col-md-12">
                         	<div id="testimonial-slider" class="owl-carousel owl-theme"> 
					<?php $testimonial_options = json_decode($testimonial_options);
								if( $testimonial_options!='' )
								{
								foreach($testimonial_options as $testimonial_item){
							
								$title    = ! empty( $testimonial_item->title ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->title, 'Team section' ) : '';
								 $subtitle    = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->subtitle, 'Team section' ) : '';
								  $text    = ! empty( $testimonial_item->text ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->text, 'Team section' ) : '';
								 $image    = ! empty( $testimonial_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->image_url, 'Team section' ) : '';
								 ?>

                   <div class="testimonial">
                        <div class="user-img">
                             <img src="<?php echo esc_url($image); ?>" alt="">
                        </div>
                        <p><?php echo esc_html($text); ?></p>
                       
                          <div class="testimonial-content">
                                        <div class="content">
                                            <h4 class="name"><?php echo esc_html($title); ?>, <span class="post"><?php echo esc_html($subtitle); ?></span></h4>
                                        </div>
                                    </div>
                       
                    </div>

                 
				  
				  <?php } } ?>
		</div>	
		</div>	
		</div> 		
</div>
</section>
	<?php	
} }
endif;
if ( function_exists( 'avata_avadanta_testimonial' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_testimonial' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_testimonial', absint( $section_priority ) );
}