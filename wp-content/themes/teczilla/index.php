<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Teczilla
 */
 
get_header();

$teczilla_header_show_blog =  get_theme_mod( 'teczilla_header_show_blog', 0 );
if($teczilla_header_show_blog==0){
teczilla_breadcrumbs();
}
?>
            <div class="tec-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">
                  
                    <div class="row">				

			<?php $teczilla_blog_layout =  get_theme_mod( 'teczilla_blog_temp_layout', 'rightsidebar' );
			
			if ( $teczilla_blog_layout == "leftsidebar" ) {
				get_sidebar();
				$teczilla_float = 8;
			} elseif ( $teczilla_blog_layout == "fullwidth" ) {
				$teczilla_float = 12;
			} elseif ( $teczilla_blog_layout == "rightsidebar" ) {
				$teczilla_float = 8;
			} else {
				$teczilla_blog_layout = "rightsidebar";
				$teczilla_float = 8;
			} ?>

			<div class="col-md-<?php echo  $teczilla_float; ?>">
					<?php
						if ( have_posts() ) :

							if ( ! is_home() && is_front_page() ) :
								?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
							endif;

							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
								get_template_part( 'template-parts/content', get_post_type() );

								endwhile; 
								else :
								get_template_part( 'template-parts/content', 'none' );
								endif; 
						?>
					<?php the_posts_pagination(); ?>
                </div>
                <?php if ( $teczilla_blog_layout == "rightsidebar" ) {
			get_sidebar(); } ?>
            </div>
        </div>
    </div>
<?php get_footer();?>