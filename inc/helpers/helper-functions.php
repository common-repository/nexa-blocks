<?php
/**
 * Helper functions for Nexa Blocks
 * 
 * @package Nexa_Blocks
 * 
 * @since 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( ! class_exists( 'Nexa_Blocks_Helpers' ) ) {

    class Nexa_Blocks_Helpers {

        
        /**
         * Get Post Types 
         * 
         * @since 1.0.0
         * 
         * @return array
         */
        public static function nexa_post_types() {
            $post_types = get_post_types( 
                [ 
                    'public'            => true,
                    'show_in_nav_menus' => true
                ], 
                'objects' 
            );
            $types = [];
            foreach( $post_types as $type ) {
                $types[] = [
                    'value' => $type->name,
                    'label' => $type->label
                ];
            }

            // exclude core post types
            $exclude = [ 'attachment', 'revision', 'nav_menu_item' ];

            $types = array_filter( $types, function( $type ) use ( $exclude ) {
                return ! in_array( $type['value'], $exclude );
            });
            return $types;
        }

        /**
         * Get Taxonomies
         * 
         * @since 1.0.0
         * 
         * @return array
         */
        public static function nexa_taxonomies() {
            $get_tax_object = get_taxonomies([], 'objects');
            $exclude_tax    = self::get_excluded_taxonomy();
            foreach ($exclude_tax as $_tax) {
                unset($get_tax_object[$_tax]);
            }
            return $get_tax_object;
        }

        /**
         * Get Excluded Taxonomy
         * 
         * @since 1.0.0
         * 
         * @return array
         */
        public static function get_excluded_taxonomy() {
            return apply_filters('nexa_exclude_taxonomies', [
                'post_format',
                'nav_menu',
                'link_category',
                'wp_theme',
                'elementor_library_type',
                'elementor_library_type',
                'elementor_library_category',
                'product_visibility',
                'product_shipping_class',
                'product_type'
            ]);
        }

        /**
         * Get terms by taxonomy
         * 
         * @since 1.0.0
         * 
         * @param string $taxonomy
         * 
         * @return array
         */
        public static function nexa_terms_by_taxonomy( $taxonomy = 'category' ) {
            $terms = get_terms( [
                'taxonomy'   => $taxonomy,
                'hide_empty' => true
            ] );
            $result = [];
            foreach( $terms as $term ) {
                $result[] = [
                    'value' => $term->term_id,
                    'label' => $term->name
                ];
            }
            return $result; 
        }

        /**
         * Get Post Authors
         * 
         * @since 1.0.0
         * 
         * @return array
         */
        public static function nexa_authors() {
            // Fetch users with the capability to edit posts, which includes authors
            $user_query = new WP_User_Query( [
                'capability' => 'edit_posts'
            ] );
            $authors = $user_query->get_results();
            $result  = [];
        
            foreach( $authors as $author ) {
                $result[] = [
                    'value' => $author->ID,
                    'label' => $author->display_name
                ];
            }
        
            return $result;
        }

        /**
         * Get Blocks
         * 
         * @since 1.0.0
         * @return array
         */
        public static function get_nexa_blocks() {
            return require trailingslashit(NEXA_PLUGIN_DIR) . 'inc/blocks/blocks.php';
        }

        /**
         * Get Modules 
         * 
         * @since 1.0.0
         * @return array
         */
        public static function get_nexa_modules() {
            return require trailingslashit(NEXA_PLUGIN_DIR) . 'inc/modules/modules.php';
        }

        /**
         * Get Blocks APIs
         * 
         * @since 1.0.0
         * @return array
         */
        public static function get_nexa_apis() {
            return require trailingslashit(NEXA_PLUGIN_DIR) . 'inc/blocks-api/apis.php';
        }

    }

}

// Initialize Nexa Blocks Helpers 
new Nexa_Blocks_Helpers(); 