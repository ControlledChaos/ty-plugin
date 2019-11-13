<?php
/**
 * Settings for the Admin Pages tab on the Site Settings page.
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
 * Settings for the Admin Pages tab.
 *
 * @since  1.0.0
 * @access public
 */
class Settings_Fields_Site_Admin_Pages {

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

		// Callbacks for the Admin Pages tab.
		require TYP_PATH . 'admin/partials/field-callbacks/class-admin-pages-callbacks.php';

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

		// Admin pages settings section.
		add_settings_section(
			'typ-site-admin-pages',
			__( 'Admin Pages Settings', 'ty-plugin' ),
			[],
			'typ-site-admin-pages'
		);

		// Use the admin header.
		add_settings_field(
			'typ_use_admin_header',
			__( 'Admin Header', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'admin_header' ],
			'typ-site-admin-pages',
			'typ-site-admin-pages',
			[ esc_html__( 'Add the site title, site tagline, and a nav menu to the top of admin pages.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-admin-pages',
			'typ_use_admin_header'
		);

		// Use custom sort order.
		add_settings_field(
			'typ_use_custom_sort_order',
			__( 'Drag & Drop Sort Order', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'custom_sort_order' ],
			'typ-site-admin-pages',
			'typ-site-admin-pages',
			[ esc_html__( 'Add drag & drop sort order functionality to post types and taxonomies.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-admin-pages',
			'typ_use_custom_sort_order'
		);

		// Admin footer credit.
		add_settings_field(
			'typ_footer_credit',
			__( 'Admin Footer Credit', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_credit' ],
			'typ-site-admin-pages',
			'typ-site-admin-pages',
			[ esc_html__( 'The "developed by" credit.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-admin-pages',
			'typ_footer_credit'
		);

		// Admin footer link.
		add_settings_field(
			'typ_footer_link',
			__( 'Admin Footer Link', 'ty-plugin' ),
			[ Partials\Field_Callbacks\Admin_Pages_Callbacks::instance(), 'footer_link' ],
			'typ-site-admin-pages',
			'typ-site-admin-pages',
			[ esc_html__( 'Link to the website devoloper.', 'ty-plugin' ) ]
		);

		register_setting(
			'typ-site-admin-pages',
			'typ_footer_link'
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
function typ_settings_fields_site_admin_pages() {

	return Settings_Fields_Site_Admin_Pages::instance();

}

// Run an instance of the class.
typ_settings_fields_site_admin_pages();