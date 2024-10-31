<?php
/**
 * Nexablocks Admin Dashboard
 * 
 * @since 1.0.0
 * @package NexaBlocks
 */

 if( ! defined( 'ABSPATH' ) ) {
    exit;
}  

if( ! class_exists( 'NexaBlocks_Dashboard' ) ) {

    class NexaBlocks_Dashboard {

        /**
         * Constructor
         * 
         * @since 1.0.0
         * @return void
         */
        public function __construct() {
            add_action( 'admin_menu', array( $this, 'add_dashboard_menu' ), 20 );

            // register settings
            // add_action( 'admin_init', array( $this, 'register_settings' ) );
        }

        /**
         * Register Settings
         * 
         * @since 1.0.0
         */
        
        public function register_settings() {
            register_setting( 'nexa_blocks_settings', 'nexa_blocks_settings' );

            // Settings Section
            add_settings_section(
                'nexa_blocks_settings_section',
                __( 'Google Map', 'nexa-blocks' ),
                array( $this, 'settings_section_callback' ),
                'nexa_blocks_settings'
            );

            // Google Map API Field 
            add_settings_field(
                'nexa_blocks_gmap_api_key',
                __( 'API Key', 'nexa-blocks' ),
                array( $this, 'gmap_api_key' ),
                'nexa_blocks_settings',
                'nexa_blocks_settings_section'
            );

        }
        /**
         * Settings Section Callback
         * 
         * @since 1.0.0
         */
        public function settings_section_callback() {
            ?>
                <p class="nx-help-text">
                    <?php esc_html_e( 'Enter your Google Map API Key to enable Google Map Block.', 'nexa-blocks' ); ?> 
                    <a href="https://mapsplatform.google.com/" target="_blank">
                        <span class="nx-help-tip">
                            <?php esc_html_e( 'Get a Free API Key', 'nexa-blocks' ); ?>
                        </span>
                    </a>
                </p>
            <?php
        }

        /**
         * Settings Field Callback
         * 
         * @since 1.0.0
         */
        public function gmap_api_key() {
            $options = get_option('nexa_blocks_settings') ?: [];
            ?>
            <input type="text" name="nexa_blocks_settings[gmap_api_key]" class="regular-text" 
                value="<?php echo esc_attr($options['gmap_api_key'] ?? ''); ?>"
            />
            <?php
        }

        /**
         * Add Dashboard Menu
         * 
         * @since 1.0.0
         * @return void
         */
        public function add_dashboard_menu() {
            add_menu_page( 
                __( 'Nexa Blocks', 'nexa-blocks' ),
                __( 'Nexa Blocks', 'nexa-blocks' ),
                'manage_options',
                'nexa-blocks',
                array( $this, 'dashboard_page' ),
                'data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDMwIDMwIiB3aWR0aD0iMzAiIGhlaWdodD0iMzAiPgoJPHRpdGxlPk5leGFfYnctc3ZnPC90aXRsZT4KCTxkZWZzPgoJCTxsaW5lYXJHcmFkaWVudCBpZD0iZzEiIHgyPSIxIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgZ3JhZGllbnRUcmFuc2Zvcm09Im1hdHJpeCgtMjkuMjgyLDQ3LjY5NywtNTEuODE4LC0zMS44MTIsMTQuODc2LDIuODk1KSI+CgkJCTxzdG9wIG9mZnNldD0iMCIgc3RvcC1jb2xvcj0iI2E3YWFhZCIvPgoJCQk8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMxZTFlMWUiLz4KCQk8L2xpbmVhckdyYWRpZW50PgoJPC9kZWZzPgoJPHN0eWxlPgoJCS5zMCB7IGZpbGw6IHVybCgjZzEpIH0gCgk8L3N0eWxlPgoJPGcgaWQ9IkZyYW1lIDcvVmFyaWFudDMiPgoJCTxnIGlkPSJMb2dvIj4KCQkJPHBhdGggaWQ9IlZlY3RvciIgZmlsbC1ydWxlPSJldmVub2RkIiBjbGFzcz0iczAiIGQ9Im0wIDQuOGMwLTEuMSAwLjgtMS45IDEuOS0xLjkgMS42IDAgMS45IDAgMiAwLjIgMC4xIDAuMSAwLjkgMS41IDEuOCAzLjEgMC45IDEuNiAyLjggNC44IDQuMSA3LjEgMS40IDIuNCAzLjIgNS42IDQuMiA3LjFsMS4yIDIuMmMwLjMgMC41IDAuNyAwLjcgMS4yIDAuN2gzLjNsNC4xLTAuMSAwLjUtMC4zYzIuOC0xLjYgMi4yLTUuNy0wLjktNi40LTAuOS0wLjEtNS0wLjEtNSAwIDAgMC4yIDAuOSAxLjggMiAzLjcgMC40IDAuNiAwLjcgMS4yIDAuNyAxLjMgMCAwLTEgMC4xLTIuMSAwLjFoLTAuNmMtMSAwLTEuOC0wLjUtMi4zLTEuM2wtMC4xLTAuMWMtMC40LTAuOC0xLjQtMi41LTIuMi0zLjgtMC43LTEuMy0xLjctMi45LTIuMS0zLjYtMS0xLjctNS4xLTguOS01LjQtOS40LTAuMi0wLjItMC4zLTAuNC0wLjMtMC40IDAtMC4xIDMuNS0wLjEgNy43LTAuMSA4LjUgMCA4LjUgMCAxMC4xIDAuOCAyLjEgMSAzLjYgMy40IDMuNiA1LjggMCAxLjMtMC4xIDIuMi0wLjcgMy4zLTAuMiAwLjQtMC40IDAuOC0wLjQgMC44IDEuNyAxLjIgMi45IDIuOCAzLjQgNC41IDAuMyAxLjEgMC4yIDIuOS0wLjEgNC0wLjggMi4yLTIuNSA0LTQuNyA0LjctMC45IDAuMi0xLjEgMC4yLTYuMiAwLjJoLTUuM2wtMS40LTIuM2MtMC43LTEuMy0xLjctMy0yLjItMy44LTAuOS0xLjUtMi41LTQuMy00LjYtNy45LTAuNi0xLjItMS4yLTIuMS0xLjMtMi4xIDAgMC0wLjEgMy42LTAuMSA4LjF2Ni44YzAgMC43LTAuNiAxLjMtMS4zIDEuM2gtMS4yYy0wLjcgMC0xLjMtMC42LTEuMy0xLjN6bTEyLjcgMmMwIDAuMiAyLjYgNC42IDMuMSA1LjRsMC4zIDAuNWgyLjdjMi41IDAgMi42IDAgMy4yLTAuMyAxLjgtMSAyLjItMy4zIDAuNy00LjgtMC40LTAuNC0wLjctMC42LTEuMS0wLjctMC43LTAuMi04LjktMC4yLTguOS0wLjF6Ii8+CgkJPC9nPgoJPC9nPgo8L3N2Zz4=',
                66
            );

            add_submenu_page(
                'nexa-blocks',
                __( 'Dashboard', 'nexa-blocks' ),
                __( 'Dashboard', 'nexa-blocks' ),
                'manage_options',
                'nexa-blocks',
                array( $this, 'dashboard_page' )
            );
        }

        /**
         * Dashboard Page
         * 
         * @since 1.0.0
         */
        public function dashboard_page() {
            ?>
                <div id="nexa-dashboard"></div>
            <?php
        }

    }

}

new NexaBlocks_Dashboard(); // Initialize the loader class.
