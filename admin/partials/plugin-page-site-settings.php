<?php
/**
 * About page site settings output.
 *
 * Uses the universal slug partial for admin pages. Set this
 * slug in the core plugin file.
 *
 * @package    TY_Plugin
 * @subpackage Admin\Partials
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TY_Plugin\Admin\Partials;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>
<h3><?php _e( 'Website settings', 'ty-plugin' ); ?></h3>
<?php echo sprintf(
	'<p>%1s <a href="%2s">%3s</a> %4s</p>',
	__( 'The plugin is equipped with', 'ty-plugin' ),
	esc_url( admin_url( '?page=' . TYP_ADMIN_SLUG . '-settings' ) ),
	__( 'an admin page', 'ty-plugin' ),
	__( 'for customizing the user interface of WordPress/ClassicPress, as well as other useful features.', 'ty-plugin' )
 ); ?>
<h3><?php _e( 'Clean Up the Admin', 'ty-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Remove dashboard widgets: WordPress/ClassicPress news, quick press', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Make Menus and Widgets top level menu items', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Remove select admin menu items', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Remove WordPress/ClassicPress logo from admin bar', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Remove access to theme and plugin editors', 'ty-plugin' ); ?></li>
</ul>
<h3><?php _e( 'Enchance the Admin', 'ty-plugin' ); ?></h3>
<ul>
	<li><?php _e( 'Add three admin bar menus', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Add custom post types to the At a Glance widget', 'ty-plugin' ); ?></li>
	<li><?php _e( 'Custom admin footer message', 'ty-plugin' ); ?></li>
</ul>