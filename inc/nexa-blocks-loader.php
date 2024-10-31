<?php 
/**
 * Nexa Blocks Main Loader
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if ( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

 if( ! class_exists( 'NexaBlocks_Loader' ) ) {

    /**
     * Nexa Blocks Loader Class
     * 
     * @since 1.0.0
     * @package NexaBlocks
     */

     class NexaBlocks_Loader {

        /**
         * Constructor
         * 
         * @since 1.0.0
         * @return void
         */
        public function __construct() {
            $this->includes();
        }

        /**
         * Include Files
         * 
         * @since 1.0.0
         * @return void
         */
        public function includes() {
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/helpers/helper-functions.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/register-blocks.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/register-category.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/enqueue-assets.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/dynamic-style.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/fonts-loader.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/classes/support-svg.php';

            // Nexa Admin 
            if( is_admin() ) {
                require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/admin/admin.php';
            }

            // REST API 
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/api/api.php';

            // Nexa Templates
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/template/template.php';

        }

     }

 }

    new NexaBlocks_Loader(); // Initialize the loader class. 