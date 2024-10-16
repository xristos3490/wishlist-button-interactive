<?php
/**
 * Plugin Name:       Wishlist Button Interactive
 * Description:       An interactive block with the Interactivity API.
 * Version:           0.1.0
 * Requires at least: 6.6
 * Requires PHP:      7.2
 * Author:            Chris Lilitsas
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wishlist-button-interactive
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function chli_wishlist_button_interactive_block_init() {
	register_block_type_from_metadata( __DIR__ . '/build' );
}
add_action( 'init', 'chli_wishlist_button_interactive_block_init' );

// Define the root path.
if ( ! defined( 'WBI_PLUGIN_ABS_PATH' ) ) {
	define( 'WBI_PLUGIN_ABS_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );
}
