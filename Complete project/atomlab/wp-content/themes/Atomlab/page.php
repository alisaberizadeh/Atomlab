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
                    <span><?php the_title() ?></span>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">

            <div class="page-content single_content">
                <?php while (have_posts()) {
                    the_post() ?>
                    <div class="col-md-9">
                        <div class="content_bx">
                            <?php if (has_post_thumbnail()) { ?>
                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                            <?php } ?>

                            <div class="meta">
                                <span><i class="fa fa-clock-o"></i> <?php echo get_the_date() ?> </span>
                                <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number() ?></span>
                            </div>
                            <h1><?php the_title() ?></h1>
                            <hr>
                            <div class="p_text">
                                <?php the_content() ?>
                            </div>

                            <div class="comments_box">
                                <?php comments_template() ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php get_sidebar() ?>

            </div>

        </div>
    </div>


    <?php get_footer() ?>

</body>

</html>