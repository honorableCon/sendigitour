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
            $num_post_page = get_theme_mod('num_post_page','3');

        ?>

        <section class="blog-area pt-100 pb-70">
            <div class="container">                	  
                <div class="section-title text-center">
                    <span><?php echo esc_html($home_news_section_title); ?></span>
                    <h2 class="margin-auto"><?php echo esc_html($home_news_section_subtitle); ?></h2>
                </div>

                <div class="row pt-45">
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
                                <ul>
                                    <li>
                                        <i class='fa fa-clock-o'></i>
                                        <?php echo esc_html(get_the_date()); ?>
                                    </li>
                                    <li>/</li>
                                    <li>
                                        <i class='fa fa-user-o'></i>
                                        <?php the_author(); ?>
                                    </li>
                                </ul>
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <a href="<?php the_permalink(); ?>" class="more-blog">
                                    <i class="fa fa-long-arrow-right"></i>
                                   <?php echo esc_html__('Read More','bovity'); ?>
                                </a>
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