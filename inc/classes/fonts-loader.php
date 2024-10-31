<?php
/**
 * Load Google Fonts
 *
 * @since 1.0.0
 * @package NexaBlocks
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

if (!class_exists('NexaBlocks_Fonts_Loader')) {

    /**
     * Load Google Fonts
     *
     * @since 1.0.0
     */
    class NexaBlocks_Fonts_Loader {
        /**
         * All fonts
         *
         * @var array
         */
        private static $all_fonts = [];

        /**
         * System fonts
         *
         * @var array
         */
        private const SYSTEM_FONTS = [
            'Default',
            'Arial',
            'Tahoma',
            'Verdana',
            'Helvetica',
            'Times New Roman',
            'Trebuchet MS',
            'Georgia',
        ];

        /**
         * Constructor
         */
        public function __construct() {
            add_action('wp_enqueue_scripts', [$this, 'fonts_loader'], 9999);
            add_action('admin_enqueue_scripts', [$this, 'fonts_loader'], 9999);
            add_action('nexablocks_render_block', [$this, 'font_generator']);
        }

        /**
         * Font generator
         *
         * @param array $block Block attributes.
         */
        public function font_generator($block): void {
            if (!isset($block['attrs']) || !is_array($block['attrs'])) {
                return;
            }

            foreach ($block['attrs'] as $key => $value) {
                if (empty($value) || strpos($key, 'nx_') !== 0 || strpos($key, 'FontFamily') === false) {
                    continue;
                }
                self::$all_fonts[] = $value;
            }
        }

        /**
         * Load fonts
         */
        public function fonts_loader(): void {
            if (empty(self::$all_fonts)) {
                return;
            }

            $fonts = array_filter(array_unique(self::$all_fonts));
            if (empty($fonts)) {
                return;
            }

            $google_fonts = $this->prepare_google_fonts($fonts);
            $this->enqueue_google_fonts($google_fonts);
        }

        /**
         * Prepare Google fonts
         *
         * @param array $fonts All fonts.
         * @return array Prepared Google fonts.
         */
        private function prepare_google_fonts(array $fonts): array {
            $google_fonts = [];
            foreach ($fonts as $font) {
                if (in_array($font, self::SYSTEM_FONTS, true) || empty($font)) {
                    continue;
                }
                $google_fonts[] = str_replace(' ', '+', trim($font));
            }
            return $google_fonts;
        }

        /**
         * Enqueue Google fonts
         *
         * @param array $google_fonts Google fonts to enqueue.
         */
        private function enqueue_google_fonts(array $google_fonts): void {
            foreach ($google_fonts as $font) {
                $font_handle = 'nexablocks-font-' . sanitize_title($font);
                $query_args = [
                    'family' => $font . ':100,200,300,400,500,600,700,800,900'
                ];

                wp_register_style(
                    $font_handle,
                    add_query_arg($query_args, '//fonts.googleapis.com/css'),
                    [],
                    NEXA_VERSION,
                    'all'
                );
                wp_enqueue_style($font_handle);
            }
        }
    }
}

new NexaBlocks_Fonts_Loader();