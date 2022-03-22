<?php
function theme_setup(){
    add_theme_support('title-tag'); // عنوان
    add_theme_support('widgets'); // --- ویجت
    add_theme_support('post-thumbnails'); // ---- تصویر شاخص
    add_theme_support('custom-logo');  

    register_nav_menus(array(
        'Top_Menu'=>'منوی اصلی',
        'Footer_Right_Menu'=>'منوی فوتر (راست)',
        'Footer_Left_Menu'=>'منوی فوتر (چپ)'
    ));
}
add_action('after_setup_theme','theme_setup');
?>