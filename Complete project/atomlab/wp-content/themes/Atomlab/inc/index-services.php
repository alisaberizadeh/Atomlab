<div class="services">
        <div class="container">
            <div class="row">


            <?php 
            
            $servicess = get_theme_mod( 'servicess', false );
            if (is_array($servicess) && !empty($servicess)) {
                for($i=1;$i<=count($servicess);$i++){
            
            ?>        
                <div class="col-md-3 nopadding">
                    <div class="item">
                        <img src="<?php echo $servicess[$i]['img'] ?>" alt="<?php echo $servicess[$i]['title'] ?>">
                        <span><?php echo $servicess[$i]['title'] ?></span>
                        <p>
                        <?php echo $servicess[$i]['desc'] ?>
                        </p>
                    </div>
                </div>
             
<?php 
   }
}
?>


            </div>
        </div>
    </div>