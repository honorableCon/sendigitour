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
	<div class="testimonial-section pb-0 pt-0">
		<!-- code -->
		<div class="section section-l bg-dark tc-bunker avadanta-tesimonial">
			<div class="container">
					<?php
						$home_testimonial_section_title = get_theme_mod('home_testimonial_section_title',__('Our Testimonial','avadanta'));
						$home_testimonial_section_subtitle = get_theme_mod('home_testimonial_section_subtitle',__('What Clients Says About Us','avadanta'));

						$home_testimonial_section_discription = get_theme_mod('home_testimonial_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.
','avadanta'));



						?>
			<div class="row justify-content-center">
				<div class="col-xl-7 text-center">
					<div class="section-head">
						<h5 class="heading-xs dash dash-both"><?php echo esc_html($home_testimonial_section_title); ?></h5>
						<h2><?php echo esc_html($home_testimonial_section_discription); ?></h2>
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
				
				<div class="slider testimo">
					<?php $testimonial_options = json_decode($testimonial_options);
								if( $testimonial_options!='' )
								{
								foreach($testimonial_options as $testimonial_item){
							
								$title    = ! empty( $testimonial_item->title ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->title, 'Team section' ) : '';
								 $subtitle    = ! empty( $testimonial_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->subtitle, 'Team section' ) : '';
								  $text    = ! empty( $testimonial_item->text ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->text, 'Team section' ) : '';
								 $image    = ! empty( $testimonial_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $testimonial_item->image_url, 'Team section' ) : '';
								 ?>
				    <div class="tes">
							<div class="tes-content tes-content-s2 tes-bg">
								<p><?php echo esc_html($text); ?> </p>
								<div class="tes-author d-flex align-items-center">
									<div class="author-image">
										<img src="<?php echo esc_url($image); ?>" alt="">
									</div>
									<div class="author-con author-con-s2">
										<h6 class="author-name t-u"><?php echo esc_html($title); ?></h6>
										<p class="tc-light"><?php echo esc_html($subtitle); ?></p>
									</div>
								</div>
							</div>
							
						</div><!-- .tes-block -->
				  
				  <?php } } ?>
				 
				</div>
			</div><!-- .container -->
			<!-- bg -->
			
			<!-- .bg -->
		</div>
		<!-- end code -->
	</div>
	<?php	
} }
endif;
if ( function_exists( 'avata_avadanta_testimonial' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_testimonial' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_testimonial', absint( $section_priority ) );
}