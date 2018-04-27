<?php
/**
 * Plugin Name:     Learn Iron Code Block Basic
 * Plugin URI:      https://salferrarello.com/wordpress-custom-editor-block/
 * Description:     Gutenberg Block Example
 * Author:          Sal Ferrarello
 * Author URI:      https://salferrarello.com/
 * Text Domain:     learn-iron-code-block-basic
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Learn_Iron_Code_Block_Basic
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

include( plugin_dir_path( __FILE__ ) . 'blocks/iron-code-basic.php' );
