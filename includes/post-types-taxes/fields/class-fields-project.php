<?php
/**
 * Film + TV post type fields.
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
 * Film + TV post type fields.
 */
class TY_Project_Fields {

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

			// Add the Director field for films only.
			if ( 'film' == $this->get_current_post_type() ) {
				$director = [
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
				];
			} else {
				$director = null;
			}

			acf_add_local_field_group( [
				'key'    => 'group_5948b2c4ec0dd-2',
				'title'  => __( 'Projects', 'ty-plugin' ),
				'fields' =>[
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
						'key'               => 'field_5dceeb578c44c',
						'label'             => __( 'Project Title', 'ty-plugin' ),
						'name'              => 'typ_project_title',
						'type'              => 'text',
						'instructions'      => __( 'This will be displayed to the public, unlike the administrative title above.', 'ty-plugin' ),
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
					$director,
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
						'key'               => 'field_5948b2c4f2479',
						'label'             => 'Vimeo ID',
						'name'              => 'typ_project_vimeo_id',
						'type'              => 'url',
						'instructions'      => 'Enter the basic URL for the Vimeo video.',
						'required'          => 1,
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
				],
				'location' => [
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'film',
						],
					],
					[
						[
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'television',
						],
					]
				],
				'menu_order'            => 0,
				'position'              => 'acf_after_title',
				'style'                 => 'seamless',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => [
					0  => 'the_content',
					1  => 'excerpt',
					2  => 'custom_fields',
					3  => 'discussion',
					4  => 'comments',
					5  => 'revisions',
					6  => 'slug',
					7  => 'author',
					8  => 'format',
					9  => 'page_attributes',
					10 => 'categories',
					11 => 'tags',
					12 => 'send-trackbacks',
					13 => 'featured_image'
				],
				'active'      => 1,
				'description' => __( 'For Film and Television post types.', 'ty-plugin' ),
			] );

		endif;

	}

}

$typ_plugin_project_fields = new TY_Project_Fields;