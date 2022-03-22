<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body>
    <div class="address_phone__box col-md-12">


    <?php 
    $headers = get_theme_mod( "headers", false );
    if(is_array($headers) && !empty($headers)){
        for($i = 1 ; $i <= count($headers) ; $i++){

        
    ?>
    
        <p><i class="<?php echo $headers[$i]['icon'] ?>"></i> <?php echo $headers[$i]['text'] ?></p>

        <?php 
               }
            }
        ?>
 








    </div>
    <?php 
    $top_wwarp_image = get_theme_mod( 'top_wwarp_image', false );
    
     ?>
    <div class="top-wwrap" style="background-image: url('<?php echo ($top_wwarp_image) ? $top_wwarp_image : "http://localhost/atomlab/wp-content/themes/Atomlab/img/wallpapers-hd.jpg"?>');" >
        <div class="bg_cover" >
        <div class="container">
            <div class="row"> <?php get_header() ?></div>

            <?php get_template_part('inc/index', 'slider')  ?>

        </div>
        </div>
    </div>
    <?php get_template_part('inc/index', 'services')  ?>
    <?php get_template_part('inc/index', 'blog')   ?>
    <?php get_template_part('inc/site', 'boxes') ?>
    <?php get_footer() ?>


    