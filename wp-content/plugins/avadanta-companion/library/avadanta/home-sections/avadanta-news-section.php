<?php
/**
 * Portfolio Section
 */
if ( ! function_exists( 'avata_avadanta_news' ) ) :
function avata_avadanta_news() {

$latest_news_section_enable = get_theme_mod('latest_news_section_enable','on');
if($latest_news_section_enable !='off')
{
?>
	<div class="section section-x home-blog" id="blog">
		<div class="container container-lg-custom">
			<?php
			$home_news_section_title = get_theme_mod('home_news_section_title',__('Insight the story
','avadanta'));
			$home_news_section_subtitle = get_theme_mod('home_news_section_subtitle',__('Lorem ipsum dolor sit amet elit.

','avadanta'));
            if(($home_news_section_title) ) { ?>
			<div class="section-head section-md">
				<h5 class="heading-xs dash dash-both"><?php echo esc_html($home_news_section_title); ?></h5>
				    <h2><?php echo esc_html($home_news_section_subtitle); ?></h2>
			</div>
			<?php } ?>
			<div class="row gutter-vr-30px justify-content-sm-center">
				<?php 
						$args = array( 'post_type' => 'post','posts_per_page' => '3','post__not_in'=>get_option("sticky_posts")) ;
							query_posts( $args );
						if(query_posts( $args ))
						{	
							while(have_posts()):the_post();
						{ 
					?>
				<div class="col-md-12 col-lg-4">
					<div class="post post-alt d-md-flex d-lg-block align-items-md-center">
						<?php if(has_post_thumbnail()) : ?>
						<div class="post-thumb post-thumb-inline">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif; ?>
						<div class="post-content post-content-s2">
						<?php
							if(get_theme_mod('blog_meta_section_enable',true)==true):?>
						<p class="post-tag"><?php echo esc_html(get_the_date()); ?></p>
						<?php endif; ?>
							<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<?php 
							$theme = wp_get_theme();
							if('Avadanta Agency' == $theme->name){
								?>
							<div class="agency-content">
								<?php the_excerpt(); ?>
							</div>
						<?php } else {?>
							<div class="content">
								<?php the_excerpt(); ?>
							</div>
						<?php } ?>
						</div>
					</div><!-- .post -->
				</div><!-- .col -->
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