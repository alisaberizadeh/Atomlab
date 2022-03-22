<script>
    function showSeach() {
        document.getElementById('popup_box').style.top = '0'
    }

    function closeSearch() {
        document.getElementById('popup_box').style.top = '-100%'

    }
</script>

<div class="popup_box" id="popup_box">




    <div class="form_box">
        <form action="<?php bloginfo('home') ?>" method="get">
            <input type="text" name="s" placeholder="مطلب مورد علاقه ات رو جستوجو کن...">
            <button><i class="fa fa-search"></i></button>
        </form>
        <button class="btn_close" onclick="closeSearch()"><i class="fa fa-close"></i></button>
    </div>

</div>
<?php
$menu_bg = get_theme_mod('nav_menu_bg', false);
$menu_li_color = get_theme_mod('menu_li_color', false);
$btn_bg = get_theme_mod('btn_bg', false);
$base_color = get_theme_mod('base_color', false);
$footer_bg = get_theme_mod('footer_bg', false);
$body_bg = get_theme_mod('body_bg', false);
?>
<style>
    .main-menu .menu-items ul li a {
        color: <?php echo ($menu_li_color) ? $menu_li_color : '#383838' ?>;
    }
    .footer_box {
       background: <?php echo ($footer_bg) ? $footer_bg : '#111015' ?>;
       background-image: url('http://localhost/atomlab/wp-content/themes/Atomlab/img/map-dots.png');
       background-position: center center;
    background-size: contain;
    background-repeat: no-repeat;
    }

    body {
        background: <?php echo ($body_bg) ? $body_bg : '#f1f3ff' ?>;
        --btn-bg: <?php echo ($btn_bg) ? $btn_bg : 'linear-gradient(269deg, #01d9a6 0%, #1aa580 100%)' ?>;
        --base-color: <?php echo ($base_color) ? $base_color : '#0bbd94' ?>;
    }
</style>
<div class="main-menu" style="background-color: <?php echo ($menu_bg) ? $menu_bg : 'rgb(255 255 255 / 83%)' ?>">
    <div class="col-md-10 col-xs-8">
        <div class="menu-items">
            <?php wp_nav_menu(array(
                'theme_location' => 'Top_Menu',
                'depth' => '3',
            )); ?>
        </div>
    </div>
    <div class="col-md-2 col-xs-4 logoBox ">
        <?php the_custom_logo() ?>
    </div>


</div>