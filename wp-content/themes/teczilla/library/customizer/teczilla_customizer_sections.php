<?php
$repeater_path = trailingslashit( TECZILLA_THEME_DIR ) . '/library/customizer-repeater/functions.php';
if ( file_exists( $repeater_path ) ) {
require_once( $repeater_path );
}
/**
 * Customize for taxonomy with dropdown, extend the WP customizer
 */

if ( ! class_exists( 'WP_Customize_Control' ) )
	return NULL;

function teczilla_sections_settings( $wp_customize ){
	
    $selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	

    $wp_customize->get_setting( 'header_textcolor' ) ;

    // Remove the core header textcolor control, as it shares the main text color.
    $wp_customize->remove_control( 'header_textcolor' );

    $wp_customize->add_setting( 'header_title_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

  $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'header_title_color',array(
            'label' => esc_html__('Header Text Color','teczilla'),           
            'description' => esc_html__('Header Text Title Color','teczilla'),
            'section' => 'colors',
        ))
    ); 

    $wp_customize->add_setting( 'header_tagline_color', array(
        'default'           => '#000',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );

  $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'header_tagline_color',array(
            'label' => esc_html__('Header Tagline Color','teczilla'),           
            'description' => esc_html__('Header Tagline  Color','teczilla'),
            'section' => 'colors',
        ))
    );  

/* Sections Settings */
	$wp_customize->add_panel( 'section_settings', array(
		'priority'       => 50,
		'capability'     => 'edit_theme_options',
		'title'      => esc_html__('Teczilla Theme settings','teczilla'),
                'description' => __('Drag and Drop to Reorder', 'teczilla'). '<img class="avadanta-drag-spinner" src="'.admin_url('/images/spinner.gif').'">',

	) );
	
    
    $wp_customize->add_panel( 'home_section_settings', array(
        'priority'       => 55,
        'capability'     => 'edit_theme_options',
        'title'      => esc_html__('Teczilla Front Page Sections','teczilla'),
    ) );

//Latest News Section
	$wp_customize->add_section('teczilla_layout_sidebars',array(
			'title' => esc_html__('Sidebar Layout','teczilla'),
			'panel' => 'section_settings',
			'priority'       => 9,
			));
		
		 $wp_customize->add_setting('teczilla_blog_temp_layout',
        array(
            'sanitize_callback' => 'teczilla_sanitize_select',
            'default'           => 'rightsidebar',
        )
    );
    $wp_customize->add_control('teczilla_blog_temp_layout',
        array(
            'type'        => 'select',
            'label'       => esc_html__('Blog Template Layout', 'teczilla'),
            'description' => esc_html__('This will be apply for blog template layout', 'teczilla'),
            'section'     => 'teczilla_layout_sidebars',
            'choices'     => array(
                'rightsidebar' => esc_html__('Right sidebar', 'teczilla'),
                'leftsidebar'  => esc_html__('Left sidebar', 'teczilla'),
                'fullwidth'    => esc_html__('No sidebar', 'teczilla'),
            ),
        )
    );


    $wp_customize->add_setting('teczilla_single_blog_temp_layout',
        array(
            'sanitize_callback' => 'teczilla_sanitize_select',
            'default'           => 'rightsidebar',
        )
    );
    $wp_customize->add_control('teczilla_single_blog_temp_layout',
        array(
            'type'        => 'select',
            'label'       => esc_html__('Single Post Template Layout', 'teczilla'),
            'description' => esc_html__('This will be apply for single Post template layout', 'teczilla'),
            'section'     => 'teczilla_layout_sidebars',
            'choices'     => array(
                'rightsidebar' => esc_html__('Right sidebar', 'teczilla'),
                'leftsidebar'  => esc_html__('Left sidebar', 'teczilla'),
                'fullwidth'    => esc_html__('No sidebar', 'teczilla'),
            ),
        )
    );

    $wp_customize->add_setting('teczilla_page_temp_layout',
        array(
            'sanitize_callback' => 'teczilla_sanitize_select',
            'default'           => 'rightsidebar',
        )
    );
    $wp_customize->add_control('teczilla_page_temp_layout',
        array(
            'type'        => 'select',
            'label'       => esc_html__('Page Template Layout', 'teczilla'),
            'description' => esc_html__('This will be apply for Page template layout', 'teczilla'),
            'section'     => 'teczilla_layout_sidebars',
            'choices'     => array(
                'rightsidebar' => esc_html__('Right sidebar', 'teczilla'),
                'leftsidebar'  => esc_html__('Left sidebar', 'teczilla'),
                'fullwidth'    => esc_html__('No sidebar', 'teczilla'),
            ),
        )
    );



    $wp_customize->add_section('teczilla_post_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Post Options', 'teczilla'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );

 
    $wp_customize->add_setting('teczilla_single_post_thumb',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 1,
        )
    );
    $wp_customize->add_control('teczilla_single_post_thumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Single Post Thumbnail', 'teczilla'),
            'section'     => 'teczilla_post_settings',
            'description' => esc_html__('Check this box to enable post thumbnail on single post.', 'teczilla'),
        )
    );
    $wp_customize->add_setting('teczilla_single_post_meta',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 1,
        )
    );
    $wp_customize->add_control('teczilla_single_post_meta',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Single Post Meta', 'teczilla'),
            'section'     => 'teczilla_post_settings',
            'description' => esc_html__('Check this box to enable single post meta such as post date, author, category, comment etc.', 'teczilla'),
        )
    );
    $wp_customize->add_setting('teczilla_single_post_title',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 1,
        )
    );
    $wp_customize->add_control('teczilla_single_post_title',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Single Post Title', 'teczilla'),
            'section'     => 'teczilla_post_settings',
            'description' => esc_html__('Check this box to enable title on single post.', 'teczilla'),
        )
    );

 $wp_customize->add_section('teczilla_footer_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Footer Options', 'teczilla'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


$wp_customize->add_setting('teczilla_top_footer_enable',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_top_footer_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Footer Top Section?', 'teczilla'),
            'section'     => 'teczilla_footer_settings',
            'description' => esc_html__('Check this box to Disable Top Footer section.', 'teczilla'),
        )
    );


$wp_customize->add_setting( 'teczilla_footer_widgets_column',
            array(
                'capability'        => 'edit_theme_options',
                'default'           => 'mt-column-3',
                'sanitize_callback' => 'sanitize_text_field'
            )
        );

        $wp_customize->add_control( 'teczilla_footer_widgets_column',
                array(
                    'label'         => esc_html__( 'Footer Widget Column', 'teczilla' ),
                    'section'       => 'teczilla_footer_settings',
                    'type'           => 'select',
                    'settings'      => 'teczilla_footer_widgets_column',
                    'priority'      => 10,
                    'choices'     => array(
                        'mt-column-1'  => esc_html__( 'Col 1', 'teczilla' ),
                        'mt-column-2'  => esc_html__( 'Col 2', 'teczilla' ),
                        'mt-column-3'  => esc_html__( 'Col 3', 'teczilla' ),
                        'mt-column-4'  => esc_html__( 'Col 4', 'teczilla' ),
                    ),
                )
           
        );



        $wp_customize->add_setting('teczilla_color_scheme',array(
        'default' => esc_html__('#1b1b1b','teczilla'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_color_scheme',array(
            'label' => esc_html__('Background Color','teczilla'),           
            'description' => esc_html__('Change Footer Background Color','teczilla'),
            'section' => 'teczilla_footer_settings',
            'settings' => 'teczilla_color_scheme'
        ))
    );  

    $wp_customize->add_setting('teczilla_footer_widgets_title_color',
        array(
            'default' => esc_html__('#fff','teczilla'),
            'sanitize_callback' => 'sanitize_hex_color' 

        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'teczilla_footer_widgets_title_color',
        array(
            'label'   => esc_html__('Widget Title Color', 'teczilla'),
            'section' => 'teczilla_footer_settings',
        )     
    )
    );


        $wp_customize->add_setting('teczilla_footer_widgets_text_color',
        array(
            'default' => esc_html__('#fff','teczilla'),
            'sanitize_callback' => 'sanitize_hex_color' 

        )
    );
    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'teczilla_footer_widgets_text_color',
        array(
            'label'   => esc_html__('Widget Text Color', 'teczilla'),
            'section' => 'teczilla_footer_settings',
        )     
    )
    );


        $wp_customize->add_setting('teczilla_theme_color_scheme',array(
        'default' => esc_html__('#ff4a17','teczilla'),
        'sanitize_callback' => 'sanitize_hex_color'
    ));
    
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,'teczilla_theme_color_scheme',array(
            'label' => esc_html__('Theme Color','teczilla'),           
            'description' => esc_html__('Change Theme Color','teczilla'),
            'section' => 'colors',
            'settings' => 'teczilla_theme_color_scheme'
        ))
    ); 



//Latest News Section
    $wp_customize->add_section('teczilla_top_header',array(
            'title' => esc_html__('Top Header','teczilla'),
            'panel' => 'section_settings',
            'priority'       => 7,
            ));

$wp_customize->add_setting('teczilla_top_header_enable',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_top_header_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Top Header Section?', 'teczilla'),
            'section'     => 'teczilla_top_header',
            'description' => esc_html__('Check this box to Enable Top Header section.', 'teczilla'),
        )
    );



    // Navigation Button
    $wp_customize->add_setting('teczilla_header_mail',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_mail',
        array(
            'label'       => esc_html__('Header Email', 'teczilla'),
            'section'     => 'teczilla_top_header',
            'type'        => 'text',
        )
    );

    $wp_customize->add_setting('teczilla_header_phone',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_phone',
        array(
            'label'       => esc_html__('Header Contact', 'teczilla'),
            'section'     => 'teczilla_top_header',
            'type'        => 'text',
        )
    );
    $wp_customize->add_setting('teczilla_header_address',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            'default'           => '',
            ));

    $wp_customize->add_control('teczilla_header_address',
        array(
            'label'       => esc_html__('Header Address', 'teczilla'),
            'section'     => 'teczilla_top_header',
            'type'        => 'text',
        )
    );

for( $i = 1; $i <=4; $i++ ){


        $wp_customize->add_setting(
            'teczilla_service_page_icon'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'teczilla_sanitize_text'
            )
        );

        $wp_customize->add_control(
            new Avadanta_Fontawesome_Icon_Chooser(
                $wp_customize,
                'teczilla_service_page_icon'.$i,
                array(
                    'settings'      => 'teczilla_service_page_icon'.$i,
                    'section'       => 'teczilla_top_header',
                    'type'          => 'icon',
                    'label'         => esc_html__( 'Social Media Icon', 'teczilla' )
                )
            )
        );

          $wp_customize->add_setting(
            'teczilla_service_page_url'.$i,
            array(
                'default'           => '',
                'sanitize_callback' => 'teczilla_sanitize_text'
            )
        );

        $wp_customize->add_control(
                'teczilla_service_page_url'.$i,
                array(
                    'settings'      => 'teczilla_service_page_url'.$i,
                    'section'       => 'teczilla_top_header',
                    'type'          => 'url',
                    'label'         => esc_html__( 'Social Media Icon url', 'teczilla' )
                
            )
        );
    }

 

    // Footer BG Color
    $wp_customize->add_setting('teczilla_menubar_bg_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_menubar_bg_color',
        array(
            'label'       => esc_html__('Menu Bar Background Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));

        $wp_customize->add_setting('teczilla_menu_link_bg_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#ff4a17',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_menu_link_bg_color',
        array(
            'label'       => esc_html__('Menu Link Background Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));
    $wp_customize->add_setting('teczilla_menu_item_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#131313',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_menu_item_color',
        array(
            'label'       => esc_html__('Menu Link Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));
    // Header Menu Hover Color
    $wp_customize->add_setting('teczilla_menu_item_hover_color',
        array(
            'sanitize_callback'    => 'sanitize_hex_color',
            'default'              => '#ff4a17',
        ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_menu_item_hover_color',
        array(
            'label'       => esc_html__('Menu Link Hover/Active Background Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));

 

    $wp_customize->add_setting('teczilla_submnubg_scheme',
        array(
            'sanitize_callback'    => 'sanitize_hex_color',
            'default'              => '#ff4a17',
        ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_submnubg_scheme',
        array(
            'label'       => esc_html__('Sub Menu Background Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));

    $wp_customize->add_setting('teczilla_submnu_link',
        array(
            'sanitize_callback'    => 'sanitize_hex_color',
            'default'              => '#fff',
        ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_submnu_link',
        array(
            'label'       => esc_html__('Sub Menu Link Color', 'teczilla'),
            'section'     => 'colors',
            'description' => '',
        )
    ));


$wp_customize->add_section('teczilla_breadcrumb_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Header/Breadcrumb Options', 'teczilla'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );

    $wp_customize->add_setting('teczilla_header_bg_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#000',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_header_bg_color',
        array(
            'label'       => esc_html__('Header Background Color', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Select To Change Header Background Color', 'teczilla'),
        )
    ));

        $wp_customize->add_setting('teczilla_brdcrmb_opacity_section',
            array(
                'default'           => '0.75',
                'sanitize_callback' => 'teczilla_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('teczilla_brdcrmb_opacity_section',
            array(
                'label'    => __('Header Overlay Opacity', 'teczilla'),
                'section'  => 'teczilla_breadcrumb_settings',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '0.01', 'step' => '0.01', 'max' => '1',
                  ),

            )
        );


        $wp_customize->add_setting('braedcrumb_height',
            array(
                'default'           => '300',
                'sanitize_callback' => 'teczilla_sanitize_float_theme'
            )
        );
        $wp_customize->add_control('braedcrumb_height',
            array(
                'label'    => __('Breadcrumb Header Height', 'teczilla'),
                'section'  => 'teczilla_breadcrumb_settings',
                'type'     => 'number',
                'input_attrs' => array(
                    'min' => '20', 'step' => '', 'max' => '100',
                  ),
                'priority' => 10,

            )
        );

     $wp_customize->add_setting('teczilla_breadcrumb_title_color', array(
        'sanitize_callback'    => 'sanitize_hex_color',
        'default'              => '#fff',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'teczilla_breadcrumb_title_color',
        array(
            'label'       => esc_html__('Breadcrumb Title Color', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Select To Change Breadcrumb Title Color', 'teczilla'),
        )
    ));




    $wp_customize->add_setting('teczilla_header_show_blog',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_header_show_blog',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Blog Page Header', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Blog Page', 'teczilla'),
        )
    );

    $wp_customize->add_setting('teczilla_header_show_single_blog',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_header_show_single_blog',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Single Post Header', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Single Post', 'teczilla'),
        )
    );

 $wp_customize->add_setting('teczilla_header_show_single_page',
        array(  
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_header_show_single_page',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Single Page Header', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Page Header on Single Page', 'teczilla'),
        )
    );

 $wp_customize->add_setting('teczilla_header_show_breadcrumb',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_header_show_breadcrumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Breadcrumbs', 'teczilla'),
            'section'     => 'teczilla_breadcrumb_settings',
            'description' => esc_html__('Check this box to Disable Breadcrumbs on all pages and posts', 'teczilla'),
        )
    );


        $wp_customize->add_section('teczilla_fonts_style',array(
            'title' => esc_html__('Theme Typography','teczilla'),
            'panel' => 'section_settings',
            
            ));
        
    $wp_customize->add_setting('teczilla_show_typography',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_show_typography',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Enable Typography', 'teczilla'),
            'section'     => 'teczilla_fonts_style',
            'description' => esc_html__('Check this box to Enable Custom Typography', 'teczilla'),
        )
    );

        $wp_customize->add_setting( 'teczilla_typography_base_font_family', array(
            'sanitize_callback' => 'sanitize_text_field',
            'default' => '',
        ) );
        $wp_customize->add_control( new AvadantaWP_Customizer_Typography_Control( $wp_customize,'teczilla_typography_base_font_family', array(
            'label'             => esc_html__( 'Font Family', 'teczilla' ),
            'section'           => 'teczilla_fonts_style',
            'settings'          => 'teczilla_typography_base_font_family',
            'type'              => 'select',
        ) ) );  


    $wp_customize->add_section('teczilla_sticky_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Sticky Menu/Scroll Up Option', 'teczilla'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );

 
    $wp_customize->add_setting('teczilla_sticky_thumb',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_sticky_thumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Sticky Menu', 'teczilla'),
            'section'     => 'teczilla_sticky_settings',
            'description' => esc_html__('Check this box to Disable Sticky Menu.', 'teczilla'),
        )
    );


    $wp_customize->add_setting('teczilla_scroll_thumb',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_scroll_thumb',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Scroll To Top', 'teczilla'),
            'section'     => 'teczilla_sticky_settings',
            'description' => esc_html__('Check this box to Disable Scroll To Top.', 'teczilla'),
        )
    );


    $wp_customize->add_setting('teczilla_preloader_option',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_preloader_option',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Preloader Option', 'teczilla'),
            'section'     => 'teczilla_sticky_settings',
            'description' => esc_html__('Check this box to Disable Preloader', 'teczilla'),
        )
    );

     $wp_customize->add_section('teczilla_bottom_footer_settings',
        array(
            'priority'    => null,
            'title'       => esc_html__('Bottom Footer Options', 'teczilla'),
            'description' => '',
            'panel'       => 'section_settings',
        )
    );


$wp_customize->add_setting('teczilla_copyright_enable',
        array(
            'sanitize_callback' => 'teczilla_sanitize_checkbox',
            'default'           => 0,
        )
    );
    $wp_customize->add_control('teczilla_copyright_enable',
        array(
            'type'        => 'checkbox',
            'label'       => esc_html__('Disable Copyright Section?', 'teczilla'),
            'section'     => 'teczilla_bottom_footer_settings',
            'description' => esc_html__('Check this box to Disable copyright section.', 'teczilla'),
        )
    );
    $wp_customize->add_setting('teczilla_copyright_text',   
        array(
            'sanitize_callback' => 'teczilla_sanitize_text',
            /* translators: %s: Copyright Text */
            'default'           => sprintf(__('Proudly powered by %1$s WordPress %3$s', "teczilla"),
                '<a href="https://wordpress.org/" target="_blank">',
                '<a href="" target="_blank">',
                '</a>'
            ),
        )
    );
    $wp_customize->add_control('teczilla_copyright_text',
        array(
            'label'       => esc_html__('Copyright Content Here', 'teczilla'),
            'section'     => 'teczilla_bottom_footer_settings',
            'type'        => 'textarea',
        )
    );



          /**
         * Section Reorder
        */
        $wp_customize->add_section( 'teczilla_homepage_section_reorder', array(
            'title'     => esc_html__( 'Home Section Re Order', 'teczilla' ),
            'priority'  => 5,
            'panel'       => 'home_section_settings',

        ) );
        
        $wp_customize->add_setting( 'teczilla_homepage_section_order_list', array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( new Avadanta_Section_Re_Order( $wp_customize, 'teczilla_homepage_section_order_list', array(
            'type' => 'dragndrop',
            'priority'  => 3,
            'label' => esc_html__( 'Home Section Re Order', 'teczilla' ),
            'section' => 'teczilla_homepage_section_reorder',
                'choices'   => array(
                    'aboutus'      => esc_html__( 'About Us', 'teczilla' ),
                    'features'       => esc_html__( 'Features Services', 'teczilla' ),
                    'cta'       => esc_html__( 'Callout Section', 'teczilla' ),
                    'gallery'       => esc_html__( 'Gallery Section', 'teczilla' ),
                    'testimonial'   => esc_html__( 'Testimonial Section', 'teczilla' ),
                    'ourteam'           => esc_html__( 'Team Section', 'teczilla' ),
                    'ourblog'       => esc_html__( 'News Section', 'teczilla' ),
                    'courses'       => esc_html__( 'Client Section', 'teczilla' )


                ),
        ) ) );

       
}
add_action( 'customize_register', 'teczilla_sections_settings' );

/**
 * Add selective refresh for Front page section section controls.
 */
function avadanta_register_home_section_partials( $wp_customize ){
	//News
	$wp_customize->selective_refresh->add_partial( 'home_news_section_title', array(
		'selector'            => '.section-module.blog .section-subtitle',
		'settings'            => 'home_news_section_title',
		'render_callback'  => 'avadanta_home_news_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'home_news_section_discription', array(
		'selector'            => '.section-module.blog .section-title',
		'settings'            => 'home_news_section_discription',
		'render_callback'  => 'avadanta_home_news_section_discription_render_callback',
	
	) );
}
add_action( 'customize_register', 'avadanta_register_home_section_partials' );

function avadanta_home_news_section_title_render_callback() {
	return get_theme_mod( 'home_news_section_title' );
}

function avadanta_home_news_section_discription_render_callback() {
	return get_theme_mod( 'home_news_section_discription' );
}

function avadanta_sanitize_radio( $input, $setting ){
     //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
    $input = sanitize_key($input);
 
     //get the list of possible radio box options 
     $choices = $setting->manager->get_control( $setting->id )->choices;
                             
     //return input if valid or return default option
     return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                          
}

function teczilla_sanitize_float_theme( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}
        

require TECZILLA_THEME_DIR . '/library/customizer/teczilla-customize-typography-control.php';



require get_template_directory() . '/library/customizer-plugin-notice/teczilla-customizer-notify.php';
$teczilla_config_customizer = array(
    'recommended_plugins'       => array(
        'avadanta-companion' => array(
            'recommended' => true,
            'description' => sprintf(__('Install and activate Avadanta Companion For HomePage', 'teczilla')),
        ),
    ),
    'recommended_actions'       => array(),
    'recommended_actions_title' => esc_html__( 'Recommended Actions', 'teczilla' ),
    'recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'teczilla' ),
    'install_button_label'      => esc_html__( 'Install and Activate', 'teczilla' ),
    'activate_button_label'     => esc_html__( 'Activate', 'teczilla' ),
    'avadanta_deactivate_button_label'   => esc_html__( 'Deactivate', 'teczilla' ),
);
Avadanta_Customizer_Notify::init( apply_filters( 'avadanta_customizer_notify_array', $teczilla_config_customizer ) );