<?php
$teczilla_single_post_thumb =  get_theme_mod( 'teczilla_single_post_thumb', 1 );
$teczilla_single_post_meta =  get_theme_mod( 'teczilla_single_post_meta', 1 );
$teczilla_single_post_title = get_theme_mod( 'teczilla_single_post_title', 1 ); 
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="blog-wrap shadow mb-70 xs-mb-50">
  <?php if(has_post_thumbnail()) : ?>
    <div class="image-part">
    <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>
    <div class="content-part">
       <?php 
                              the_content( sprintf(
                                wp_kses(
                                  /* translators: %s: Name of current post. Only visible to screen readers */
                                  __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'teczilla' ),
                                  array(
                                        'span' => array(
                                          'class' => array(),
                                        ),
                                      )
                                    ),
                                        get_the_title()
                                      ) );

                                      wp_link_pages( array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'teczilla' ),
                                        'after'  => '</ div>',
                                      ) );
                                  ?>                         
    </div>
</div>
          </div>
<?php 

  if ( comments_open() || get_comments_number() ) :
      comments_template();
  endif; 
?>