<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_news' ) ) :
function avata_avadanta_news() {

$latest_news_section_enable = get_theme_mod('latest_news_section_enable','on');
if($latest_news_section_enable !='off')
{

            $home_news_section_title = get_theme_mod('home_news_section_title',__('OUR NEWS & BLOGS
','avadanta'));
            $home_news_section_subtitle = get_theme_mod('home_news_section_subtitle',__('Read Latest Updates


','avadanta'));
               $home_news_section_description = get_theme_mod('home_news_section_description',__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.','avadanta'));

        ?>

            <div class="tec-blog style1 pt-91 pb-92 md-pt-71 md-pb-72 sm-pb-75">
                <div class="container">
                	    <div class="sec-title style2 mb-60 md-mb-50 sm-mb-42">
                        <div class="first-half text-left">
                            <div class="sub-title primary"><?php echo esc_html($home_news_section_title); ?></div>
                            <h2 class="title mb-0"><?php echo esc_html($home_news_section_subtitle); ?></h2>
                        </div>
                        <div class="last-half">
                            <p class="desc mb-0 pr-50"><?php echo esc_html($home_news_section_description); ?></p>
                        </div>
                    </div>

                    <div class="tec-carousel owl-carousel dot-style1" data-loop="false" data-items="4" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true">
				<?php 
						$args = array( 'post_type' => 'post','posts_per_page' => '6','post__not_in'=>get_option("sticky_posts")) ;
							query_posts( $args );
						if(query_posts( $args ))
						{	
							while(have_posts()):the_post();
						{ 
					?>

					 <div class="blog-wrap">
					 	<?php if(has_post_thumbnail()) : ?>
                            <div class="img-part">
                              <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                            <div class="content-part">
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                              <?php if(get_theme_mod('blog_meta_section_enable',true)==true):?>

                                <div class="blog-meta">
                                    <div class="user-data">
                                        <i class="fa fa-user"></i>
                                        <span><?php the_author(); ?></span>
                                    </div>
                                    
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i><?php echo esc_html(get_the_date()); ?>
                                    </div>
                                
                                </div>
                                <?php endif; ?>
                            </div>
                            
                        </div>

				<?php }  endwhile; } ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div>
	<div class="clearfix"></div>
<?php } 
}
endif;
	if ( function_exists( 'avata_avadanta_news' ) ) {
	$section_priority = apply_filters( 'avadanta_section_priority',  'avata_avadanta_news' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_news', absint( $section_priority ) );
}