<?php
/**
* Header file for the Teczilla WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Teczilla
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'teczilla' ); ?></a>
		<?php get_template_part('header/header-nav'); ?>
