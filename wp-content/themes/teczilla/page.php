<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package avadanta
 */
get_header();

$teczilla_header_show_single_page =  get_theme_mod( 'teczilla_header_show_single_page', 0 );
if($teczilla_header_show_single_page==0){
teczilla_breadcrumbs();
}
?>
            <div class="tec-blog inner pt-100 pb-100 md-pt-80 md-pb-80">
                <div class="container">                  
                    <div class="row">				
			<?php 
				$teczilla_page_temp_layout =  get_theme_mod( 'teczilla_page_temp_layout', 'rightsidebar' ) ;
				
				if ( $teczilla_page_temp_layout == "leftsidebar" ) {
					get_sidebar();
					$teczilla_page_float = 8;
				} elseif ( $teczilla_page_temp_layout == "fullwidth" ) {
					$teczilla_page_float = 12;
				} elseif ( $teczilla_page_temp_layout == "rightsidebar" ) {
					$teczilla_page_float = 8;
				} else {
					$teczilla_page_temp_layout = "rightsidebar";
					$teczilla_page_float = 8;
				} 
			?>
			<div class="col-md-<?php echo $teczilla_page_float ; ?>">
					<?php if ( have_posts() ) :

						 while ( have_posts() ) : the_post(); 

						   get_template_part( 'template-parts/content-page'); 

							endwhile; 

							else :

						   get_template_part( 'template-parts/content', 'none' ); 

					     endif; ?>

			</div>
           <?php if ( $teczilla_page_temp_layout == "rightsidebar" ) {
			get_sidebar(); } ?>
        </div>
	</div>
</div>
<?php get_footer();?>