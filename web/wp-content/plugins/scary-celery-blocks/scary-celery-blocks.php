<?php
/**
 * Plugin Name:       Scary Celery Blocks
 * Description:       A collection of custom blocks
 * Requires at least: 5.9
 * Author:            Forum One
 * Text Domain:       scary-celery-blocks
 *
 * @package           scary-celery-blocks
 */

function scary_celery_blocks_register_blocks() {
	// Add blocks to register here
}
add_action( 'init', 'scary_celery_blocks_register_blocks' );

if ( function_exists( 'acf_register_block_type' ) ) {
	function scary_celery_blocks_register_acf_blocks() {
		// Add any ACF blocks here
	}
	add_action( 'acf/init', 'scary_celery_blocks_register_acf_blocks' );
}
