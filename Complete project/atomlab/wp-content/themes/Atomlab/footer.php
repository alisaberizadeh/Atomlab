<div class="footer_box">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="col-md-4">
                        <div class="footer-menu">
                            <span class="title">دسترسی سریع</span>
                            <?php wp_nav_menu(array(
                             'theme_location'=>'Footer_Right_Menu',
                             'depth'=>'1',
                         )); ?>
                        </div>
                    </div>
 
                    <div class="col-md-4">
                        <div class="footer-menu">
                            <span class="title">دسنه بندی موضوعی</span>
                            <?php wp_nav_menu(array(
                             'theme_location'=>'Footer_Left_Menu',
                             'depth'=>'1',
                         )); ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                   
                       <?php 
                            if (is_active_sidebar('fdesci')) {
                               dynamic_sidebar('fdesci');
                            }
                       ?>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="copy-r">
                        <span>
                            &copy; حقوق انتشار برای "اتم لب" محفوط است
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php wp_footer() ?>
    
</body>

</html>