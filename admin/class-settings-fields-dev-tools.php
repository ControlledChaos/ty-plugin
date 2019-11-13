<?php
/**
 * Settings fields for site development.
 *
 * @package    TY_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Add a "Dev Mode", functionality to be determined.
 * @todo       Finish converting the debug plugin to work with a setting.
 */

namespace TY_Plugin\Plugin_Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings fields for site development.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Dev_Tools {

	/**
	 * Instance of the class
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object Returns the instance.
	 */
	public static function instance() {

		// Varialbe for the instance to be used outside the class.
		static $instance = null;

		if ( is_null( $instance ) ) {

			// Set variable for new instance.
			$instance = new self;

		}

		// Return the instance.
		return $instance;

	}

	/**
	 * Constructor method
	 *
	 * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

		// Start settings for page.
		add_action( 'admin_init', [ $this, 'dev_settings' ] );

	}

	/**
	 * Settings for the development page.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function dev_settings() {

		/**
		 * Site development.
		 */

		// Site development settings section.
		add_settings_section(
			'typ-site-development-general',
			__( 'General Website Development', 'ty-plugin' ),
			[ $this, 'site_development_section_callback' ],
			'typ-site-development-general'
		);

		// Site development settings field.
		add_settings_field(
			'typ_site_development',
			__( 'Debug Mode', 'ty-plugin' ),
			[ $this, 'typ_site_development_callback' ],
			'typ-site-development-general',
			'typ-site-development-general',
			[ esc_html__( 'Put the site in Debug Mode via wp-config.', 'ty-plugin' ) ]
		);

		// Register the Site development field.
		register_setting(
			'typ-site-development-general',
			'typ_site_development'
		);

		// Live theme test settings field.
		add_settings_field(
			'typ_theme_test',
			__( 'Live Theme Test', 'ty-plugin' ),
			[ $this, 'typ_theme_test_callback' ],
			'typ-site-development-general',
			'typ-site-development-general',
			[ esc_html__( 'Find the theme test page under Appearances.', 'ty-plugin' ) ]
		);

		// Register the live theme test field.
		register_setting(
			'typ-site-development-general',
			'typ_theme_test'
		);

		// Customizer reset settings field.
		add_settings_field(
			'typ_customizer_reset',
			__( 'Customizer Reset', 'ty-plugin' ),
			[ $this, 'typ_customizer_reset_callback' ],
			'typ-site-development-general',
			'typ-site-development-general',
			[ esc_html__( 'Add a reset button to the Customizer for getting a fresh start.', 'ty-plugin' ) ]
		);

		// Register the Customizer reset field.
		register_setting(
			'typ-site-development-general',
			'typ_customizer_reset'
		);

		// Database reset settings field.
		add_settings_field(
			'typ_database_reset',
			__( 'Database Reset', 'ty-plugin' ),
			[ $this, 'typ_database_reset_callback' ],
			'typ-site-development-general',
			'typ-site-development-general',
			[ esc_html__( 'Add a tool to reset select tables or all of the database.', 'ty-plugin' ) ]
		);

		// Register the database reset field.
		register_setting(
			'typ-site-development-general',
			'typ_database_reset'
		);

		// RTL (right to left) test settings field.
		add_settings_field(
			'typ_rtl_test',
			__( 'RTL (Right to Left) Test', 'ty-plugin' ),
			[ $this, 'typ_rtl_test_callback' ],
			'typ-site-development-general',
			'typ-site-development-general',
			[ esc_html__( 'Add RTL button to the toolbar to test layout in languages that read right to left.', 'ty-plugin' ) ]
		);

		// Register the RTL test field.
		register_setting(
			'typ-site-development-general',
			'typ_rtl_test'
		);

	}

	/**
	 * Site development section callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings section array.
	 * @return string Returns the section HTML.
	 */
	public function site_development_section_callback( $args ) {

		$html = sprintf(
			'<p>%1s</p>',
			esc_html__( '', 'ty-plugin' )
		);

		echo $html;

	}

	/**
	 * Site development field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function typ_site_development_callback( $args ) {

		$option = get_option( 'typ_site_development' );

		$html   = '<p><input type="checkbox" id="typ_site_development" name="typ_site_development" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= '<label for="typ_site_development"> '  . $args[0] . '</label></p>';

		echo $html;

	}

	/**
	 * Live theme test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function typ_theme_test_callback( $args ) {

		$option = get_option( 'typ_theme_test' );

		$html   = '<p><input type="checkbox" id="typ_theme_test" name="typ_theme_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="typ_theme_test">%1s</label></p>',
			$args[0]
		 );

		echo $html;

	}

	/**
	 * Customizer reset field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function typ_customizer_reset_callback( $args ) {

		$option = get_option( 'typ_customizer_reset' );

		$html   = '<p><input type="checkbox" id="typ_customizer_reset" name="typ_customizer_reset" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="typ_customizer_reset">%1s</label></p>',
			$args[0]
		 );

		echo $html;

	}

	/**
	 * Database reset field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function typ_database_reset_callback( $args ) {

		$option = get_option( 'typ_database_reset' );

		$html   = '<p><input type="checkbox" id="typ_database_reset" name="typ_database_reset" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="typ_database_reset">%1s</label></p>',
			$args[0]
		 );

		echo $html;

	}

	/**
	 * RTL test field callback.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  array $args Holds the settings field array.
	 * @return string Returns the field HTML.
	 */
	public function typ_rtl_test_callback( $args ) {

		$option = get_option( 'typ_rtl_test' );

		$html   = '<p><input type="checkbox" id="typ_rtl_test" name="typ_rtl_test" value="1" ' . checked( 1, $option, false ) . '/>';
		$html  .= sprintf(
			'<label for="typ_rtl_test">%1s</label> <a href="%2s" target="_blank" class="tooltip" title="%3s"><span class="dashicons dashicons-editor-help"></span></a></p>',
			$args[0],
			esc_url( 'https://codex.wordpress.org/Right_to_Left_Language_Support' ),
			__( 'Read more in the WordPress Codex (also applies to ClassicPress)', 'ty-plugin' )
		 );

		echo $html;

	}

}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function typ_settings_fields_dev_tools() {

	return Settings_Fields_Dev_Tools::instance();

}

// Run an instance of the class.
typ_settings_fields_dev_tools();