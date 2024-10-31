<?php 
/**
 * Nexa Blocks Enqueue Assets
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if( ! defined( 'ABSPATH' ) ) {
 	exit;
 }

 if( ! class_exists( 'NexaBlocks_Assets' ) ) {

    /**
     * Nexa Blocks Enqueue Assets Class
     * 
     * @since 1.0.0
     * @package NexaBlocks
     */
    class NexaBlocks_Assets {

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
            add_action( 'enqueue_block_editor_assets', array( $this, 'enqueue_editor_assets' ), 2 ); // Editor Assets.
            add_action( 'enqueue_block_assets', array( $this, 'enqueue_assets' ) ); // Frontend Assets + Editor Assets.

            add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_assets' ) ); // Admin Assets.
        }

        /**
         * Enqueue Assets
         * 
         * @since 1.0.0
         * @return void
         */
        public function enqueue_assets() {
            
            // global locasize script
            wp_enqueue_script( 'nexa-blocks-global-localize', trailingslashit( NEXA_URL_FILE ) . 'assets/js/localize.js', [], NEXA_VERSION, true );

            // Enqueue wp-i18n for translation handling
            wp_enqueue_script( 'wp-i18n' );

            // Set script translations
            $locale = determine_locale();
            $locale_path = NEXA_PLUGIN_DIR . 'languages/' . substr($locale, 0, 2);
            wp_set_script_translations( 'nexa-blocks-global-localize', 'nexa-blocks', $locale_path );

            wp_localize_script(
                'nexa-blocks-global-localize',
                'nexaGLocalize',
                apply_filters( 'nexaGLOptions', [
                    'ajax_url'   => admin_url( 'admin-ajax.php' ),
                    'nonce'      => wp_create_nonce( 'nexa_blocks_nonce' ),
                    'gmap_api'   => get_option( 'nexa_apis' )[ 'gmap_api_key' ] ?? '',
                    'site_url'   => site_url(),
                    'admin_setting_page' => admin_url( 'admin.php?page=nexa-blocks' ),
                    'maskShapes' => [
                        'blob'     => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/blob.svg',
                        'circle'   => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/circle.svg',
                        'flower'   => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/flower.svg',
                        'hexagon'  => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/hexagon.svg',
                        'sketch'   => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/sketch.svg',
                        'triangle' => trailingslashit( NEXA_URL_FILE ) . 'assets/mask-shapes/triangle.svg',
                    ],
                    'placeholderImage' => trailingslashit( NEXA_URL_FILE ) . 'assets/placeholders/placeholder.svg',
                ] )
            ); 

            // font awesome icons
            wp_enqueue_style( 'nexa-fontawesome-style', trailingslashit( NEXA_URL_FILE ) . 'assets/css/all.min.css', [], NEXA_VERSION, 'all' );

            // Enqueue Nexa Blocks Frontend Styles.
            if( is_admin() ) {
                return;
            }

            // global frontend styles
            wp_enqueue_style( 'nexa-blocks-global-frontend-style', trailingslashit( NEXA_URL_FILE ) . 'assets/css/global-frontend.css', [], NEXA_VERSION, 'all' );

            // sharer script 
            if( has_block( 'nexa/social-share' ) ){
                wp_enqueue_script( 'nexa-blocks-sharer-script', trailingslashit( NEXA_URL_FILE ) . 'assets/js/sharer.min.js', [], NEXA_VERSION, true );
            }

            // slider style + script 
            if( has_block( 'nexa/slider' ) || has_block( 'nexa/dynamic-slider' ) ) {
                // styles
                wp_enqueue_style( 'nx-swiper', trailingslashit( NEXA_URL_FILE ) . 'assets/css/swiper-bundle.min.css', [], NEXA_VERSION, 'all' );
                wp_enqueue_style( 'nx-swiper-gl', trailingslashit( NEXA_URL_FILE ) . 'assets/css/swiper-gl.min.css', [], NEXA_VERSION, 'all' );

                // scripts
                wp_enqueue_script( 'nx-swiper', trailingslashit( NEXA_URL_FILE ) . 'assets/js/swiper-bundle.min.js', [], NEXA_VERSION, true );
                wp_enqueue_script( 'nx-swiper-gl', trailingslashit( NEXA_URL_FILE ) . 'assets/js/swiper-gl.min.js', [], NEXA_VERSION, true );
            
            }

        }

        /**
         * Enqueue Editor Assets
         * 
         * @since 1.0.0
         * @return void
         */
        public function enqueue_editor_assets() {

            if( ! is_admin() ) {
                return;
            }

            // editor localize script
            wp_enqueue_script( 'nexa-blocks-editor-localize', trailingslashit( NEXA_URL_FILE ) . 'assets/js/editor-localize.js', [], NEXA_VERSION, true );

            // Enqueue wp-i18n for translation handling
            wp_enqueue_script( 'wp-i18n' );

            // Set script translations
            $locale = determine_locale();
            $locale_path = NEXA_PLUGIN_DIR . 'languages/' . substr($locale, 0, 2);
            wp_set_script_translations( 'nexa-blocks-editor-localize', 'nexa-blocks', $locale_path );
                
            wp_localize_script(
                'nexa-blocks-editor-localize',
                'nexaParams',
                apply_filters( 'nexaParams', [
                    'ajax_url'   => admin_url( 'admin-ajax.php' ),
                    'nonce'      => wp_create_nonce( 'nexa_blocks_nonce' ),
                    'has_pro'    => defined( 'NEXA_BLOCKS_PRO_VERSION' ),
                    'version'    => get_bloginfo( 'version' ),
                    'postTypes'  => Nexa_Blocks_Helpers::nexa_post_types(),
                    'taxonomies' => Nexa_Blocks_Helpers::nexa_taxonomies(),
                    'categories' => Nexa_Blocks_Helpers::nexa_terms_by_taxonomy( 'category' ),
                    'authors'    => Nexa_Blocks_Helpers::nexa_authors(),
                ] )
            ); 

            // global editor styles
            wp_enqueue_style( 'nexa-blocks-global-editor-style', trailingslashit( NEXA_URL_FILE ) . 'assets/css/global-editor.css', [], NEXA_VERSION, 'all' );

            // modules 
            if (file_exists(trailingslashit(NEXA_PLUGIN_DIR) . '/build/modules/index.asset.php')) {
                $modulesDependencies = require_once trailingslashit(NEXA_PLUGIN_DIR) . '/build/modules/index.asset.php';

                wp_enqueue_script(
                    'nexa-blocks-modules-script',
                    trailingslashit(NEXA_URL_FILE) . 'build/modules/index.js',
                    $modulesDependencies['dependencies'],
                    $modulesDependencies['version'],
                    false
                );
            }

            // global 
            if( file_exists( trailingslashit( NEXA_PLUGIN_DIR ) . '/build/global/index.asset.php' ) ) {
                $globalDependencies = require_once trailingslashit( NEXA_PLUGIN_DIR ) . '/build/global/index.asset.php';

                wp_enqueue_script(
                    'nexa-blocks-global-script',
                    trailingslashit( NEXA_URL_FILE ) . 'build/global/index.js',
                    $globalDependencies['dependencies'],
                    $globalDependencies['version'],
                    false
                );

                wp_enqueue_style(
                    'nexa-blocks-global-style',
                    trailingslashit( NEXA_URL_FILE ) . 'build/global/index.css',
                    [],
                    NEXA_VERSION,
                    false
                );

            }

            // google map autocomplete 
            $gmap_api_key = get_option( 'nexa_blocks_settings' )[ 'gmap_api_key' ] ?? '';
            
            // enqueue google map script
            if( ! empty( $gmap_api_key ) ) {
                wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?key=' . $gmap_api_key . '&libraries=places', [], NEXA_VERSION, true );
            }

            // swiper style + scripts
            wp_enqueue_style( 'nx-swiper', trailingslashit( NEXA_URL_FILE ) . 'assets/css/swiper-bundle.min.css', [], NEXA_VERSION, 'all' );
            wp_enqueue_style( 'nx-swiper-gl', trailingslashit( NEXA_URL_FILE ) . 'assets/css/swiper-gl.min.css', [], NEXA_VERSION, 'all' );

            // scripts
            wp_enqueue_script( 'nx-swiper', trailingslashit( NEXA_URL_FILE ) . 'assets/js/swiper-bundle.min.js', [], NEXA_VERSION, true );
            wp_enqueue_script( 'nx-swiper-gl', trailingslashit( NEXA_URL_FILE ) . 'assets/js/swiper-gl.min.js', [], NEXA_VERSION, true );

        }

        /**
         * Enqueue Admin Assets
         * 
         * @since 1.0.0
         * @return void
         */
        public function admin_enqueue_assets( $screen) {

            if( $screen !== 'toplevel_page_nexa-blocks' ) {
                return;
            }

            if (file_exists(trailingslashit(NEXA_PLUGIN_DIR) . '/build/modules/index.asset.php')) {
                $modulesDependencies = require_once trailingslashit(NEXA_PLUGIN_DIR) . '/build/modules/index.asset.php';

                wp_enqueue_script(
                    'nexa-blocks-modules-script',
                    trailingslashit(NEXA_URL_FILE) . 'build/modules/index.js',
                    $modulesDependencies['dependencies'],
                    $modulesDependencies['version'],
                    false
                );
            }
        }
    }

 }

    new NexaBlocks_Assets(); // Initialize the class.