<?php
/**
 * Register taxonomies.
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
 * Register taxonomies.
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

        // Register custom taxonomies.
		add_action( 'init', [ $this, 'register' ] );

	}

    /**
     * Register custom taxonomies.
     *
     * @since  1.0.0
	 * @access public
	 * @return void
     */
    public function register() {

        /**
         * Taxonomy: Sample taxonomy (Taxonomy).
         *
         * Renaming:
         * Search case "Taxonomy" and replace with your post type singular name.
         * Search case "Taxonomies" and replace with your post type plural name.
         * Search case "typ_taxonomy" and replace with your taxonomy database name.
         * Search case "taxonomies" and replace with your taxonomy permalink slug.
         */

        $labels = [
            'name'                       => __( 'Taxonomies', 'ty-plugin' ),
            'singular_name'              => __( 'Taxonomy', 'ty-plugin' ),
            'menu_name'                  => __( 'Taxonomy', 'ty-plugin' ),
            'all_items'                  => __( 'All Taxonomies', 'ty-plugin' ),
            'edit_item'                  => __( 'Edit Taxonomy', 'ty-plugin' ),
            'view_item'                  => __( 'View Taxonomy', 'ty-plugin' ),
            'update_item'                => __( 'Update Taxonomy', 'ty-plugin' ),
            'add_new_item'               => __( 'Add New Taxonomy', 'ty-plugin' ),
            'new_item_name'              => __( 'New Taxonomy', 'ty-plugin' ),
            'parent_item'                => __( 'Parent Taxonomy', 'ty-plugin' ),
            'parent_item_colon'          => __( 'Parent Taxonomy', 'ty-plugin' ),
            'popular_items'              => __( 'Popular Taxonomies', 'ty-plugin' ),
            'separate_items_with_commas' => __( 'Separate Taxonomies with commas', 'ty-plugin' ),
            'add_or_remove_items'        => __( 'Add or Remove Taxonomies', 'ty-plugin' ),
            'choose_from_most_used'      => __( 'Choose from the most used Taxonomies', 'ty-plugin' ),
            'not_found'                  => __( 'No Taxonomies Found', 'ty-plugin' ),
            'no_terms'                   => __( 'No Taxonomies', 'ty-plugin' ),
            'items_list_navigation'      => __( 'Taxonomies List Navigation', 'ty-plugin' ),
            'items_list'                 => __( 'Taxonomies List', 'ty-plugin' )
        ];

        $options = [
            'label'              => __( 'Taxonomies', 'ty-plugin' ),
            'labels'             => $labels,
            'public'             => true,
            'hierarchical'       => false,
            'label'              => 'Taxonomies',
            'show_ui'            => true,
            'show_in_menu'       => true,
            'show_in_nav_menus'  => true,
            'query_var'          => true,
            'rewrite'            => [
                'slug'         => 'taxonomies',
                'with_front'   => true,
                'hierarchical' => false,
            ],
            'show_admin_column'  => true,
            'show_in_rest'       => true,
            'rest_base'          => 'taxonomies',
            'show_in_quick_edit' => true
        ];

        /**
         * Register the taxonomy
         */
        register_taxonomy(
            'typ_taxonomy',
            [
                'typ_post_type' // Change to your post type name.
            ],
            $options
        );

    }

}

// Run the class.
$typ_taxes = new Taxes_Register;