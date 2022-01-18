<?php
/**
 *Template Name: Full Width Template
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package teczilla
 */
get_header();

$teczilla_header_show_single_page =  get_theme_mod( 'teczilla_header_show_single_page', 0 );
if($teczilla_header_show_single_page==0)
{
teczilla_breadcrumbs();
}
?>
<div class="section blog section-xx">
	<div class="container">
		<div class="row gutter-vr-40px">
			<div class="col-md-12">
				<div class="row">
					<?php if ( have_posts() ) :

						 while ( have_posts() ) : the_post(); 

						   get_template_part( 'template-parts/content-page'); 

							endwhile; 

							else :

						   get_template_part( 'template-parts/content', 'none' ); 

					     endif; ?>

				</div>
			</div>
        </div>
	</div>
</div>
<?php get_footer();?>