<?php 
function Theme_css_js(){
    wp_enqueue_style('bootstrap' , get_template_directory_uri().'/css/bootstrap.css' , [] , '1.0.0');
    wp_enqueue_style('fontawesome' , get_template_directory_uri().'/css/font-awesome.css' , [] , '1.0.0');
    wp_enqueue_style('style' , get_template_directory_uri().'/style.css' , [] , '1.0.0');
    wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/bootstrap.js' ,['jquery'],'1.0.2',true);
}
add_action('wp_enqueue_scripts','Theme_css_js');
?>