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
            'name'                       => __( 'Clip Types', 'ty-plugin' ),
            'singular_name'              => __( 'Clip Type', 'ty-plugin' ),
            'menu_name'                  => __( 'Clip Types', 'ty-plugin' ),
            'all_items'                  => __( 'Clip Types', 'ty-plugin' ),
            'edit_item'                  => __( 'Edit Clip Type', 'ty-plugin' ),
            'view_item'                  => __( 'View Clip Type', 'ty-plugin' ),
            'update_item'                => __( 'Update Clip Type', 'ty-plugin' ),
            'add_new_item'               => __( 'Add New Clip Type', 'ty-plugin' ),
            'new_item_name'              => __( 'New Clip Type', 'ty-plugin' ),
            'parent_item'                => __( 'Parent Clip Type', 'ty-plugin' ),
            'parent_item_colon'          => __( 'Parent Clip Type', 'ty-plugin' ),
            'popular_items'              => __( 'Popular Clip Types', 'ty-plugin' ),
            'separate_items_with_commas' => __( 'Separate Clip Types with commas', 'ty-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Clip Types', 'ty-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used clip types', 'ty-plugin' ),
            'not_found'                  => __( 'No Clip Types Found', 'ty-plugin' ),
            'no_terms'                   => __( 'No Clip Types', 'ty-plugin' ),
            'items_list_navigation'      => __( 'Clip Types List Navigation', 'ty-plugin' ),
            'items_list'                 => __( 'Clip Types List', 'ty-plugin' )
        ];

        $options = [
            'label'              => __( 'Clip Types', 'ty-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Clip Types',
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
            'show_in_rest'       => false,
            'rest_base'          => 'types',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'clip_type',
            [
				'clip'
            ],
            $options
        );

    }

}

// Run the class.
$typ_taxes = new Taxes_Register;