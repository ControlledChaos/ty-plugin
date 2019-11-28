<?php
/**
 * Clip post type fields.
 *
 * @package    TY_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 */

namespace TY_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Clip post type fields.
 */
class TY_Clip_Fields {

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since	   1.0.0
	 * @param      string    $ty-plugin
	 * @param      string    $version
	 */
    public function __construct() {

        // Register fields.
    	$this->fields();

	}

	/**
	 * Get post type context
	 *
	 * @since  1.0.0
	 * @access public
	 * @return mixed
	 */
	public function get_current_post_type() {

		// Access global variables.
		global $post, $typenow, $current_screen;

		// Return the post type for various scenarios.
		if ( $post && $post->post_type ) {
			return $post->post_type;
		} elseif ( $typenow ) {
			return $typenow;
		} elseif ( $current_screen && $current_screen->post_type ) {
			return $current_screen->post_type;
		} elseif ( isset( $_REQUEST['post_type'] ) ) {
			return sanitize_key( $_REQUEST['post_type'] );
		}

		// Return nothing if conditions aren't met.
		return null;

	}

	/**
	 * Register fields
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5dd7b2644ed3c',
				'title'  => __( 'Clips', 'ty-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5dd7b30c9914e',
						'label'             => __( 'Title', 'ty-plugin' ),
						'name'              => 'clip_title',
						'type'              => 'text',
						'instructions'      => __( 'This will be displayed to the public. The name in the big title bar above is for administrative purposes, for you to identify clips here in the admin pages.', 'ty-plugin' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'prepend'           => '',
						'append'            => '',
						'maxlength'         => '',
					],
					[
						'key'               => 'field_5dd7b386a0f6a',
						'label'             => __( 'Vimeo URL', 'ty-plugin' ),
						'name'              => 'clip_vimeo_url',
						'type'              => 'url',
						'instructions'      => __( '', 'ty-plugin' ),
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
					[
						'key'               => 'field_5ddfdf85afd86',
						'label'             => __( 'Video Placeholder', 'ty-plugin' ),
						'name'              => 'video_placeholder',
						'type'              => 'image',
						'instructions'      => __( 'This can be used instead of the Vimeo placeholder and can be cropped via the media library. Minimum of 1280 pixels wide by 720 pixels high.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'small-video',
						'library'           => 'all',
						'min_width'         => 1280,
						'min_height'        => 720,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5dd7b3a5a0f6b',
						'label'             => __( 'Description', 'ty-plugin' ),
						'name'              => 'clip_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Keep it brief for concerns of layout space. For longer descriptions use the information box below, which will appear on the individual clip page.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
						'maxlength'         => '',
						'rows'              => 3,
						'new_lines'         => '',
					],
					[
						'key'               => 'field_5dd7b46cc2e8d',
						'label'             => __( 'Project Link', 'ty-plugin' ),
						'name'              => 'clip_project_link',
						'type'              => 'page_link',
						'instructions'      => __( 'Link to a film or television project from which this clip was taken.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'post_type'         => [
							0 => 'film',
							1 => 'television',
						],
						'taxonomy'          => '',
						'allow_null'        => 1,
						'allow_archives'    => 0,
						'multiple'          => 0,
					],
					[
						'key'               => 'field_5dd7b514c2e8e',
						'label'             => __( 'Information', 'ty-plugin' ),
						'name'              => 'clip_info',
						'type'              => 'wysiwyg',
						'instructions'      => __( '', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper' => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'tabs'              => 'all',
						'toolbar'           => 'full',
						'media_upload'      => 1,
						'delay'             => 0,
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'clip',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => __( 'For the Clips post type.', 'ty-plugin' ),
			] );

		endif;

	}

}

$typ_plugin_clip_fields = new TY_Clip_Fields;