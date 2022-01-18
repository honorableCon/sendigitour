<?php
/*
Plugin Name: Avadanta Companion
Plugin URI:
Description: Avadanta Companion plugin adds Extra sections and functionality to the Avadnata theme. This plugin for only Avadnata theme. Avadanta Companion is a plugin build for enhance the functionality of Avadanta WordPress Theme.
Version: 1.3.6
Author: avadantathemes
Author URI: https://www.avadantathemes.com/
Text Domain: avadanta-companion
*/
define( 'AVATA_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'AVATA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

/**
 * PLUGIN Setting
 */
require_once("plugin-setting.php");

$theme = wp_get_theme();
function avata_avadanta_home_page_sanitize_text( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}


function avadanta_comapanion_sanitize_select( $input, $setting ){
         
    $input = sanitize_key($input);
 
    $choices = $setting->manager->get_control( $setting->id )->choices;
                             
    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                         
}

function avata_sanitize_float_theme($input)
{
    return filter_var(
        $input,
        FILTER_SANITIZE_NUMBER_FLOAT,
        FILTER_FLAG_ALLOW_FRACTION
    );
}



function bovity_activate() {
  $theme = wp_get_theme();
  if ( 'Bovity' == $theme->name || 'Avadanta Business' == $theme->name || 'Avadanta Consulting' == $theme->name || 'Avadanta Corporate' == $theme->name || 'Avadanta Agency' == $theme->name || 'Vesta' == $theme->name || 'Teczilla Agency' == $theme->name || 'Teczilla Corporate' == $theme->name || 'Teczilla startup' == $theme->name || 'Teczilla Finance' == $theme->name || 'Teczilla Dark' == $theme->name || 'Bovity Corporate' == $theme->name || 'Teczilla Creative' == $theme->name || 'Teczilla Trading' == $theme->name || 'Teczilla Portfolio' == $theme->name || 'Teczilla Organization' == $theme->name){



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
add_action( 'wp', 'bovity_activate' );

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );