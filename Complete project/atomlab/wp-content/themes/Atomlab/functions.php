<?php 
include get_template_directory().'/functions/theme-setup.php';
include get_template_directory().'/functions/load-css-js.php';
include get_template_directory().'/functions/theme-widgets.php';
include get_template_directory().'/functions/theme-settings.php';
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false', 100 );
add_filter( 'use_widgets_block_editor', '__return_false' );
?>
