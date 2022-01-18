<?php
/**
 * Team Section
 */
if ( ! function_exists( 'avata_avadanta_team' ) ) :

	function avata_avadanta_team() {
		$home_team_section_enabled = get_theme_mod('team_section_enable','on');
		$team_options = get_theme_mod('avadanta_team_content',avata_avadanta_get_team_default());
		if($home_team_section_enabled !='off')
     {
		?>
		<div class="section section-x team bg-secondary">
			<div class="container">
				<div class="row justify-content-center">
					<?php
						$home_team_section_title = get_theme_mod('home_team_section_title',__('Meet Our Team Members','avadanta'));
						$home_team_section_discription = get_theme_mod('home_team_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit.','avadanta'));

						?>
					<div class="col-md-8 text-center">
						<div class="section-head section-md">
							<?php if(!empty($home_team_section_title)) { ?>
							<h5 class="heading-xs dash dash-both"><?php echo esc_html($home_team_section_title); ?></h5>
							<?php } if(!empty($home_team_section_discription)) { ?>
							<h2><?php echo esc_html($home_team_section_discription); ?></h2>
							<?php } ?>
						</div>
					</div>
				</div><!-- .row -->
				<div class="row justify-content-center gutter-vr-30px">
					<?php $team_options = json_decode($team_options);
					if( $team_options!='' )
					{
					foreach($team_options as $team_item){
				
					$title    = ! empty( $team_item->title ) ? apply_filters( 'avadanta_translate_single_string', $team_item->title, 'Team section' ) : '';
					 $subtitle    = ! empty( $team_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					 $image    = ! empty( $team_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$link     = ! empty( $team_item->link ) ? apply_filters( 'avadanta_translate_single_string', $team_item->link, 'Team section' ) : '';

					 $avadanta_team_col_layout = get_theme_mod( 'avadanta_team_col_layout','3');
					 ?>
					<div class="col-lg-<?php echo $avadanta_team_col_layout; ?> col-sm-5">
						<div class="team-single text-center">
							<?php if(!empty($image)) { ?>
							<div class="team-image is-shadow">
								<img src="<?php echo esc_url($image); ?>" alt="">
	
							</div>
							<?php } ?>
							<div class="team-content team-content-s2">
								<?php if(!empty($title)) { ?>
								<h5 class="team-name"><?php echo esc_html( $title ); ?></h5>
								<?php } if(!empty($subtitle)) {?>
								<p><?php echo esc_html( $subtitle ); ?></p>
								<?php } ?>
							</div>
									<?php 
										if ( ! empty( $team_item->social_repeater ) ) :
										$icons         = html_entity_decode( $team_item->social_repeater );
										$icons_decoded = json_decode( $icons, true );
										if ( ! empty( $icons_decoded ) ) : ?>
								<ul class="social">
									<?php
									foreach ( $icons_decoded as $value ) {
										$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'avadanta_translate_single_string', $value['icon'], 'Team section' ) : '';
										$social_link = ! empty( $value['link'] ) ? apply_filters( 'avadanta_translate_single_string', $value['link'], 'Team section' ) : '';
										if ( ! empty( $social_icon ) ) {
										?>
									<li><a href="<?php echo esc_url($social_link); ?>"><i class="fa fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
									<?php } } ?>
								</ul>
								<?php endif;
											endif;?>
						</div>
					</div><!-- .col -->
					<?php } } ?>
				</div><!-- .row -->
			</div><!-- .container -->
		</div>

<?php	


if(have_posts()) : 
  while(have_posts()) : the_post();
    if(get_the_content()!= "")
    {
?>
<section class="section-the-content">
    <div class="container">
        <div class="row clearfix">
            <div class="entry-content-page">
                <?php the_content(); ?> 
            </div>
        </div>
    </div>
</section>
<?php
} 
  endwhile;
endif;
wp_reset_query(); 

} }
endif;
if ( function_exists( 'avata_avadanta_team' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_team' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_team', absint( $section_priority ) );
}