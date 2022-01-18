<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_portfolio' ) ) :
function avata_avadanta_portfolio() {

$portfolio_options = get_theme_mod('avadanta_portfolio_content',avata_avadanta_get_portfolio_default());
$portfolio_section_enable = get_theme_mod('portfolio_section_enable','on');
$home_portfolio_section_title= get_theme_mod('home_portfolio_section_title','OUR PORTFOLIO');
$home_portfolio_section_subtitle= get_theme_mod('home_portfolio_section_subtitle','Our Network & Industry Experience are Unmatched');
if($portfolio_section_enable !='off')
{
 ?>
            <section class="service-sec ptb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">	
                            <div class="common-sec-heading">
		                    	<?php if(!empty ($home_portfolio_section_title)) { ?>
		                        <span><?php echo esc_html($home_portfolio_section_title); ?></span>
		                        <?php } if(!empty($home_portfolio_section_subtitle)) { ?>
		                        <h2 class="margin-auto"><?php echo esc_html($home_portfolio_section_subtitle); ?></h2>
		                    	<?php } ?>
                    		</div>
						</div>
					</div>
                <div class="row mt-100">
                    <div class="service-slider owl-carousel owl-theme">
						<?php $portfolio_options = json_decode($portfolio_options);
						if( $portfolio_options!='' )
						{
						foreach($portfolio_options as $portfolio_item){
					
						$title    = ! empty( $portfolio_item->title ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->title, 'Portffolio section' ) : '';
						 $image    = ! empty( $portfolio_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->image_url, 'Portffolio section' ) : '';
						 $link = ! empty( $portfolio_item->link ) ? $portfolio_item->link : '';

                     	$text    = ! empty( $portfolio_item->text ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->text, 'Portffolio section' ) : '';

						 ?>
						<div class="service-card">
							<img src="<?php echo esc_url($image) ?>">
							<div class="service-content">
                                    <a href="<?php echo esc_url($link); ?>">
                                        <h3><?php echo esc_html($title); ?></h3>
                                    </a>
                                    <p><?php echo esc_html($text); ?></p>

                                   <a href="<?php echo esc_url($image) ?>" data-gall="portfolioGallery" class="venobox" title="Project-1" class="more-service">
                                   	    <?php echo esc_html__('View Project','vesta'); ?> <i class="fa fa-plus"></i>
                                    </a>
                            </div>
                    	</div>
				
		<?php } } ?>
				</div><!-- .row -->
			</div>
	</div>
</div>
	<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_portfolio' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_portfolio' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_portfolio', absint( $section_priority ) );
}