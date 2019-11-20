<?php
/**
 * Register types.
 *
 * @package    TY_Plugin
 * @subpackage Includes\Post_Types_Taxes
 *
 * @since      1.0.0
 * @author     Greg Sweet <greg@ccdzine.com>
 *
 * @link       https://codex.wordpress.org/Function_Reference/register_taxonomy
 */

namespace TY_Plugin\Includes\Post_Types_Taxes;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Register types.
 *
 * @since  1.0.0
 * @access public
 */
final class Taxes_Register {

    /**
	 * Constructor magic method.
     *
     * @since  1.0.0
	 * @access public
	 * @return self
	 */
	public function __construct() {

        // Register custom types.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom types.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Project Type
         */

        $labels = [
            'name'                       => __( 'Types', 'ty-plugin' ),
            'singular_name'              => __( 'Type', 'ty-plugin' ),
            'menu_name'                  => __( 'Type', 'ty-plugin' ),
            'all_items'                  => __( 'All Types', 'ty-plugin' ),
            'edit_item'                  => __( 'Edit Type', 'ty-plugin' ),
            'view_item'                  => __( 'View Type', 'ty-plugin' ),
            'update_item'                => __( 'Update Type', 'ty-plugin' ),
            'add_new_item'               => __( 'Add New Type', 'ty-plugin' ),
            'new_item_name'              => __( 'New Type', 'ty-plugin' ),
            'parent_item'                => __( 'Parent Type', 'ty-plugin' ),
            'parent_item_colon'          => __( 'Parent Type', 'ty-plugin' ),
            'popular_items'              => __( 'Popular Types', 'ty-plugin' ),
            'separate_items_with_commas' => __( 'Separate Types with commas', 'ty-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Types', 'ty-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Types', 'ty-plugin' ),
            'not_found'                  => __( 'No Types Found', 'ty-plugin' ),
            'no_terms'                   => __( 'No Types', 'ty-plugin' ),
            'items_list_navigation'      => __( 'Types List Navigation', 'ty-plugin' ),
            'items_list'                 => __( 'Types List', 'ty-plugin' )
        ];

        $options = [
            'label'              => __( 'Types', 'ty-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Types',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'types',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'types',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'project_type',
            [
				'project',
				'clip'
            ],
            $options
        );

    }

}

// Run the class.
$typ_taxes = new Taxes_Register;