<?php
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