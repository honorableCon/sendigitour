<?php
/**
 * Team Section
 */
if ( ! function_exists( 'avata_avadanta_team' ) ) :

	function avata_avadanta_team() {
		$home_team_section_enabled = get_theme_mod('team_section_enable','on');
		$team_options = get_theme_mod('avadanta_team_content',avata_avadanta_get_team_default());
		

            $home_team_section_title = get_theme_mod('home_team_section_title',__('Our Team','avadanta'));
            $home_team_section_subtitle = get_theme_mod('home_team_section_subtitle',__('Meet Our Team Members','avadanta'));
            $home_team_section_discription = get_theme_mod('home_team_section_discription',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.','avadanta'));
            if($home_team_section_enabled !='off')
                        
     {
		?>
            <div class="tec-team inner slider1 pt-92 pb-92 md-pt-72 md-pb-50">
                <div class="container">
                	      <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-left">
                            <div class="sub-title primary"><?php echo esc_html($home_team_section_title); ?></div>
                            <h2 class="title mb-0"><?php echo esc_html($home_team_section_subtitle); ?></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50"><?php echo esc_html($home_team_section_discription); ?></p>
                        </div>
                    </div>
                				
					

                    <div class="tec-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-lg-device="3" data-md-device-nav="false" data-md-device-dots="false">					
                    <?php $team_options = json_decode($team_options);
					if( $team_options!='' )
					{
					foreach($team_options as $team_item){
				
					$title    = ! empty( $team_item->title ) ? apply_filters( 'avadanta_translate_single_string', $team_item->title, 'Team section' ) : '';
					 $subtitle    = ! empty( $team_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					 $image    = ! empty( $team_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$link     = ! empty( $team_item->link ) ? apply_filters( 'avadanta_translate_single_string', $team_item->link, 'Team section' ) : '';

					 ?>
					 <div class="team-item">
					 	<?php if(!empty($image)) { ?>
                            <div class="team-image">
                                <img src="<?php echo esc_url($image); ?>" alt="Team Image">
                            </div>
                            <?php } ?>
                            <div class="text-bottom">
                                <h3 class="person-name"><a href="#"><?php echo esc_html( $title ); ?></a></h3>
                                <span class="designation"><?php echo esc_html( $subtitle ); ?></span>
                                <div class="team-social">
                                		<?php 
										if ( ! empty( $team_item->social_repeater ) ) :
										$icons         = html_entity_decode( $team_item->social_repeater );
										$icons_decoded = json_decode( $icons, true );
										if ( ! empty( $icons_decoded ) ) : ?>
                                    <ul>
                                    	<?php
									foreach ( $icons_decoded as $value ) {
										$social_icon = ! empty( $value['icon'] ) ? apply_filters( 'avadanta_translate_single_string', $value['icon'], 'Team section' ) : '';
										$social_link = ! empty( $value['link'] ) ? apply_filters( 'avadanta_translate_single_string', $value['link'], 'Team section' ) : '';
										if ( ! empty( $social_icon ) ) {
										?>
									<li><a href="<?php echo esc_url($social_link); ?>"><i class="fa fa <?php echo esc_attr( $social_icon ); ?>"></i></a></li>
								<?php } }?>
                                    </ul>
                                    <?php endif;
											endif;?>
                                </div>
                            </div>
                        </div>
	
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