<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(  ) ?>
</head>

<body>

<div class="container">
    <div class="row">
    <?php get_header( ) ?>
    </div>
</div>



    <div class="page-baner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span style="color: white;">404</span>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="page-content not-found">
                <div class="col-md-3"></div>
                <div class="col-md-6 text-center"><br>
                    <span>موردی یافت نشد !!!</span>
                    <p>محتوای شما پیدا نشد !</p>
                    <div class="search_box">
                    <form action="<?php bloginfo('home'); ?>" method="get">
                            <input type="text" name="s" placeholder="جستوجو کنید...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php get_footer( ) ?>

</body>

</html>