<?php
/**
 * Nexa Blocks Category
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

 if( ! class_exists( 'NexaBlocks_Category' ) ) {

    /**
     * Nexa Blocks Category Class
     * 
     * @since 1.0.0
     * @package NexaBlocks
     */
    class NexaBlocks_Category {

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
            add_filter( 'block_categories_all', array( $this, 'register_category' ), 10, 2 );
        }

        /**
         * Register Category
         * 
         * @since 1.0.0
         * @return void
         */
        public function register_category( $categories ) {
            return array_merge(
                array(
                    array(
                        'slug'  => 'nexa-blocks',
                        'title' => __( 'Nexa Blocks', 'nexa-blocks' ),
                    ),
                ), 
                $categories
            );
        }   

    }

 }

    new NexaBlocks_Category(); // Initialize the category class.