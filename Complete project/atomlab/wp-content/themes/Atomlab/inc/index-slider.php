<div class="slider-box text-center">
                <div class="row">
                    <div class="col-md-12">
                        <?php 
                            $text_big = get_theme_mod( 'text_big', false);
                            if($text_big && !empty($text_big)){      
                        ?>
                        <h1><?php  echo $text_big; ?></h1>
                        <?php } ?>
                        <?php 
                            $text_small = get_theme_mod( 'text_small', false);
                            if($text_small && !empty($text_small)){      
                        ?>
                        <p><?php  echo $text_small; ?></p>
                        <?php } ?>
                         <span class="btn_searchIcon" onclick="showSeach()"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>