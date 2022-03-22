<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>

</head>

<body>

    <div class="container">
        <div class="row">
            <?php get_header() ?>
        </div>
    </div>


    <div class="page-baner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>
                        <?php
                        if (is_home()) {
                            echo " اخبار و مقالات ";
                        } else if (is_category()) {
                            echo "دسته بندی <i class='fa fa-angle-left'></i> ";
                            echo single_cat_title();
                        } else if (is_tag()) {
                            echo "برچسب <i class='fa fa-angle-left'></i> #";
                            echo single_tag_title();
                        } else if (is_search()) {
                            echo 'جستوجو کردید برای : ';
                            echo '"';
                            echo $_GET['s'];
                            echo '"';
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="page-content index-blog">


                <span class="page_title"><i class="fa fa-angle-left"></i>
                    <?php
                    if (is_home()) {
                        echo " اخبار و مقالات ";
                    } else if (is_category()) {
                        echo "اخبار و مقالات <i class='fa fa-angle-left'></i> ";
                        echo single_cat_title();
                    } else if (is_tag()) {
                        echo "اخبار و مقالات <i class='fa fa-angle-left'></i> #";
                        echo single_tag_title();
                    } else if (is_search()) {
                        echo 'جستوجو کردید برای : ';
                        echo '"';
                        echo $_GET['s'];
                        echo '"';
                    }
                    ?>

                </span>




                <?php
                if (have_posts()) {
                    $i = 0;
                    while (have_posts()) {
                        the_post();

                        if ($i % 2 == 0) {
                ?>
                            <div class="row row1">
                                <div class="col-md-6">
                                    <div class="desc">
                                        <h4><?php echo get_the_title() ?></h4>
                                        <div class="meta" style="justify-content: space-between;display: flex;">
                                            <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></span>
                                            <span><i class="fa fa-clock-o"></i> <?php echo get_the_time('G:i') ?></span>
                                            <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number() ?></span>
                                            <span><i class="fa fa-user-o"></i> <?php echo get_the_author() ?></span>

                                        </div>
                                        <p>
                                            <?php echo get_the_excerpt() ?>
                                        </p>
                                        <div class="text-left">
                                            <a href="<?php echo get_the_permalink() ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pic">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                        <?php } else { ?>
                            <div class="row row1">
                                <div class="col-md-6">
                                    <div class="pic">
                                        <?php if (has_post_thumbnail()) { ?>
                                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="desc">
                                        <h4><?php echo get_the_title() ?></h4>
                                        <div class="meta" style="justify-content: space-between;display: flex;">
                                            <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></span>
                                            <span><i class="fa fa-clock-o"></i> <?php echo get_the_time('G:i') ?></span>
                                            <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number() ?></span>
                                            <span><i class="fa fa-user-o"></i> <?php echo get_the_author() ?></span>
                                        </div>
                                        <p>
                                            <?php echo get_the_excerpt() ?>
                                        </p>
                                        <div class="text-left">
                                            <a href="<?php echo get_the_permalink() ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                <?php }
                        $i++;
                    }
                } else {
                    echo " <h3 style='text-align:center;'>نتیجه ای یافت نشد !!!</h3>";
                } ?>

                <div class="col-md-12 text-center">
                    <div class="pagination-box">
                        <?php echo paginate_links() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer() ?>
</body>

</html>