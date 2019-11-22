<?php
/**
 * Project media attachment fields.
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
 * Project media attachment fields.
 */
class TY_Project_Media_Fields {

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
	 * Register fields.
	 */
	public function fields() {

		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group( [
				'key'    => 'group_5a41085c0d0b9',
				'title'  => __( 'Project Image Info', 'ty-plugin' ),
				'fields' => [
					[
						'key'               => 'field_5a410a34d7489',
						'label'             => __( 'Project Title', 'ty-plugin' ),
						'name'              => 'typ_project_media_title',
						'type'              => 'text',
						'instructions'      => __( '', 'ty-plugin' ),
						'required'          => 0,
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
						'key'               => 'field_5a410b5720482',
						'label'             => __( 'Project Director', 'ty-plugin' ),
						'name'              => 'typ_project_media_director',
						'type'              => 'text',
						'instructions'      => __( 'Just the name. Prefixes are added by the page templates.', 'ty-plugin' ),
						'required'          => 0,
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
						'key'               => 'field_5a410b7d20483',
						'label'             => __( 'Project Info', 'ty-plugin' ),
						'name'              => 'typ_project_media_info',
						'type'              => 'textarea',
						'instructions'      => __( '', 'ty-plugin' ),
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
						'rows'              => 6,
						'new_lines'         => 'wpautop',
					],
					[
						'key'               => 'field_5a4108e86f50a',
						'label'             => __( 'Project Page', 'ty-plugin' ),
						'name'              => 'typ_project_media_page',
						'type'              => 'post_object',
						'instructions'      => __( 'Gets the link to the page as well as the associated video.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'post_type'         => [
							0 => 'film',
							1 => 'typ_commercials',
							2 => 'typ_videos',
						],
						'taxonomy'          => [],
						'allow_null'        => 0,
						'multiple'          => 0,
						'return_format'     => 'id',
						'ui'                => 1,
					],
					[
						'key'               => 'field_5a410c0520484',
						'label'             => __( 'Project IMDb', 'ty-plugin' ),
						'name'              => 'typ_project_media_imdb',
						'type'              => 'url',
						'instructions'      => __( '', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => '',
					],
				],
				'location' => [
					[
						[
							'param'    => 'attachment',
							'operator' => '==',
							'value'    => 'image/jpeg',
						],
					],
					[
						[
							'param'    => 'attachment',
							'operator' => '==',
							'value'    => 'image/png',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => 1,
				'description'           => __( 'For image metadata attached to project post types.', 'ty-plugin' ),
			] );

		endif;

	}

}

$typ_plugin_project_media_fields = new TY_Project_Media_Fields;
