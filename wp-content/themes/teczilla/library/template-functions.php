<?php
    /**
     * Functions which enhance the theme by hooking into WordPress
     *
     * @package avadanta
     */

function avadanta_theme_sidebars() {

    // Blog Sidebar

    register_sidebar(array(
        'name' => esc_html__( 'Blog Sidebar', "teczilla"),
        'id' => 'main-sidebar',
        'description' => esc_html__( 'Sidebar on the blog layout.', "teczilla"),
        'before_widget' => '<div id="%1$s" class="sidebar-search sidebar-widget sidebar-grid shadow mb-50 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="sidebar-title"><h3 class="title semi-bold mb-20">',
        'after_title' => '</h3></div>',
    ));
        

    // Footer Sidebar


    register_sidebars( 4, array(
    'name'          => esc_html__( 'Footer Area %d', 'teczilla' ),
    'id'            => 'teczilla-footer-area',
    'description'   => esc_html__( 'Added widgets are display at footer widget area.', 'teczilla' ),
    'before_widget' => '<div class="footer-widget %2$s">',
        'after_widget' => '</div>', 
        'before_title' => ' <h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'avadanta_theme_sidebars' );


function avadanta_body_classes( $classes ) {
  $layout_option =  get_theme_mod('teczilla_site_layout', '') ;
  // Adds a class of group-blog to blogs with more than 1 published author.
  
if( $layout_option == 'boxed' )
{
  $classes[]    = 'body-boxed';
}
  return $classes;

}
add_filter( 'body_class', 'avadanta_body_classes' );

if( !function_exists('teczilla_breadcrumbs') ): function teczilla_breadcrumbs() {
$image = get_header_image();
  ?>
            <div class="tec-breadcrumbs bg-1">
                <div class="container">
                    <div class="inner-title text-center">
                  <?php if(is_home()): ?>
                            <h2 class="banner-heading" ><?php bloginfo('name'); ?></h2>
                            <?php else: ?>
                              <h2 class="banner-heading">
                                <?php if ( is_archive() ) {
                                  the_archive_title( '<h2 class="banner-heading">', '</h2>' );
                                }
                                 elseif(is_search()){

                                  echo  esc_html__('Search Results For ', 'teczilla') . ' " ' . get_search_query() . ' "';

                                 }elseif ( is_404() ) {
                                  echo  esc_html__('Nothing Found ', 'teczilla');
                                 }
                                 else{
                                  
                                    echo esc_html( get_the_title() );
                                    
                                  } 
                                 ?>
                              </h2>
                            <?php endif; 
                            if(!is_singular()) {
                            ?>
                           <?php teczilla_breadcrumb_trail(); ?>
                         <?php } ?>

                </div>
              </div>
               
            </div>
         
      <div id="content"></div>
<?php } endif;


function avadanta_inline_css(){

$teczilla_custom_css      = '';

$teczilla_color_scheme = get_theme_mod( 'teczilla_color_scheme', '#1b1b1b' );

$teczilla_custom_css      .= '.tec-footer{background-color: ' . esc_attr( $teczilla_color_scheme) . ';}';

$teczilla_footer_widgets_title_color = get_theme_mod( 'teczilla_footer_widgets_title_color','#fff' );

$teczilla_custom_css      .= '.tec-footer .footer-content .widget-title{color: ' . esc_attr( $teczilla_footer_widgets_title_color) . ';}';

$teczilla_footer_widgets_text_color = get_theme_mod( 'teczilla_footer_widgets_text_color','#fff' );

$teczilla_custom_css      .= '.tec-footer a,.tec-footer.widget_categories li,.tec-footer.widget_meta li a,.tec-footer.widget_calendar td,.tec-footer.widget_nav_menu div li a, .tec-footer.widget_pages li a,.tec-footer .recentcomments,.tec-footer .recentcomments a,.tec-footer .textwidget p,.footer-widget.widget_nav_menu ul li a,.footer-widget.widget_nav_menu .current_page_item a,.footer-widget .wp-block-latest-comments__comment-excerpt p,.footer-widget .wp-block-latest-comments__comment-date,.footer-widget .widget_tag_cloud .wp-block-tag-cloud a{color: ' . esc_attr( $teczilla_footer_widgets_text_color) . ';}';

$teczilla_menubar_bg_color = get_theme_mod( 'teczilla_menubar_bg_color','#fff' );

$teczilla_custom_css      .= '.full-width-header .tec-header .menu-area{background-color: ' . esc_attr( $teczilla_menubar_bg_color) . ' !important;}';

$teczilla_menu_link_bg_color = get_theme_mod( 'teczilla_menu_link_bg_color','#ff4a17' );

$teczilla_custom_css      .= '.current_page_item{background-color: ' . esc_attr( $teczilla_menu_link_bg_color) . ';}';


$teczilla_menu_link_text_bg_color = get_theme_mod( 'teczilla_menu_link_text_bg_color','#fff' );

$teczilla_custom_css      .= '.current_page_item > a,.nav-menu>.menu-item>a:hover, .nav-menu>.page_item>a:hover{color: ' . esc_attr( $teczilla_menu_link_text_bg_color) . ' !important;}';


$teczilla_menu_item_color = get_theme_mod('teczilla_menu_item_color','#131313');

$teczilla_custom_css      .= '.menu>.menu-item>a,.menu .page_item a{color: ' . esc_attr( $teczilla_menu_item_color) . ';}';

$teczilla_menu_item_hover_color = get_theme_mod('teczilla_menu_item_hover_color','#ff4a17');

$teczilla_custom_css      .= '.avadanta-navigate .nav-menu>.menu-item>a:hover,
                              .avadanta-navigate .nav-menu>.page_item>a:hover                              {background: ' . esc_attr( $teczilla_menu_item_hover_color) . ';}';


$teczilla_breadcrumb_title_color = get_theme_mod('teczilla_breadcrumb_title_color','#fff');

$teczilla_custom_css      .= '.tec-breadcrumbs .inner-title h2{color: ' . esc_attr( $teczilla_breadcrumb_title_color) . ';}';

$teczilla_header_bg_color = get_theme_mod('teczilla_header_bg_color','#000');

$teczilla_custom_css      .= '.tec-breadcrumbs:before{background: ' . esc_attr( $teczilla_header_bg_color) . ';}';


$teczilla_theme_color_scheme = get_theme_mod('teczilla_theme_color_scheme','#ff4a17');               

$teczilla_custom_css      .= '.full-width-header .toolbar-area,.home-slider .container .slider-caption:after, .carousel-control-next-icon:before, .carousel-control-prev-icon:before,.sec-title .sub-title.primary:after,.readon,.tec-services.style2 .service-wrap .image-part i,.bg21,.tec-portfolio.style3 .portfolio-item .content-part .middle .categories a,.tec-carousel.dot-style1 .owl-dots .owl-dot,.tec-team.inner .team-item .text-bottom .team-social ul li,#scrollUp i,#scrollUp i:hover,.tec-footer .footer-content .widget-title:before,.comment-respond .form-submit input,
       .widget_tag_cloud .tagcloud a:hover,.main-header-area .main-menu-area nav ul li ul > li:hover, .main-header-area .main-menu-area nav ul li ul > li .active,.sidebar-grid .sidebar-title .title:after,.sidebar-grid ul::before,
       .main-slider-three .owl-carousel .owl-nav .owl-next:hover,.comment-respond .form-submit input:hover,.widget_tag_cloud .tagcloud a:hover,.srvc .bg-darker,.project-area.project-call,.header-search .input-search:focus,.sub-modals,.dialog-content #save-dialog,.error-content .btn,.widget_tag_cloud .wp-block-tag-cloud a
       {background-color: ' . esc_attr( $teczilla_theme_color_scheme) . ';}';

$teczilla_custom_css      .= '.nav-links .page-numbers,.social li
       {
        background-color: ' . esc_attr( $teczilla_theme_color_scheme) . ';
        border: 1px solid '. esc_attr( $teczilla_theme_color_scheme) . '}';

$teczilla_custom_css      .= 'blockquote
       {
        border-left: 5px solid '. esc_attr( $teczilla_theme_color_scheme) . '}';

$teczilla_custom_css      .= '.comment-respond .form-submit input{border-color: ' . esc_attr( $teczilla_theme_color_scheme) . ';}';

$teczilla_custom_css      .= '
       .sec-title .sub-title.primary,.tec-testimonial.style1 .testi-item .content-part .icon-part i,
       .tec-blog.style1 .blog-wrap .content-part .blog-meta .user-data i,.tec-blog.style1 .blog-wrap .content-part .blog-meta .date i,.tec-blog.inner .blog-wrap .content-part .blog-meta li i,.sidebar-widget.widget_archive li:before, .sidebar-widget.widget_categories li:before, .sidebar-widget.widget_meta li:before,.trail-begin a,.breadcrumb-item a,.blog-wrap a{
                     color: ' . esc_attr( $teczilla_theme_color_scheme) . '!important; ;
                }';

$teczilla_submnubg_scheme = get_theme_mod('teczilla_submnubg_scheme','#ff4a17');               

$teczilla_custom_css      .= '.main-navigation ul li:hover > ul, .main-navigation ul li.focus > ul
       {
        background-color: '. esc_attr( $teczilla_submnubg_scheme) . '}';

$teczilla_submnu_link = get_theme_mod('teczilla_submnu_link','#fff');               

$teczilla_custom_css      .= '.main-navigation ul ul a
       {
        color: '. esc_attr( $teczilla_submnu_link) . ' !important}';

$teczilla_custom_css      .= '.btn-read-more-fill{border-bottom: 1px solid ' . esc_attr( $teczilla_theme_color_scheme) . ' !important;}';


$teczilla_custom_css      .= ' .nav-links .page-numbers:hover{background-color:  #fff;
                     border-bottom: 1px solid ' . esc_attr( $teczilla_theme_color_scheme) . ' !important;
                     color:' . esc_attr( $teczilla_theme_color_scheme) . ' !important;}';


$teczilla_custom_css      .= '.contact-banner-area .color-theme, .projects-2-featured-area .featuredContainer .featured-box:hover .overlay,.sidebar-title:before{background-color: ' . esc_attr( $teczilla_theme_color_scheme) . ';opacity:0.8;}';

$teczilla_custom_css      .= '.bg-primary,.slick-dots li.slick-active,.post-full .post-date,.preloader.preloader-dalas:before,
.preloader.preloader-dalas:after,.back-to-top{background-color: ' . esc_attr( $teczilla_theme_color_scheme) . ' !important;}';



$teczilla_brdcrmb_opacity_section = get_theme_mod('teczilla_brdcrmb_opacity_section','0.75');

$teczilla_custom_css      .= '.tec-breadcrumbs:before{opacity: ' . esc_attr( $teczilla_brdcrmb_opacity_section) . ';}';


$teczilla_footer_opacity = get_theme_mod('teczilla_footer_opacity_section','0.0');

$teczilla_custom_css      .= '.tc-light.footer-s1::after{opacity: ' . esc_attr( $teczilla_footer_opacity) . ';}';


$braedcrumb_height = get_theme_mod('braedcrumb_height','300');

$teczilla_custom_css      .= '.tec-breadcrumbs{height: ' . esc_attr( $braedcrumb_height) . 'px;}';

    wp_add_inline_style( 'teczilla-style', $teczilla_custom_css );
}

add_action( 'wp_enqueue_scripts', 'avadanta_inline_css' );

function avadanta_check_plugin() {
  if ( !is_plugin_active('avadanta-companion/avadanta-companion.php') ) {

    add_filter( 'theme_page_templates', 'avadanta_remove_page_template' );
    function avadanta_remove_page_template( $pages_templates ) {
    unset( $pages_templates['main-page.php'] );
    return $pages_templates;
}

  }
}
add_action( 'admin_init', 'avadanta_check_plugin' );


function avadnta_activate() {
  $theme = wp_get_theme();
  if (  'Teczilla' == $theme->name   ){



  $post = array(
      'comment_status' => 'closed',
      'ping_status' =>  'closed' ,
      'post_author' => 1,
      'post_date' => date('Y-m-d H:i:s'),
      'post_name' => 'Home',
      'post_status' => 'publish' ,
      'post_title' => 'Home',
      'post_type' => 'page',
  );  
if ( get_page_by_title( 'Home' ) == null ) {

  //insert page and save the id
  $avadantanewvalue = wp_insert_post( $post, false );
  if ( $avadantanewvalue && ! is_wp_error( $avadantanewvalue ) ){
    update_post_meta( $avadantanewvalue, '_wp_page_template', 'main-page.php' );
    
    // Use a static front page


    $page = get_page_by_title('Home');
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $page->ID );
    
    }

}
  }
    
}
add_action( 'wp', 'avadnta_activate' );


add_action( 'wp_ajax_install_act_plugin', 'avadanta_admin_install_plugin' );

?>