<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_news' ) ) :
function avata_avadanta_news() {

$latest_news_section_enable = get_theme_mod('latest_news_section_enable','on');
if($latest_news_section_enable !='off')
{

            $home_news_section_title = get_theme_mod('home_news_section_title',__('News And Updates
','avadanta'));
            $home_news_section_subtitle = get_theme_mod('home_news_section_subtitle',__('Lets Checkout our All Latest News
','avadanta'));
             $home_news_section_description = get_theme_mod('home_news_section_description',__('Lorem ipsum is simply dummy text of the printing and typesetting industry.','avadanta'));
            $num_post_page = get_theme_mod('num_post_page','3');

        ?>

        <section class="blog-sec ptb-100">
            <div class="container">                	  
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="common-sec-heading">
                            <span><?php echo esc_html($home_news_section_title); ?></span>
                            <h2 class="section-title mb-30"><?php echo esc_html($home_news_section_subtitle); ?></h2>
                            <p class="description"><?php echo esc_html($home_news_section_description); ?></p>
                        </div>
                    </div>
                </div>

                <div class="row mt-50">
				<?php 
						$args = array( 'post_type' => 'post','posts_per_page' => $num_post_page,'post__not_in'=>get_option("sticky_posts")) ;
							query_posts( $args );
						if(query_posts( $args ))
						{	
							while(have_posts()):the_post();
						{ 
					?>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-card">
                            <?php if(has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                            <?php endif; ?>

                            <div class="blog-content">
                               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <span class="date">
                                        <?php echo get_the_date(); ?>
                                    </span>
                            </div>
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
	$section_priority = apply_filters( 'avadanta_section_priority', 'avata_avadanta_news' );
	add_action( 'avata_avadanta_sections', 'avata_avadanta_news', absint( $section_priority ) );
}