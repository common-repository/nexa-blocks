<?php
/**
 * Nexa Blocks - Generate Dynamic Styles
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

if( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( ! class_exists( 'NexaBlocks_Dynamic_Style' ) ) {

    /**
     * Nexa Blocks Dynamic Style Class
     * 
     * @since 1.0.0
     * @package NexaBlocks
     */
    class NexaBlocks_Dynamic_Style {

        private $styles = [];
        private $upload_dir;
        private $upload_url;

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
            add_filter( 'render_block', array( $this, 'collect_dynamic_styles' ), 10, 2 );
            add_action( 'wp_footer', array( $this, 'generate_and_enqueue_combined_css' ) );

            $upload_dir = wp_upload_dir();
            $this->upload_dir = $upload_dir['basedir'] . '/nexablocks-styles/';
            $this->upload_url = $upload_dir['baseurl'] . '/nexablocks-styles/';

            if( ! file_exists( $this->upload_dir ) ) {
                wp_mkdir_p( $this->upload_dir );
            }
        }

        /**
         * Generate Dynamic Styles
         * 
         * @since 1.0.0
         * @param string $block_content Block Content.
         * @param array $block Block Attributes.
         * @return string
         */
        public function collect_dynamic_styles( $block_content, $block ) {
            if( isset( $block['blockName'] ) && str_contains( $block['blockName'], 'nexa/' ) ) {

                do_action( 'nexablocks_render_block', $block );

                if( isset( $block['attrs']['blockStyle'] ) ) {

                    $blockStyle = $block['attrs']['blockStyle'];

                    if( is_array( $blockStyle ) && ! empty( $blockStyle ) ) {
                        $blockStyle = implode( ' ', $blockStyle );
                    }

                    $this->styles[] = $blockStyle;
                }

            }

            return $block_content;
        }

        /**
         * Generate and Enqueue Combined CSS
         * 
         * @since 1.0.0
         * @return void
         */
        public function generate_and_enqueue_combined_css() {
            if( empty( $this->styles ) ) {
                return;
            }

            $combined_css = implode(' ', $this->styles);
            
            $minified_css = $this->minify_css( $combined_css );

            $css_file_name = 'nexablocks-styles-' . get_the_ID() . '.min.css';
            $css_file_path = $this->upload_dir . $css_file_name;
            $css_file_url = $this->upload_url . $css_file_name;

            // Initialize the File System. 
            global $wp_filesystem;

            if( empty( $wp_filesystem ) ) {
                require_once ABSPATH . '/wp-admin/includes/file.php';
                WP_Filesystem();
            }

            // only generate the file if it doesn't exist or if the content has changed.
            $existing_content = $wp_filesystem->exists( $css_file_path ) ? $wp_filesystem->get_contents( $css_file_path ) : '';
            if( $existing_content !== $minified_css ) {
                $wp_filesystem->put_contents( $css_file_path, $minified_css, FS_CHMOD_FILE );
            } 

            // Enqueue the CSS File.
            wp_enqueue_style( 'nexablocks-dynamic-styles', $css_file_url, array(), filemtime( $css_file_path ) ); 

        }

        /**
         * Minify CSS
         * 
         * @since 1.0.0
         * @param string $css CSS to Minify.
         * @return string
         */
        private function minify_css( $css ) {
            $css = preg_replace( '/\s+/', ' ', $css );
            $css = preg_replace( '/(\s+)(\/\*(.*?)\*\/)(\s+)/', '', $css );
            $css = preg_replace( '/(\s+)(\/\*(.*?)\*\/)(\s+)/', '', $css );
            $css = preg_replace( '/;}/', '}', $css );

            return $css;
        }
    }

}

new NexaBlocks_Dynamic_Style(); // Initialize the Dynamic Style class.