    <div class="header">
        <div class="header-sub">
            <div class="container d-flex justify-content-center">
                <h2>Make an appointment today!</h2>
                <p>(972)346-7670 | 2740 Virginia Parkway Suite 200 McKinney, TX 75071</p>
            </div>
        </div>
        <div class="header-content">
            <div class="container">
                <div class="menu">
                    <?php wp_nav_menu(
                        [
                            'menu'=>'left-menu',
                            'menu_class'=>'menu-left',
                            'depth' => 2,
                            'fallback_cb' => 'custom_menu_fallback_01'
                        ]);
                        function custom_menu_fallback_01(){
                            ?>
                            <ul class='custom-tool-tip'>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Services</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Skincare</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Our Approach</a></li>
                            </ul>
                            <?php
                        }
                    ;?>
                    <div class="menu-logo">
                        <?php if(the_custom_logo() != ''){
                            return the_custom_logo();
                        }else{
                            echo "<a href='/'><img src =".get_template_directory_uri()."/assets/img/main-logo.svg></a>";
                        } ?>
                    </div>
                    <?php wp_nav_menu(
                        [
                            'menu'=>'right-menu',
                            'menu_class'=>'menu-right',
                            'fallback_cb' => 'custom_menu_fallback_02'
                        ]
                    );
                        function custom_menu_fallback_02(){
                            ?>
                            <ul>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Our Team</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Careers and Partnerships</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Contact Us</a></li>
                            </ul>
                            <?php
                        }
                    ?>     
                </div>
            </div>
            <div class="mobile-menu">
                <div class="menu-logo">
                    <?php if(the_custom_logo() != ''){
                        return the_custom_logo();
                    }else{
                        echo "<a href='/'><img src =".get_template_directory_uri()."/assets/img/main-logo.svg></a>";
                    } ?>
                </div>
                <div class="toggle-menu" data-toggle="modal" data-target="#mobile-menu" >
                    <i class="fa-solid fa-bars"></i>
                </div>

            </div>
        </div>
        
    </div>
    