<?php
/**
 * Nexablocks Admin Enqueue
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if( ! defined( 'ABSPATH' ) ) {
    exit;
 }  

 if( ! class_exists( 'NexaBlocks_Admin_Enqueue' ) ) {

    class NexaBlocks_Admin_Enqueue {

        /**
         * Constructor
         * 
         * @since 1.0.0
         * @return void
         */
        public function __construct() {
            add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
        }

        /**
         * Enqueue Assets
         * 
         * @since 1.0.0
         * @return void
         */
        public function enqueue_assets( $screen ) {
            if( 'toplevel_page_nexa-blocks' === $screen ) {
                
                $blocks = Nexa_Blocks_Helpers::get_nexa_blocks();

                $a_dep = trailingslashit( NEXA_PLUGIN_DIR ) . 'build/admin/index.asset.php';

                if( file_exists( $a_dep ) ) {
                    $a_dep = require_once $a_dep;
                    wp_enqueue_script( 'nexa-dashboard', trailingslashit( NEXA_URL_FILE ) . 'build/admin/index.js', $a_dep['dependencies'], $a_dep['version'], true );
                    wp_enqueue_style( 'nexa-dashboard', trailingslashit( NEXA_URL_FILE ) . 'build/admin/style-index.css', array(), $a_dep['version'] );
                }

                // Enqueue wp-i18n for translation handling
                wp_enqueue_script( 'wp-i18n' );

                // Set script translations
                $locale = determine_locale();
                $locale_path = NEXA_PLUGIN_DIR . 'languages/' . substr($locale, 0, 2);
                wp_set_script_translations( 'nexa-dashboard', 'nexa-blocks', $locale_path );
                
                wp_localize_script(
                    'nexa-dashboard',
                    'nexaDashboard',
                    apply_filters( 'nexaDashboard', [
                        'ajax_url'           => admin_url( 'admin-ajax.php' ),
                        'nonce'              => wp_create_nonce( 'nexa_blocks_nonce' ),
                        'version'            => NEXA_VERSION,
                        'site_url'           => site_url(),
                        'admin_setting_page' => admin_url( 'admin.php?page=nexa-blocks' ),
                        'is_pro'             => defined( 'NEXA_BLOCKS_PRO_VERSION' ),
                        'blocks'             => $blocks
                    ] )
                );

                // Enqueue WP Components
                wp_enqueue_style( 'wp-components' );

            }
        }

    }

 }

    new NexaBlocks_Admin_Enqueue(); // Initialize the loader class.