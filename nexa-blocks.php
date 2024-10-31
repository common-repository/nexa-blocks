<?php
/**
 * Plugin Name: Nexa Blocks
 * Description: The Blocks Library extends the Gutenberg functionality with several unique and feature-rich blocks that help build websites faster.
 * Author: NexaBlocks
 * Plugin URI: https://www.nexablocks.com/
 * Author URI: https://www.nexablocks.com
 * Version: 1.0.6
 * Text Domain: nexa-blocks
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package NexaBlocks
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'NexaBlocks ' ) ) {

	/**
	 * Nexa Blocks Final Class
	 * 
	 * @since 1.0.0
	 * @package NexaBlocks
	 */
	final class NexaBlocks {

		/**
		 * Nexa Blocks Instance
		 * 
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Nexa Blocks Constructor
		 * 
		 * @since 1.0.0
		 * @return void
		 */
		private function __construct() {
			$this->define_constants();
			$this->init();
			$this->includes();
		}

		/**
		 * Nexa Blocks Define Constants
		 * 
		 * @since 1.0.0
		 * @return void
		 */
		public function define_constants() {
			if( ! defined( 'NEXA_VERSION' ) ) {
				define( 'NEXA_VERSION', '1.0.6' );
			}
			if( ! defined( 'NEXA__FILE__' ) ) {
				define( 'NEXA__FILE__', __FILE__ );
			}
			if( ! defined( 'NEXA_URL_FILE' ) ) {
				define( 'NEXA_URL_FILE', plugin_dir_url( NEXA__FILE__ ) );
			}
			if( ! defined( 'NEXA_PLUGIN_DIR' ) ) {
				define( 'NEXA_PLUGIN_DIR', plugin_dir_path( NEXA__FILE__ ) );
			}
			if( ! defined( 'NEXA_URL' ) ) {
				define( 'NEXA_URL', plugins_url( '/', NEXA_PLUGIN_DIR ) );
			}
		}

		/**
		 * Nexa Blocks Init
		 * 
		 * @since 1.0.0
		 * @return void
		 */
		public function init() {
			add_action( 'init', array( $this, 'load_textdomain' ) );
		}

		/**
		 * Nexa Blocks Load Text Domain
		 * 
		 * @since 1.0.0
		 * @return void
		 */
		public function load_textdomain() {
			load_plugin_textdomain( 'nexa-blocks', false, basename( NEXA_PLUGIN_DIR ) . '/languages' );
		}

		/**
		 * Nexa Blocks Instance
		 * 
		 * @since 1.0.0
		 * @return NexaBlocks
		 */
		public static function get_instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * Nexa Blocks Includes Files
		 * 
		 * @since 1.0.0
		 * @return void
		 */
		private function includes() {
			require_once trailingslashit( NEXA_PLUGIN_DIR ) . 'inc/nexa-blocks-loader.php';
		}
	}

}

/**
 * Nexa Blocks
 * 
 * @since 1.0.0
 * @return NexaBlocks
 */
function nexa_blocks() {
	return NexaBlocks ::get_instance();
}
nexa_blocks(); // Initialize the Nexa Blocks class.
