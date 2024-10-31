<?php
/**
 * Nexa Blocks Registration 
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

if( ! class_exists( 'NexaBlocks_SupportSVG' ) ) {

    class NexaBlocks_SupportSVG {

        /**
         * Singleton instance of this class
         * @var object|null
         */

        /**
         * Constructor.
         * Register hooks and actions.
         */
        public function __construct() {
            add_filter('wp_check_filetype_and_ext', [$this, 'sanitize_svg_uploads'], 10, 4);
            add_filter('upload_mimes', [$this, 'modify_svg_mimes']);
            add_action('init', [$this, 'add_flush_rewrite_rules']);
            add_filter('user_has_cap', [$this, 'filter_user_capabilities'], 10, 3);
            add_action('admin_head', [$this, 'add_svg_support_style']);
        }

        /**
         * Sanitize SVG uploads.
         * @param array $data
         * @param string $file
         * @param string $filename
         * @param array $mimes
         * @return array
         */
        public function sanitize_svg_uploads($data, $file, $filename, $mimes) {
            // Check if SVG upload is allowed.
            if (!current_user_can('upload_svg')) {
                return $data;
            }

            // Validate file type
            $filetype = wp_check_filetype($filename, $mimes);
            if ($filetype['ext'] !== 'svg' || $filetype['type'] !== 'image/svg+xml') {
                $data['error'] = 'Invalid file type. Only SVG files are allowed.';
            }

            // Sanitize SVG content
            $svg_content = wp_remote_get($file);
            $sanitized_content = $this->sanitize_svg_content($svg_content);
            if ($sanitized_content !== $svg_content) {
                $data['error'] = 'SVG file contains disallowed content.';
            }

            return $data;
        }

        /**
         * Sanitize SVG content to remove potentially harmful elements.
         * @param string $content
         * @return string
         */
        private function sanitize_svg_content($content) {

            if (is_wp_error($content)) {
                // Handle the error, for example, return an empty string or log the error
                return ''; // or use error_log($content->get_error_message());
            }
            
            // Remove XML processing instructions
            $content = preg_replace('/<\?xml.*?\?>/i', '', $content);
            return $content;
        }

        /**
         * Modify MIME types to allow SVG uploads.
         * @param array $existingMimes
         * @return array
         */
        public function modify_svg_mimes($existingMimes) {
            $existingMimes['svg'] = 'image/svg+xml';
            return $existingMimes;
        }

        /**
         * Flush rewrite rules.
         */
        public function add_flush_rewrite_rules() {
            flush_rewrite_rules();
        }

        /**
         * Filter user capabilities to allow SVG uploads.
         * @param array $allcaps
         * @param array $cap
         * @param array $args
         * @return array
         */
        public function filter_user_capabilities($allcaps, $cap, $args) {
            if ($args[0] === 'upload_files' && isset($allcaps['upload_files']) && !isset($allcaps['upload_svg'])) {
                $allcaps['upload_svg'] = $allcaps['upload_files'];
            }
            return $allcaps;
        }

        /**
         * Add SVG support to media library.
         */
        public function add_svg_support_style() { ?>
            <style>
                .media-modal-content ul.attachments li.attachment img[src$=".svg"],
                .media-frame ul.attachments li.attachment img[src$=".svg"],
                table.media img[src$=".svg"] {
                    width: 100% !important;
                    height: auto !important;
                }
            </style>
    <?php
        }
    }

}

 new NexaBlocks_SupportSVG();    // Initialize the class.