<?php
/**
 * Nexablocks Admin 
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}   

if( ! class_exists( 'NexaBlocks_Admin' ) ) {

    class NexaBlocks_Admin {
             
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
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/admin/classes/dashboard.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/admin/classes/enqueue.php';
            require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/inc/admin/classes/block-settings.php';
        }
    }
}

new NexaBlocks_Admin(); // Initialize the loader class.