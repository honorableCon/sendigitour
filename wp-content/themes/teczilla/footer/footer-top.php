<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Avadanta
 */
$teczilla_top_footer_enable = get_theme_mod('teczilla_top_footer_enable',0); 

?>

      <footer id="tec-footer" class="tec-footer">
      	<?php if($teczilla_top_footer_enable==0)
		{ 
			?>
            <div class="container">
                <div class="footer-content pt-80 pb-79 md-pb-64 sm-pt-48">
                    <div class="row">
					<?php
			           $teczilla_footer_widgets_column = get_theme_mod( 'teczilla_footer_widgets_column', 'mt-column-3' );
			            if( is_active_sidebar( 'teczilla-footer-area' ) )
			          {
			           
			            echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $teczilla_footer_widgets_column ).'">';
			            dynamic_sidebar( 'teczilla-footer-area' );
			            echo '</div>';
			            }
			        ?>

			        <?php

			            if( is_active_sidebar( 'teczilla-footer-area-2' ) || $teczilla_footer_widgets_column == 'mt-column-1'){
			           
			          
			            echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $teczilla_footer_widgets_column ).'">';
			            dynamic_sidebar( 'teczilla-footer-area-2' );
			            echo '</div>';
			             }
			        ?>
			 
			        <?php
			        if( is_active_sidebar( 'teczilla-footer-area-3' ) || $teczilla_footer_widgets_column == 'mt-column-1' || $teczilla_footer_widgets_column == 'mt-column-2' ){
			          
			       
			            echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $teczilla_footer_widgets_column ).'">';
			            dynamic_sidebar( 'teczilla-footer-area-3' );
			            echo '</div>';
			             }
			    	?>

			        <?php
			        if( is_active_sidebar( 'teczilla-footer-area-4' ) || $teczilla_footer_widgets_column != 'mt-column-4'){
			            						      
			            echo '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-b-30 '.esc_attr( $teczilla_footer_widgets_column ).'">';
			            dynamic_sidebar( 'teczilla-footer-area-4' );
			            echo '</div>';
			            }
			    	?>
			</div> 
		</div>
	</div>
<?php } ?>
	<?php $teczilla_copyright_enable = get_theme_mod( 'teczilla_copyright_enable', 0 );
            if($teczilla_copyright_enable==0) : ?>
	       <div class="footer-bottom">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-12">
                            <div class="copyright text-center">
                            <?php if( get_theme_mod( 'teczilla_copyright_text' ) ) : ?>
                            <p><?php echo wp_kses_post(  get_theme_mod('teczilla_copyright_text') ); ?> </p>
                            <?php else : ?>
                            <p>
                            <?php
                            printf( __( 'Proudly powered by', 'teczilla' ) );
                            ?>

                            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'teczilla' ) ); ?>" class="imprint">
                            	
							<?php
                            printf( __( 'WordPress', 'teczilla' ) );
                            ?>
                            </a>
                            
                            </p>
                            <?php endif ; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
	</footer> 
	<?php
			$teczilla_scroll_thumb = get_theme_mod('teczilla_scroll_thumb',0);
			 if($teczilla_scroll_thumb==0){
			?>
  <div id="scrollUp">
            <i class="fa fa-angle-double-up"></i>
        </div>

        <?php } ?>