<?php
/**
 * Plugin Name: Add Resuable Blocks
 * Plugin URI:  https://www.braveryk7.com/
 * Description: WordPress管理画面に再利用ブロックを追加するプログラム
 * Version:     1.0.0
 * Author:      Ken-chan
 * Author URI:  https://twitter.com/braveryk7
 */

 /* 再利用ブロックリンクをメニューに追加 */
function add_reusable_blocks() {
	if ( is_admin() ) {
		add_menu_page(
			'再利用ブロック',
			'再利用ブロック',
			'manage_options',
			'edit.php?post_type=wp_block',
			'',
			'dashicons-image-rotat',
			11
		);
	}
}

add_action( 'admin_menu', 'add_reusable_blocks' );
