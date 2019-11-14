<?php
/**
 * Film + TV post type fields.
 *
 * @package WordPress
 * @subpackage ty-plugin
 * @since ty-plugin 1.0.0
 */

namespace TimS_Plugin;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Film + TV post type fields.
 */
class Suhrstedt_Features {

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
				'key'    => 'group_5948b2c4ec0dd-2',
				'title'  => __( 'Features', 'ty-plugin' ),
				'fields' =>[
					[
						'key'               => 'field_598256325eb95',
						'label'             => __( 'Video', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 1,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5bd1ff0b888fc',
						'label'             => __( 'Required', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'message',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'A Vimeo video link is required before posting this feature.', 'ty-plugin' ),
						'new_lines'         => 'wpautop',
						'esc_html'          => 0,
					],
					[
						'key'               => 'field_5948b2c4f2479',
						'label'             => 'Vimeo ID',
						'name'              => 'typ_project_vimeo_id',
						'type'              => 'url',
						'instructions'      => 'Enter the basic URL for the Vimeo video.',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'https://vimeo.com/123456789',
					],
					[
						'key'               => 'field_5982564d5eb96',
						'label'             => __( 'Images', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5bd1ff56888fd',
						'label'             => __( 'Optional', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'message',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'All project image fields are optional.', 'ty-plugin' ),
						'new_lines'         => 'wpautop',
						'esc_html'          => 0,
					],
					[
						'key'               => 'field_5a34d017a35a7',
						'label'             => __( 'Project Image', 'ty-plugin' ),
						'name'              => 'typ_project_image',
						'type'              => 'image',
						'instructions'      => __( 'If no image is selected then the screenshot from Vimeo will be used. This can be used to replace an inferior image provided by Vimeo. Minimum 960 X 540 pixels.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'return_format'     => 'array',
						'preview_size'      => 'video-small',
						'library'           => 'all',
						'min_width'         => 960,
						'min_height'        => 540,
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => 'jpg, jpeg, png',
					],
					[
						'key'               => 'field_5948b2c4f2639',
						'label'             => __( 'Project Gallery', 'ty-plugin' ),
						'name'              => 'typ_project_gallery',
						'type'              => 'gallery',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'min'               => '',
						'max'               => '',
						'insert'            => 'append',
						'library'           => 'all',
						'min_width'         => '',
						'min_height'        => '',
						'min_size'          => '',
						'max_width'         => '',
						'max_height'        => '',
						'max_size'          => '',
						'mime_types'        => '',
					],
					[
						'key'               => 'field_5982561e5eb94',
						'label'             => __( 'Info', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'tab',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'placement'         => 'top',
						'endpoint'          => 0,
					],
					[
						'key'               => 'field_5bd1ffde888fe',
						'label'             => __( 'Optional', 'ty-plugin' ),
						'name'              => '',
						'type'              => 'message',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'message'           => __( 'All project info fields are optional.', 'ty-plugin' ),
						'new_lines'         => 'wpautop',
						'esc_html'          => 0,
					],
					[
						'key'               => 'field_5948b2c4f2275',
						'label'             => __( 'Director', 'ty-plugin' ),
						'name'              => 'typ_project_director',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the director.', 'ty-plugin' ),
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
						'key'               => 'field_59825e49192ba',
						'label'             => __( 'Client', 'ty-plugin' ),
						'name'              => 'typ_project_client',
						'type'              => 'text',
						'instructions'      => __( 'Enter only the name of the production company.', 'ty-plugin' ),
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
						'key'               => 'field_5948b4fe4177e',
						'label'             => __( 'IMDb Page', 'ty-plugin' ),
						'name'              => 'typ_project_imdb_page',
						'type'              => 'url',
						'instructions'      => __( 'Paste the URL (web address) of the main page on IMBd.', 'ty-plugin' ),
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => [
							'width' => '',
							'class' => '',
							'id'    => '',
						],
						'default_value'     => '',
						'placeholder'       => 'http://www.imdb.com/title/tt1234567/',
					],
					[
						'key'               => 'field_5948b699882a3',
						'label'             => __( 'Description', 'ty-plugin' ),
						'name'              => 'typ_project_description',
						'type'              => 'textarea',
						'instructions'      => __( 'Enter a brief description.', 'ty-plugin' ),
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
						'rows'              => '',
						'new_lines'         => 'wpautop',
					],
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'film',
						],
					],
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'permalink',
					1  => 'the_content',
					2  => 'excerpt',
					3  => 'custom_fields',
					4  => 'discussion',
					5  => 'comments',
					6  => 'revisions',
					7  => 'slug',
					8  => 'author',
					9  => 'format',
					10 => 'page_attributes',
					11 => 'categories',
					12 => 'tags',
					13 => 'send-trackbacks',
					14 => 'featured_image'
				],
				'active'                => 1,
				'description'           => __( 'For the Film post type.', 'ty-plugin' ),
			] );

		endif;

	}

}

$typ_plugin_features_fields = new Suhrstedt_Features;