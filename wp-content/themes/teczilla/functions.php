<?php
/**
 * Teczilla functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Teczilla
 */

if( ! defined( 'ABSPATH' ) )
{
    exit;
}

define('TECZILLA_THEME_DIR', get_template_directory());
define('TECZILLA_THEME_URI', get_template_directory_uri());

/**
 * Custom Header feature.
 */
require( TECZILLA_THEME_DIR . '/theme-setup.php');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function teczilla_content_width() {

    $GLOBALS['content_width'] = apply_filters( 'teczilla_content_width', 696 );
}
add_action( 'after_setup_theme', 'teczilla_content_width', 0 ); 

$theme = wp_get_theme();

require( TECZILLA_THEME_DIR .'/library/customizer/customizer-alpha-color-picker/class-teczilla-customize-alpha-color-control.php');

require( TECZILLA_THEME_DIR . '/library/breadcrumbs-trail.php');

require( TECZILLA_THEME_DIR . '/script/enqueue-scripts.php');

require( TECZILLA_THEME_DIR . '/library/template-functions.php');

require(TECZILLA_THEME_DIR . '/library/template-tags.php');

require(TECZILLA_THEME_DIR . '/library/class-tgm-plugin-activation.php');

require(TECZILLA_THEME_DIR . '/library/hook-tgm.php');

require(TECZILLA_THEME_DIR . '/library/teczilla-typography.php');

require(TECZILLA_THEME_DIR . '/library/customizer/teczilla_customizer_sections.php');

require ( TECZILLA_THEME_DIR . '/library/customizer/teczilla-customizer.php' );

require ( TECZILLA_THEME_DIR . '/library/custom-header.php' );

require ( TECZILLA_THEME_DIR . '/library/getting-started/getting-started.php' );

require ( TECZILLA_THEME_DIR . '/library/upgrade/class-customize.php' );



if( ! function_exists( 'teczilla_admin_notice' ) ) :
/**
 * Addmin notice for getting started page
*/
function teczilla_admin_notice(){
    global $pagenow;
    $theme_args      = wp_get_theme();
    $meta            = get_option( 'teczilla_admin_notice' );
    $name            = $theme_args->__get( 'Name' );
    $current_screen  = get_current_screen();
    
    if( 'themes.php' == $pagenow && !$meta ){
        
        if( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ){
            return;
        }

        if( is_network_admin() ){
            return;
        }

        if( ! current_user_can( 'manage_options' ) ){
            return;
        } ?>

        <div class="welcome-message notice notice-info">
            <div class="notice-wrapper">
                <div class="notice-text">
                    <h3><?php esc_html_e( 'Congratulations! For Activating Teczilla Theme', 'teczilla' ); ?></h3>
                    <p><?php printf( __( '%1$s is now installed and ready to usefor you.Install and Activate Avadanta Companion Plugin to get advantages of Our Theme Homepage', 'teczilla' ), esc_html( $name ) ) ; ?></p>
                    <a class="teczilla-btn-get-started button button-secondary" href="#" data-name="" data-slug="">
                        <?php
                        printf(
                        /* translators: 1: welcome page link starting html tag, 2: welcome page link ending html tag. */
                            esc_html__( 'Install Avadanta Companon', 'teczilla' ), '<strong>'. wp_get_theme()->get('Name'). '</strong>' );
                        ?>


                        </a>
                                            <p><?php printf( __( 'Customize Theme', 'teczilla' ), esc_html( $name ) ) ; ?></p>

                                            <p><a href="<?php echo esc_url( admin_url( 'themes.php?page=avadanta-getting-started' ) ); ?>" class="button button-primary" style="text-decoration: none;"><?php esc_html_e( 'Getting Started', 'teczilla' ); ?></a></p>
                    <p class="dismiss-link"><strong><a href="?teczilla_admin_notice=1" class="dismiss-getting"><?php esc_html_e( 'Dismiss', 'teczilla' ); ?></a></strong></p>
                </div>
                 
            </div>
        </div>
    <?php }
}
endif;
add_action( 'admin_notices', 'teczilla_admin_notice' );

if( ! function_exists( 'teczilla_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function teczilla_update_admin_notice(){
    if ( isset( $_GET['teczilla_admin_notice'] ) && $_GET['teczilla_admin_notice'] = '1' ) {
        update_option( 'teczilla_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'teczilla_update_admin_notice' );

add_action( 'wp_ajax_install_act_plugin', 'teczilla_admin_install_plugin' );

function teczilla_admin_install_plugin() {     
    /**
     * Install Plugin.
     */
    include_once ABSPATH . '/wp-admin/includes/file.php';
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    include_once ABSPATH . 'wp-admin/includes/plugin-install.php';

    if ( ! file_exists( WP_PLUGIN_DIR . '/avadanta-companion' ) ) {
        $api = plugins_api( 'plugin_information', array(
            'slug'   => sanitize_key( wp_unslash( 'avadanta-companion' ) ),
            'fields' => array(
                'sections' => false,
            ),
        ) );

        $skin     = new WP_Ajax_Upgrader_Skin();
        $upgrader = new Plugin_Upgrader( $skin );
        $result   = $upgrader->install( $api->download_link );
    }

    // Activate plugin.
    if ( current_user_can( 'activate_plugin' ) ) {
        $result = activate_plugin( 'avadanta-companion/avadanta-companion.php' );
    }
}