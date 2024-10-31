<?php
/**
 * Nexablocks Admin Block Settings
 * 
 * @since 1.0.0
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( ! class_exists( 'Nexa_Blocks_Settings' ) ) {

    /**
     * Nexa Blocks Settings Class
     * 
     * @since 1.0.0
     */
    class Nexa_Blocks_Settings {

        /**
         * Register Settings Constructor
         * 
         * @since 1.0.0
         */
        public function __construct() {
            add_action( 'admin_init', array( $this, 'add_options' ) );
        }

        /**
         * Register Settings
         * 
         * @since 1.0.0
         */
        public function add_options() {

            // Register Google Map API Key setting
            // register_setting(
            //     'nexa_blocks_settings', // Option group
            //     'gmap_api_key', // Option name
            //     [
            //         'type'         => 'string',
            //         'default'      => '',
            //         'show_in_rest' => true, // Makes it accessible via REST API
            //         'sanitize_callback' => 'sanitize_text_field',
            //     ]
            // );

            // add option for Google Map API Key
            if( ! get_option( 'nexa_gmap_api_key' ) ) {
                add_option( 'nexa_gmap_api_key', '' );
            } 
        }
    }

}

// new Nexa_Blocks_Settings(); // Nexa Blocks Settings Instance