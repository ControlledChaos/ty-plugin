<?php
/**
 * Settings for the Meta/SEO tab on the Site Settings page.
 *
 * @package    TY_Plugin
 * @subpackage Admin
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TY_Plugin\Admin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Settings for the Meta/SEO tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Meta_SEO {

	/**
	 * Holds the values to be used in the fields callbacks.
	 *
	 * @var array
	 */
	private $options;

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

			// Require the class files.
			$instance->dependencies();

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

		// Register settings sections and fields.
		add_action( 'admin_init', [ $this, 'settings' ] );

	}

	/**
	 * Class dependency files.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function dependencies() {

		// Callbacks for the Meta/SEO tab.
		require TYP_PATH . 'admin/partials/field-callbacks/class-meta-seo-callbacks.php';

	}

	/**
	 * Plugin site settings.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 *
	 * @link  https://codex.wordpress.org/Settings_API
	 */
	public function settings() {

		// Meta/SEO settings section.
		add_settings_section(
			'typ-site-meta-seo',
			__( 'Meta & SEO Settings', 'ty-plugin' ),
			[],
			'typ-site-meta-seo'
		);

		// Disable meta tags.
		add_settings_field(
			'typ_meta_disable',
			__( 'Meta Tags', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Meta_SEO_Callbacks::instance(), 'disable_meta' ],
			'typ-site-meta-seo',
			'typ-site-meta-seo',
			[ esc_html__( 'Disable if your theme includes SEO meta tags or if you plan on using an SEO plugin.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-meta-seo',
			'typ_meta_disable'
		);

		// Organization Schema type.
		add_settings_field(
			'schema_org_type',
			__( 'Organization Type', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Meta_SEO_Callbacks::instance(), 'schema_org_type' ],
			'typ-site-meta-seo',
			'typ-site-meta-seo',
			[ esc_html__( 'Select a category that generally applies to this website.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-meta-seo',
			'schema_org_type'
		);

	}
}

/**
 * Put an instance of the class into a function.
 *
 * @since  1.0.0
 * @access public
 * @return object Returns an instance of the class.
 */
function typ_settings_fields_site_meta_seo() {

	return Settings_Fields_Site_Meta_SEO::instance();

}

// Run an instance of the class.
typ_settings_fields_site_meta_seo();