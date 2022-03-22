<div class="site_boxes_content">
        <div class="container">
            <div class="row">
            <?php 

$posts_wordpress = new WP_Query(array(
    'post_type' => 'post', 
    'posts_per_page' => '4', 
    'post_status' => 'publish', 
    'category_name' => 'news_tek', 
));
if ($posts_wordpress->have_posts()) {

?>






                <div class="col-md-6">
                    <div class="box">
                        <span class="title">اخبار تکنولوژی</span>

                        <?php 
                        while ($posts_wordpress->have_posts()) {
                            $posts_wordpress->the_post()
                        ?>
                        
                        <div class="post_itme_bx">
                            <a href="<?php echo get_the_permalink( ) ?>">
                            <div class="col-md-5">
                                <div class="pic">
                                    <?php if(has_post_thumbnail( )) { ?>
                                    <img src="<?php echo get_the_post_thumbnail_url( ) ?>" alt="<?php echo get_the_title(  ) ?>">    
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="desc">
                                    <h5><?php echo get_the_title(  ) ?></h5>
                                    <p><?php echo get_the_excerpt(  ) ?></p>
                                    <span> <i class="fa fa-calendar-o"></i> <?php echo get_the_date(  ) ?> </span>
                                </div>
                            </div>
                            </a>
                        </div>
                     
                        <?php  } wp_reset_postdata(  ); ?>

                    </div>
                </div>








<?php } wp_reset_postdata(  )  ?>





<?php 

$posts_wordpress = new WP_Query(array(
    'post_type' => 'post', 
    'posts_per_page' => '4', 
    'post_status' => 'publish', 
    'category_name' => 'wordpress', 
));
if ($posts_wordpress->have_posts()) {

?>






                <div class="col-md-6">
                    <div class="box">
                        <span class="title">آموزش وردپرس</span>

                        <?php 
                        while ($posts_wordpress->have_posts()) {
                            $posts_wordpress->the_post()
                        ?>
                        
                        <div class="post_itme_bx">
                            <a href="<?php echo get_the_permalink( ) ?>">
                            <div class="col-md-5">
                                <div class="pic">
                                    <?php if(has_post_thumbnail( )) { ?>
                                    <img src="<?php echo get_the_post_thumbnail_url( ) ?>" alt="<?php echo get_the_title(  ) ?>">    
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="desc">
                                    <h5><?php echo get_the_title(  ) ?></h5>
                                    <p><?php echo get_the_excerpt(  ) ?></p>
                                    <span> <i class="fa fa-calendar-o"></i> <?php echo get_the_date(  ) ?> </span>
                                </div>
                            </div>
                            </a>
                        </div>
                     
                        <?php  } wp_reset_postdata(  ); ?>

                    </div>
                </div>








<?php } wp_reset_postdata(  )  ?>







            </div>
        </div>
    </div>
