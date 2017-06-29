<?php
/**
 * Plugin Name: Gutenberg Tweaks
 */

function gt_block_enqueue_scripts() {
	wp_enqueue_script( 'gutenberg-tweaks', plugins_url( 'gutenberg-tweaks.js', __FILE__ ), array( 'wp-element' ), false, true );
	wp_localize_script( 'gutenberg-tweaks', 'gutenbergTweaks', array(
		'plugin_url' => plugin_dir_url( __FILE__ ),
		'strings' => array(
			'Carrot' => __( 'Carrot' ),
		)
	) );
}
if ( isset( $_GET['page'] ) && 'gutenberg' === $_GET['page'] ) {
	add_action( 'admin_enqueue_scripts', 'gt_block_enqueue_scripts' );
}
/**/
