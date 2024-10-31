<?php
/**
 * Nexa Blocks Registration 
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if( ! defined( 'ABSPATH' ) ) {
 	exit;
 } 

 if( ! class_exists( 'NexaBlocks_Registration' ) ) {

    /**
     * Nexa Blocks Registration Class
     * 
     * @since 1.0.0
     * @package NexaBlocks
     */
    class NexaBlocks_Registration {

        /**
         * Constructor
         * 
         * @since 1.0.0
         * @return void
         */
        public function __construct() {
            $this->init();
        }

        /**
         * Initialize the Class
         * 
         * @since 1.0.0
         * @return void
         */
        private function init() {
            add_action( 'init', array ( $this, 'register_blocks'  ) );
        }

        /**
         * Register Blocks
         * 
         * @since 1.0.0
         * @return void
         */
        public function register_blocks() {
            $blocks = get_option( 'nexa_blocks', Nexa_Blocks_Helpers::get_nexa_blocks() );
        
            if ( ! empty( $blocks ) && is_array( $blocks ) ) {
                foreach ( $blocks as $block ) {
                    $path = NEXA_PLUGIN_DIR;
        
                    if( isset( $block['is_pro'] ) && $block['is_pro'] === true && defined( 'NEXA_BLOCKS_PRO_PATH' ) ) {
                        $path = NEXA_BLOCKS_PRO_PATH;
                    }
        
                    $block_name = trailingslashit( $path ) . 'build/blocks/' . $block['name'];
                    $full_block_name = 'nexa/' . $block['name']; // Assuming 'nexa' is your namespace
        
                    if ( isset( $block['active'] ) && $block['active'] === false ) {
                        // Check if the block type is registered before trying to unregister it
                        if( WP_Block_Type_Registry::get_instance()->is_registered( $full_block_name ) ) {
                            unregister_block_type( $full_block_name );
                        }
                    } else {
                        if( file_exists( $block_name ) ) {
                            // Check if the block is not already registered
                            if ( ! WP_Block_Type_Registry::get_instance()->is_registered( $full_block_name ) ) {
                                register_block_type( $block_name );
                            }
                            
                            wp_enqueue_script( 'wp-i18n' );
        
                            $locale = determine_locale();
                            $locale_path = NEXA_PLUGIN_DIR . 'languages/' . substr($locale, 0, 2);
                            $script_handle = "nexa-{$block['name']}-editor-script";
        
                            wp_set_script_translations($script_handle, 'nexa-blocks', $locale_path );
                        }
                    }
                }
            }
        }

    }

 }

    new NexaBlocks_Registration(); // Initialize the class.