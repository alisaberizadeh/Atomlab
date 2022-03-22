<?php 
    $posts_cats = wp_get_post_categories( get_the_ID(),array('fields' => 'ids') );
    $releated_posts = new WP_Query(array(
        'post_type'=>'post',
        'posts_per_page'=>'4',
        'post_status'=>'publish',
        'category__in'=>$posts_cats,
        'post__not_in'=>array($post->ID),
        'orderby'=>'rand',
    ));
 
    if($releated_posts->have_posts(  )){

    
?>

<div class="releated_postd" >
<p class="releated_postd__title" >مطالب مرتبط رو بخون !!!</p>

    <div class="releated_postd__box">
    <?php 
    while ($releated_posts->have_posts(  )) { $releated_posts->the_post(  ); ?>
        <a href="<?php the_permalink(  ) ?>"><?php the_title(  ) ?></a>
    <?php } wp_reset_postdata(  ) ?>
    </div>
</div>

<?php } ?>