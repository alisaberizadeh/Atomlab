<?php // Template Name: Contact Us 
?>
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
            <div class="page-content">
                <div class="col-md-12">
                    <?php the_content() ?>
                </div>
            </div>
        </div>
    </div>


    <?php get_footer() ?>
</body>

</html>