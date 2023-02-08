<footer>
    <div class="container footer">
        <div class="footer-logo">
            <?php if(the_custom_logo() != ''){
                        return the_custom_logo();
                    }else{
                        echo "<a href='/'><img src =".get_template_directory_uri()."/assets/img/main-logo.svg></a>";
                    } ?>
        </div>
        <div class="footer-col-1">
            <div class="footer-col-1-content">
                <a href="http://">
                    (972) 346-7670 2740 <br>Virginia Parkway Suite 200 <br>McKinney, TX 75071
                </a>
            </div>            
        </div>
        <div class="footer-col-2">
            <div class="footer-col-2-content">
                <div class="openning-hours">
                    <p>Monday-Friday <br>8am-12pm | 1pm-5pm</p>
                </div>
                <div class="social-icons">
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/fa-neuline.svg'?>" alt="" srcset=""></a>
                    <a href="#"><img src="<?php echo get_template_directory_uri().'/assets/img/ig-neuline.svg'?>" alt="" srcset=""></a>
                </div>
            </div>
        </div>
    </div>
</footer>