<?php 


    $posts = new WP_Query(array(
        'post_type'=>'post',
        'posts_per_page'=>'4',
        'post_status'=>'publish',
    ));
    if ($posts->have_posts())
    {

?>

    <div class="index-blog">
        <div class="container">

<?php 
$i = 0;
while ($posts->have_posts()) {
    $posts->the_post();

    if($i%2==0){
?>
 <div class="row row1">
                <div class="col-md-6">
                    <div class="desc">
                        <h4><?php echo get_the_title(  ) ?></h4>
                        <div class="meta" style="justify-content: space-between;display: flex;" >
                            <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></span>
                            <span><i class="fa fa-clock-o"></i> <?php echo get_the_time('G:i') ?></span>
                            <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number( ) ?></span>
                            <span><i class="fa fa-user-o"></i> <?php echo get_the_author( ) ?></span>

                        </div>
                        <p>
                        <?php echo get_the_excerpt(  ) ?>
                        </p>
                        <div class="text-left">
                            <a href="<?php echo get_the_permalink( ) ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic">
                        <?php if (has_post_thumbnail(  )) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>

<?php } else { ?>           
    <div class="row row1">
    <div class="col-md-6">
                    <div class="pic">
                        <?php if (has_post_thumbnail(  )) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="desc">
                        <h4><?php echo get_the_title(  ) ?></h4>
                        <div class="meta" style="justify-content: space-between;display: flex;" >
                        <span><i class="fa fa-calendar-o"></i> <?php echo get_the_date() ?></span>
                        <span><i class="fa fa-clock-o"></i> <?php echo get_the_time('G:i') ?></span>
                            <span><i class="fa fa-comment-o"></i> <?php echo get_comments_number( ) ?></span>
                            <span><i class="fa fa-user-o"></i> <?php echo get_the_author( ) ?></span>
                        </div>
                        <p>
                        <?php echo get_the_excerpt(  ) ?>
                        </p>
                        <div class="text-left">
                            <a href="<?php echo get_the_permalink( ) ?>" class="site-btn">ادامه مطلب <i class="fa fa-angle-left"></i></a>
                        </div>
                    </div>
                </div>
               
            </div>

<?php } $i++;  } ?>
 
        </div>
    </div>

    <?php }  wp_reset_postdata(  )?>