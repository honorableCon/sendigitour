<?php
/**
* Header file for the Teczilla WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
		
	<?php wp_head();?>	
	</head>
	<body <?php body_class(); ?>>

		<?php $teczilla_preloader= get_theme_mod('teczilla_preloader_option',1);
		if($teczilla_preloader==0) { ?>
		        <div id="preloader"></div>
		    <?php } ?>

	<?php
	if ( ! function_exists( 'wp_body_open' ) ) {
		function wp_body_open() 
		{
			do_action( 'wp_body_open' );
		}
	} 
	?>
<div class="wrapper-area">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teczilla-finance' ); ?></a>
		<div class="full-width-header">
              
            <div class="toolbar-area hidden-md">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="toolbar-sl-share">

                                <ul>
                                <?php
                                $teczilla_services_no        = 4;
                                $teczilla_services_icons     = array();
                                for( $i = 1; $i <= $teczilla_services_no; $i++ ) {
                                    $teczilla_services_icons = get_theme_mod('teczilla_service_page_icon'.$i);
                                $teczilla_service_page_url = get_theme_mod('teczilla_service_page_url'.$i);

                                if(!empty($teczilla_services_icons)) {
                                ?>

                                <li><a href="<?php echo esc_url($teczilla_service_page_url); ?>"><i class="fa <?php echo esc_attr($teczilla_services_icons); ?>"></i></a></li>
                               <?php

                               } }?> 


                                </ul>
                                 
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="toolbar-contact">
                                <?php 
                                $teczilla_header_mail = get_theme_mod('teczilla_header_mail','');
                                $teczilla_header_phone = get_theme_mod('teczilla_header_phone','');
                                $teczilla_header_address = get_theme_mod('teczilla_header_address','');
                                 ?>
                                <ul>
                                    <?php if(!empty($teczilla_header_mail)) {  ?>
                                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo esc_url($teczilla_header_mail); ?>"><?php echo esc_html($teczilla_header_mail); ?></a></li> 
                                    <?php } if(!empty($teczilla_header_phone)) { ?>                             
                                    <li>|</li>
                                    
                                    <li><i class="fa fa-phone"></i><a><?php echo esc_html($teczilla_header_phone); ?></a></li>
                                        <?php } if(!empty($teczilla_header_address)) { ?>

                                    <li>|</li>
                                    <li><i class="fa fa-map-marker"></i><a><?php echo esc_html($teczilla_header_address); ?></a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                      
                
                    </div>
                </div>
            </div>

    
  
            <!--Header Start-->
            <header id="tec-header" class="tec-header">
                <!-- Menu Start -->
    <?php $teczilla_sticky_thumb = get_theme_mod('teczilla_sticky_thumb',0);
     if($teczilla_sticky_thumb==0){
    ?>
            <div class="teczilla-menu-area menu-sticky <?php if(is_user_logged_in()) { ?> tec-agncy-stick <?php } ?>">
                <?php } else { ?>
                <div class="menu-area">
                    <?php } ?> 
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="logo-area">
                                     <?php
                                        if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
                                        the_custom_logo();
                                        } 
                                        if (display_header_text()==true){ 
                                        ?>
                                         <h1 class="teczilla-title">
                                             <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                             <?php esc_html(bloginfo( 'title' )); ?>
                                             </a>
                                         </h1>
                                        <p class="teczilla-desc">
                                        <?php esc_html(bloginfo( 'description')); ?>
                                        </p>
                                        <?php } ?>
                                </div>
                            </div>
                            <div class="col-lg-7 text-center">
                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php echo esc_attr('Top Menu','teczilla-finance'); ?>">
                                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                                <?php
                         if ( has_nav_menu( 'primary' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'primary',
                                'menu_id'        => 'primary-menu',
                            ) );
                                }
                                else
                                {
                         ?>
                                <ul class="teczilla-add-menu">
                                    <li class="header-menus">
                                        <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ));  ?>"><?php echo esc_html__( 'Add Menu Here', 'teczilla-finance' ); ?>
                                        </a>
                                    </li>
                                </ul>
                                <?php
                                }
                                ?>
                                </nav>
                            </div>
                            <?php 
                                $teczilla_header_button = get_theme_mod('teczilla_header_button','Know More');
                                $teczilla_header_button_url = get_theme_mod('teczilla_header_button_url','#');

                                if($teczilla_header_button !=="" || $teczilla_header_button_url !=="")
                             ?>
                            <div class="col-lg-2 buttn">
                                <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Top Menu">
                                    <div id="primary-menu" class="menu">
                                        <ul><li aria-current="page"><a href="<?php echo esc_url($teczilla_header_button_url); ?>"><?php echo esc_html($teczilla_header_button); ?></a></li></ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Menu End -->
            </header>
            <!--Header End-->
        </div>
