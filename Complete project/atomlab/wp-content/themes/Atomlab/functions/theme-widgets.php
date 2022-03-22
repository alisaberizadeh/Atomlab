<?php 
function theme_wedgets()
{
    register_sidebar( array(
        "id"=>"fdesci",
        "name"=>"ابزارک فوتر",
        "description"=>"ابزارک برای درج توضیحات در بخش فوتر",
        "before_widget"=>"<div class='desc_footer footer-menu'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span class='title'>",
        "after_title"=>"</span>",
    ) );
    register_sidebar( array(
        "id"=>"last_posts_wig",
        "name"=>"ابزارک نمایش آخرین پست ها",
        "description"=>"ابزارک برای نمایش آخرین مطالب سایت",
        "before_widget"=>"<div class='side_bx'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span class='title'>",
        "after_title"=>"</span>",
    ) );
    register_sidebar( array(
        "id"=>"cats_wig",
        "name"=>"ابزارک نمایش دسته بندی",
        "description"=>"ابزارک نمایش دسته بندی مطالب سایت",
        "before_widget"=>"<div class='side_bx'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span class='title'>",
        "after_title"=>"</span>",
    ) );
    register_sidebar( array(
        "id"=>"love_posts",
        "name"=>"ابزارک مطالب پربازدید",
        "before_widget"=>"<div class='side_bx'>",
        "after_widget"=>"</div>",
        "before_title"=>"<span class='title'>",
        "after_title"=>"</span>",
    ) );
}

add_action('widgets_init','theme_wedgets');
?>