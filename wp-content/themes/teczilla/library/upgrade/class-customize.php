<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class avadanta_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/library/upgrade/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'avadanta_Customize_Section_Pro' );

		// doc sections.
		$manager->add_section(
			new avadanta_Customize_Section_Pro(
				$manager,
				'teczilla',
				array(
					'pro_text' => esc_html__( 'Documentation', 'teczilla' ),
					'pro_url'  => 'https://www.avadantathemes.com/docs-category/avadanta-free/',
					'priority'  => 1
				)
			)
		);
		// upgrade sections.
		$manager->add_section(
			new avadanta_Customize_Section_Pro(
				$manager,
				'upgrade-pro',
				array(
					'pro_text' => esc_html__( 'Upgrade To Pro', 'teczilla' ),
					'pro_url'  => 'https://www.avadantathemes.com/product/avadanta-pro/',
					'priority'  => 2
				)
			)
		);
	}


	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'teczilla-customize-controls', trailingslashit( get_template_directory_uri() ) . '/library/upgrade/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'teczilla-customize-controls', trailingslashit( get_template_directory_uri() ) . '/library/upgrade/customize-controls.css' );
	}
}

// Doing this customizer thang!
avadanta_Customize::get_instance();