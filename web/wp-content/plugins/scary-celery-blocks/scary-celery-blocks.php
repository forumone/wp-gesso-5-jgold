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
	register_block_type_from_metadata(__DIR__ . '/trivia');
	// Add blocks to register here
}
add_action( 'init', 'scary_celery_blocks_register_blocks' );

if ( function_exists( 'acf_register_block_type' ) ) {
	function scary_celery_blocks_register_acf_blocks() {
		acf_register_block_type( array (
			'name' => 'film-info',
			'title' => __('Film Info'),
			'render_template' => plugin_dir_path(__FILE__) . 'templates/film-info.php',
			'category' => 'text',
			'mode' => 'preview',
			'post_types' => array( 'film' ),
			'icon' => 'info',
			'description' => __('Display the director and release year for a film.'),
			'supports' => array(
				'mode' => false,
				'align' => false
			),
		) );
		// Add any ACF blocks here
	}
	add_action( 'acf/init', 'scary_celery_blocks_register_acf_blocks' );
}

function gutenberg_examples_01_register_block() {
    register_block_type( __DIR__ . '/tutorial-block');
}
add_action( 'init', 'gutenberg_examples_01_register_block' );


