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
            <div class="gallery-area pt-100 pb-70">
                <div class="container">
	
                    <div class="section-title text-center">
                    	<?php if(!empty ($home_portfolio_section_title)) { ?>
                        <span><?php echo esc_html($home_portfolio_section_title); ?></span>
                        <?php } if(!empty($home_portfolio_section_subtitle)) { ?>
                        <h2 class="margin-auto"><?php echo esc_html($home_portfolio_section_subtitle); ?></h2>
                    <?php } ?>
                    </div>

                <div class="gallery-view pt-45">
                    <div class="row">
				<?php $portfolio_options = json_decode($portfolio_options);
				if( $portfolio_options!='' )
				{
				foreach($portfolio_options as $portfolio_item){
			
				$title    = ! empty( $portfolio_item->title ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->title, 'Portffolio section' ) : '';
				 $image    = ! empty( $portfolio_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->image_url, 'Portffolio section' ) : '';
				 $link = ! empty( $portfolio_item->link ) ? $portfolio_item->link : '';

 				 $avadanta_port_col_layout = get_theme_mod( 'avadanta_portfolio_col_layout','4');
				 ?>

                          <div class="col-lg-<?php echo $avadanta_port_col_layout ?> col-sm-6">
                            <div class="single-gallery">
                                <img src="<?php echo esc_url($image) ?>">
                                <a href="<?php echo esc_url($image) ?>" class="single-icon">
                                    <i class='fa fa-plus'></i>
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