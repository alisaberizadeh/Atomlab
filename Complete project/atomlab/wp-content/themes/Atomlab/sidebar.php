<div class="col-md-3">
                    <div class="search_box">
                        <form action="<?php bloginfo('home'); ?>" method="get">
                            <input type="text" name="s" placeholder="جستوجو کنید...">
                            <button><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    
                         <?php 
                            if (is_active_sidebar('last_posts_wig')) {
                                dynamic_sidebar('last_posts_wig');
                            }                         
                         ?>
                    
                    <?php 
                            if (is_active_sidebar('cats_wig')) {
                                dynamic_sidebar('cats_wig');
                            }                         
                         ?>
                </div>