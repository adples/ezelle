<?php

/**
 * Register ACF block categories.
 */
function register_block_category( $categories ) {

	$categories[] = array(
		'slug'  => '_tw',
		'title' => '_tw',
		'order' => 0
	);

	return $categories;
}
add_action( 'block_categories', 'register_block_category', 10, 2 );



/**
 * Register ACF blocks.
 */
function register_acf_blocks() {

	$dir = get_template_directory() . '/blocks/';
	$folders = array_diff(scandir($dir), array('..', '.'));

	foreach ($folders as $folder) {
		// Check if the item is a directory and not a file using is_dir()
		if (is_dir($dir . $folder)) {
			// Register each ACF block to WordPress using register_block_type()
			register_block_type($dir . $folder, [
				'category' => '_tw',
				'icon' => 'star-filled',
			]);
		}
	}
}
add_action('init', 'register_acf_blocks', 5);



/**
 * ACF local JSON.
 */
function my_acf_json_save_point( $path ) {
    return get_template_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );



/**
 * Remove custom padding unit.
 */
function remove_custom_padding_button() {
	echo '<style>
		.components-button.spacing-sizes-control__custom-toggle{
			display: none!important;
		}
	</style>';
}
add_action('admin_head', 'remove_custom_padding_button');



/**
 * Fixes AlpineJS block issues.
 */
remove_filter('the_content', 'wptexturize');
