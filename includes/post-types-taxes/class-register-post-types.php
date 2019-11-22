<?php
/**
 * Register post types.
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
 * Register post types.
 *
 * @since  1.0.0
 * @access public
 */
final class Post_Types_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom post types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom post types.
     *
     * Note for WordPress 5.0 or greater:
     * If you want your post type to adopt the block edit_form_image_editor
     * rather than using the classic editor then set `show_in_rest` to `true`.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
		 * Post Type: Film+TV
		 */

		$labels = [
			'name'                  => __( 'Films', 'ty-plugin' ),
			'singular_name'         => __( 'Film Project', 'ty-plugin' ),
			'menu_name'             => __( 'Films', 'ty-plugin' ),
			'all_items'             => __( 'All Films', 'ty-plugin' ),
			'add_new'               => __( 'Add New', 'ty-plugin' ),
			'add_new_item'          => __( 'Add New Film Project', 'ty-plugin' ),
			'edit_item'             => __( 'Edit Project', 'ty-plugin' ),
			'new_item'              => __( 'New Film Project', 'ty-plugin' ),
			'view_item'             => __( 'View Project', 'ty-plugin' ),
			'view_items'            => __( 'View Films', 'ty-plugin' ),
			'search_items'          => __( 'Search Films', 'ty-plugin' ),
			'not_found'             => __( 'No Films Found', 'ty-plugin' ),
			'not_found_in_trash'    => __( 'No Films Found in Trash', 'ty-plugin' ),
			'featured_image'        => __( 'Featured image for this project', 'ty-plugin' ),
			'set_featured_image'    => __( 'Set featured image for this project', 'ty-plugin' ),
			'remove_featured_image' => __( 'Remove featured image for this project', 'ty-plugin' ),
			'use_featured_image'    => __( 'Use as featured image for this project', 'ty-plugin' ),
			'archives'              => __( 'Film archives', 'ty-plugin' ),
			'insert_into_item'      => __( 'Insert into Project', 'ty-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Project', 'ty-plugin' ),
			'filter_items_list'     => __( 'Filter Films', 'ty-plugin' ),
			'items_list_navigation' => __( 'Films list navigation', 'ty-plugin' ),
			'items_list'            => __( 'Films list', 'ty-plugin' ),
			'attributes'            => __( 'Film Attributes', 'ty-plugin' ),
			'parent_item_colon'     => __( 'Parent Project', 'ty-plugin' ),
		];

		$args = [
			'label'               => __( 'Films', 'ty-plugin' ),
			'labels'              => $labels,
			'description'         => __( '', 'ty-plugin' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'films',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-format-video',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
        ];

		register_post_type(
            'film',
            $args
        );

		/**
		 * Post Type: Television
		 */

		$labels = [
			'name'                  => __( 'Television', 'ty-plugin' ),
			'singular_name'         => __( 'TV Show', 'ty-plugin' ),
			'menu_name'             => __( 'Television', 'ty-plugin' ),
			'all_items'             => __( 'All TV Shows', 'ty-plugin' ),
			'add_new'               => __( 'Add New', 'ty-plugin' ),
			'add_new_item'          => __( 'Add New TV Show', 'ty-plugin' ),
			'edit_item'             => __( 'Edit TV Show', 'ty-plugin' ),
			'new_item'              => __( 'New TV Show', 'ty-plugin' ),
			'view_item'             => __( 'View TV Show', 'ty-plugin' ),
			'view_items'            => __( 'View TV Shows', 'ty-plugin' ),
			'search_items'          => __( 'Search TV Shows', 'ty-plugin' ),
			'not_found'             => __( 'No Shows Found', 'ty-plugin' ),
			'not_found_in_trash'    => __( 'No Shows Found in Trash', 'ty-plugin' ),
			'featured_image'        => __( 'Featured image for this show', 'ty-plugin' ),
			'set_featured_image'    => __( 'Set featured image for this show', 'ty-plugin' ),
			'remove_featured_image' => __( 'Remove featured image for this show', 'ty-plugin' ),
			'use_featured_image'    => __( 'Use as featured image for this show', 'ty-plugin' ),
			'archives'              => __( 'Television archives', 'ty-plugin' ),
			'insert_into_item'      => __( 'Insert into Show', 'ty-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Show', 'ty-plugin' ),
			'filter_items_list'     => __( 'Filter Shows', 'ty-plugin' ),
			'items_list_navigation' => __( 'Television list navigation', 'ty-plugin' ),
			'items_list'            => __( 'Television list', 'ty-plugin' ),
			'attributes'            => __( 'Show Attributes', 'ty-plugin' ),
			'parent_item_colon'     => __( 'Parent Show', 'ty-plugin' ),
		];

		$args = [
			'label'               => __( 'Television', 'ty-plugin' ),
			'labels'              => $labels,
			'description'         => __( '', 'ty-plugin' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'show_ui'             => true,
			'show_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'show_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'television',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-desktop',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
		];
		register_post_type(
            'television',
            $args
		);

		/**
		 * Post Type: Clips
		 */

		$labels = [
			'name'                  => __( 'Clips', 'ty-plugin' ),
			'singular_name'         => __( 'Clip', 'ty-plugin' ),
			'menu_name'             => __( 'Clips', 'ty-plugin' ),
			'all_items'             => __( 'All Clips', 'ty-plugin' ),
			'add_new'               => __( 'Add New', 'ty-plugin' ),
			'add_new_item'          => __( 'Add New Clip', 'ty-plugin' ),
			'edit_item'             => __( 'Edit Clip', 'ty-plugin' ),
			'new_item'              => __( 'New Clip', 'ty-plugin' ),
			'view_item'             => __( 'View Clip', 'ty-plugin' ),
			'view_items'            => __( 'View Clips', 'ty-plugin' ),
			'search_items'          => __( 'Search Clips', 'ty-plugin' ),
			'not_found'             => __( 'No Clips Found', 'ty-plugin' ),
			'not_found_in_trash'    => __( 'No Clips Found in Trash', 'ty-plugin' ),
			'featured_image'        => __( 'Featured image for this clip', 'ty-plugin' ),
			'set_featured_image'    => __( 'Set featured image for this clip', 'ty-plugin' ),
			'remove_featured_image' => __( 'Remove featured image for this clip', 'ty-plugin' ),
			'use_featured_image'    => __( 'Use as featured image for this clip', 'ty-plugin' ),
			'archives'              => __( 'Clips archives', 'ty-plugin' ),
			'insert_into_item'      => __( 'Insert into Clip', 'ty-plugin' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Clip', 'ty-plugin' ),
			'filter_items_list'     => __( 'Filter Clips', 'ty-plugin' ),
			'items_list_navigation' => __( 'Clips list navigation', 'ty-plugin' ),
			'items_list'            => __( 'Clips list', 'ty-plugin' ),
			'attributes'            => __( 'Clip Attributes', 'ty-plugin' ),
			'parent_item_colon'     => __( 'Parent Clip', 'ty-plugin' ),
		];

		$args = [
			'label'               => __( 'Clips', 'ty-plugin' ),
			'labels'              => $labels,
			'description'         => __( '', 'ty-plugin' ),
			'public'              => true,
			'publicly_queryable'  => true,
			'clip_ui'             => true,
			'clip_in_rest'        => false,
			'rest_base'           => '',
			'has_archive'         => true,
			'clip_in_menu'        => true,
			'exclude_from_search' => false,
			'capability_type'     => 'post',
			'map_meta_cap'        => true,
			'hierarchical'        => false,
			'rewrite'             => [
				'slug'       => 'clips',
				'with_front' => true
			],
			'query_var'           => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-paperclip',
			'supports'            => [
				'title',
				'page-attributes',
				'thumbnail'
			]
		];
		register_post_type(
            'clip',
            $args
        );

    }

}

// Run the class.
$typ_post_types = new Post_Types_Register;