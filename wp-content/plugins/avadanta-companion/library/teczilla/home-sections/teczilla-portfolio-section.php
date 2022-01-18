<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_portfolio' ) ) :
function avata_avadanta_portfolio() {

$portfolio_options = get_theme_mod('avadanta_portfolio_content',avata_avadanta_get_portfolio_default());
$portfolio_section_enable = get_theme_mod('portfolio_section_enable','on');
$home_portfolio_section_title= get_theme_mod('home_portfolio_section_title','Our Company Portfolio');
$home_portfolio_section_subtitle= get_theme_mod('home_portfolio_section_subtitle','Our Company Portfolio');
$home_portfolio_section_discription= get_theme_mod('home_portfolio_section_discription','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.');

if($portfolio_section_enable !='off')
{
 ?>
            <div class="tec-portfolio style3 pt-100 pb-70 md-pt-80 md-pb-50">
                <div class="container">
	<?php if(!empty ($home_portfolio_section_title)): ?>
		  <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-left">
                            <div class="sub-title primary"><?php echo esc_html($home_portfolio_section_title); ?></div>
                            <h2 class="title mb-0"><?php echo esc_html($home_portfolio_section_subtitle); ?></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50"><?php echo esc_html($home_portfolio_section_discription); ?></p>
                        </div>
                    </div>
<?php endif; ?>
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

				      <div class="col-lg-<?php echo $avadanta_port_col_layout ?> col-md-6 mb-30">
                            <div class="portfolio-item">
                                <div class="image-part">
                                    <img src="<?php echo esc_url($image) ?>" alt="">
                                </div>
                                <div class="content-part">
                                    <div class="middle">
                                        <span class="categories"><a href="#"><i class="fa fa-2x fa-plus"></i></a></span>
                                        <h4 class="title"><a href="<?php echo esc_url($link); ?>"><?php echo esc_html($title) ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
				
		<?php } } ?>
			</div><!-- .row -->
			
	</div>
</div>
	<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_portfolio' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_portfolio' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_portfolio', absint( $section_priority ) );
}