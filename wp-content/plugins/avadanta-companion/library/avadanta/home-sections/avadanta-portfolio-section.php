<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_portfolio' ) ) :
function avata_avadanta_portfolio() {

$portfolio_options = get_theme_mod('avadanta_portfolio_content',avata_avadanta_get_portfolio_default());
$portfolio_section_enable = get_theme_mod('portfolio_section_enable','on');
$home_portfolio_section_title= get_theme_mod('home_portfolio_section_title','Our Company Portfolio');
$home_portfolio_section_discription= get_theme_mod('home_portfolio_section_discription','Lorem ipsum dolor sit amet, consectetur adipisicing elit.');

if($portfolio_section_enable !='off')
{
 ?>
<div class="section section-x section-project pb-0 tc-grey-alt" id="project">
	<?php if(!empty ($home_portfolio_section_title)): ?>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-7 text-center">
					<div class="section-head">
						<h5 class="heading-xs dash dash-both"><?php echo esc_html($home_portfolio_section_title); ?></h5>
						<h2><?php echo esc_html($home_portfolio_section_discription); ?></h2>
					</div>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
<?php endif; ?>
		<div class="project-area bg-secondary">
			<div class="row project project-v5 no-gutters" id="project1">
				<?php $portfolio_options = json_decode($portfolio_options);
				if( $portfolio_options!='' )
				{
				foreach($portfolio_options as $portfolio_item){
			
				$title    = ! empty( $portfolio_item->title ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->title, 'Portffolio section' ) : '';
				 $image    = ! empty( $portfolio_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $portfolio_item->image_url, 'Portffolio section' ) : '';
				 $link = ! empty( $portfolio_item->link ) ? $portfolio_item->link : '';

 				 $avadanta_port_col_layout = get_theme_mod( 'avadanta_portfolio_col_layout','3');
				 ?>
				<div class="col-sm-6 col-xl-<?php echo $avadanta_port_col_layout ?> filtr-item" data-category="1">
						<div class="project-item">
						<a href="<?php echo esc_url($image) ?>" class="zoom port-anchor" rel="gal">
							<i class="fa fa-plus" aria-hidden="true"></i></a>
							<div class="project-image">
								<img src="<?php echo esc_url($image) ?>" alt="">
							</div>
							<div class="project-over">
								<div class="project-content">
									<a href="<?php echo esc_url($link); ?>"><h4><?php echo esc_html($title); ?> </h4></a>
								</div>	
							</div>
						</div>
				</div><!-- .col -->
		<?php } } ?>
			</div><!-- .row -->
			
		</div><!-- .project-area -->
	</div>

	<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_portfolio' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_portfolio' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_portfolio', absint( $section_priority ) );
}