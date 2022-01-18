<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Teczilla
 */
get_header();

$teczilla_header_show_single_blog =  get_theme_mod( 'teczilla_header_show_single_blog', 0 );
if($teczilla_header_show_single_blog==0){
teczilla_breadcrumbs();
}
?>

            <div class="tec-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">                  
                    <div class="row">				
			<?php $teczilla_single_blog_layout = sanitize_text_field( get_theme_mod( 'teczilla_single_blog_temp_layout', 'rightsidebar' ) );
			if ( $teczilla_single_blog_layout == "leftsidebar" ) {
				get_sidebar();
				$teczilla_single_float = 8;
			} elseif ( $teczilla_single_blog_layout == "fullwidth" ) {
				$teczilla_single_float = 12;
			} elseif ( $teczilla_single_blog_layout == "rightsidebar" ) {
				$teczilla_single_float = 8;
			} else {
				$teczilla_single_blog_layout = "rightsidebar";
				$teczilla_single_float = 8;
			} ?>
			<div class="col-md-<?php echo intval( $teczilla_single_float ); ?>">
					<?php if ( have_posts() ) :

						 while ( have_posts() ) : the_post(); 

						   get_template_part( 'template-parts/content-single'); 

							endwhile; 

							else :

						   get_template_part( 'template-parts/content', 'none' ); 

					     endif; ?>

			</div>
           <?php if ( $teczilla_single_blog_layout == "rightsidebar" ) {
			get_sidebar(); } ?>
        </div>
	</div>
</div>
<?php get_footer();?>