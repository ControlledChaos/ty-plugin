<?php
/**
 * Content for the Welcome Panel help tab.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    TY_Plugin
 * @subpackage Admin\Partials\Help
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @todo       Change this content when the custom welcome
 *             panel is ready to use.
 */

namespace TY_Plugin\Admin\Dashboard\Partials\Help;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Welcome Panel', 'ty-plugin' ); ?></h3>
<p><?php _e( 'A custom, widgetized welcome panel is coming soon.', 'ty-plugin' ); ?></p>
<?php
echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'View options on the', 'ty-plugin' ),
	esc_url( 'http://localhost/controlledchaos/wp-admin/index.php?page=' . TYP_ADMIN_SLUG . '-settings' ),
	__( 'Dashboard Settings', 'ty-plugin' ),
	__( 'page.', 'ty-plugin' )
); ?>