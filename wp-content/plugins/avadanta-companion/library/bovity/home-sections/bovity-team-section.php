<?php
/**
 * Team Section
 */
if ( ! function_exists( 'avata_avadanta_team' ) ) :

	function avata_avadanta_team() {
		$home_team_section_enabled = get_theme_mod('team_section_enable','on');
		$team_options = get_theme_mod('avadanta_team_content',avata_avadanta_get_team_default());
		

            $home_team_section_title = get_theme_mod('home_team_section_title',__('Expert People','avadanta'));
            $home_team_section_subtitle = get_theme_mod('home_team_section_subtitle',__('We Have a Professional Consulting Team','avadanta'));
            $avadanta_team_col_layout= get_theme_mod('avadanta_team_col_layout',3);
         
        if($home_team_section_enabled !='off')
     {
		?>
  <div class="team-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12">
                        <div class="team-title">
                            <div class="section-title text-center">
                                <span><?php echo esc_html($home_team_section_title); ?></span>
                                <h2><?php echo esc_html($home_team_section_subtitle); ?></h2>
                            </div>
                            
                        </div>
                    </div>             				
					

                   					<?php $team_options = json_decode($team_options);
					if( $team_options!='' )
					{
					foreach($team_options as $team_item){
				
					$title    = ! empty( $team_item->title ) ? apply_filters( 'avadanta_translate_single_string', $team_item->title, 'Team section' ) : '';
					 $subtitle    = ! empty( $team_item->subtitle ) ? apply_filters( 'avadanta_translate_single_string', $team_item->subtitle, 'Team section' ) : '';
					 $image    = ! empty( $team_item->image_url ) ? apply_filters( 'avadanta_translate_single_string', $team_item->image_url, 'Team section' ) : '';
					$link     = ! empty( $team_item->link ) ? apply_filters( 'avadanta_translate_single_string', $team_item->link, 'Team section' ) : '';

					 ?>

                     <div class="col-lg-<?php echo $avadanta_team_col_layout; ?> col-md-6">
                        <div class="team-card">
                            <?php if(!empty($image)) { ?>
                            <a> 
                                <img src="<?php echo esc_url($image); ?>" alt="Team Image">
                            </a>
                        <?php } ?>
                            <div class="team-content">
                                <a>
                                    <h3><?php echo esc_html( $title ); ?></h3>
                                </a>
                                <span><?php echo esc_html( $subtitle ); ?></span>
                                
                            </div>
                            <?php 
                            if ( ! empty( $team_item->social_repeater ) ) :
                            $icons         = html_entity_decode( $team_item->social_repeater );
                            $icons_decoded = json_decode( $icons, true );
                            if ( ! empty( $icons_decoded ) ) : ?>
                            <ul class="team-social">
                                    <?php
                                    foreach ( $icons_decoded as $value ) {
                                        $social_icon = ! empty( $value['icon'] ) ? apply_filters( 'avadanta_translate_single_string', $value['icon'], 'Team section' ) : '';
                                        $social_link = ! empty( $value['link'] ) ? apply_filters( 'avadanta_translate_single_string', $value['link'], 'Team section' ) : '';
                                        if ( ! empty( $social_icon ) ) {
                                        ?>
                                <li>
                                    <a class="color-dark-red" href="<?php echo esc_url($social_link); ?>" target="_blank">
                                        <i class='fa <?php echo esc_attr( $social_icon ); ?>'></i>
                                    </a>
                                </li>
                                <?php } }?>
                            </ul>
                              <?php endif;
                                            endif;?>
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