<?php
/************************* Footer Callback function *********************************/

 	function avadanta_footer_callback ( $control ) 
 	{
		if( true == $control->manager->get_setting ('footer_enable')->value()){
 			return true;
 		}
 		else {
 			return false;
 		} 		
 	}

/************************* Related Post Callback function *********************************/

 	function avadanta_rt_post_callback ( $control ) 
 	{
		if( true == $control->manager->get_setting ('avadanta_enable_related_post')->value()){
 			return true;
 		}
 		else {
 			return false;
 		} 		
 	}

/************************* Theme Customizer with Sanitize function *********************************/
function avadanta_theme_option( $wp_customize )
{
	function teczilla_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
	}

	function teczilla_sanitize_checkbox( $checked ) {
		// Boolean check.
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}



	function teczilla_sanitize_select( $input, $setting ){
	         
	    //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
	    $input = sanitize_key($input);
	 
	    //get the list of possible radio box options 
	    $choices = $setting->manager->get_control( $setting->id )->choices;
	                             
	    //return input if valid or return default option
	    return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
	             
	}

	$wp_customize->add_panel('teczilla_theme_panel',
		array(
			'priority' => 2,
			'capability' => 'edit_theme_options',
			'title' => esc_html__('Avadanta theme options','teczilla')
		)
	);
}
add_action('customize_register','avadanta_theme_option');

function avadanta_customizer_script() {
    wp_enqueue_script( 'teczilla-customizer-script', get_template_directory_uri() .'/assets/js/customizer-scripts.js', array("jquery"),'', true  );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() .'/assets/css/font-awesome/css/font-awesome.css'); 
    wp_enqueue_style( 'teczilla-customizer-style', get_template_directory_uri() .'/assets/css/customizer-style.css'); 
}
add_action( 'customize_controls_enqueue_scripts', 'avadanta_customizer_script' );

if( class_exists( 'WP_Customize_Control' ) ):
class Avadanta_Fontawesome_Icon_Chooser extends WP_Customize_Control{
    public $type = 'icon';

    public function render_content(){
        ?>
            <label>
                <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
                </span>

                <?php if($this->description){ ?>
                <span class="description customize-control-description">
                    <?php echo wp_kses_post($this->description); ?>
                </span>
                <?php } ?>

                <div class="avadanta-selected-icon">
                    <i class="fa <?php echo esc_attr($this->value()); ?>"></i>
                    <span><i class="fa fa-angle-down"></i></span>
                </div>

                <ul class="avadanta-icon-list clearfix">
                    <?php
                    $teczilla_font_awesome_icon_array = teczilla_font_awesome_icon_array();
                    foreach ($teczilla_font_awesome_icon_array as $teczilla_font_awesome_icon) {
                            $icon_class = $this->value() == $teczilla_font_awesome_icon ? 'icon-active' : '';
                            echo '<li class='.esc_attr($icon_class).'><i class="'.esc_attr($teczilla_font_awesome_icon).'"></i></li>';
                        }
                    ?>
                </ul>
                <input type="hidden" value="<?php $this->value(); ?>" <?php $this->link(); ?> />
            </label>
        <?php
    }
}
endif;


if(!function_exists('teczilla_font_awesome_icon_array')){
	function teczilla_font_awesome_icon_array(){
		return array("fa fa-facebook","fa fa-twitter","fa fa-instagram","fa fa-linkedin","fa fa-youtube","fa fa-pinterest","fa fa-whatsapp","fa fa-tumblr","fa fa-reddit","fa fa-flickr","fa fa-snapchat","fa fa-quora","fa fa-wechat","fa fa-vimeo","fa fa-digg","fa fa-telegram");
	}
}	