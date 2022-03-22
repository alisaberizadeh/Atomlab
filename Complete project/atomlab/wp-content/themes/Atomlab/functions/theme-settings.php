<?php 
function theme_settings($wp_customize)
{
    include get_template_directory().'/functions/theme_setting/details-setting.php';
    include get_template_directory().'/functions/theme_setting/services-setting.php';
    include get_template_directory().'/functions/theme_setting/topWarp-setting.php';
    include get_template_directory().'/functions/theme_setting/coloring-setting.php';
}
add_action( 'customize_register', 'theme_settings' );
?>