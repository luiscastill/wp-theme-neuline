<header>
    <div class="header">
        <div class="header-sub">
            <h2>Make an appointment today!</h2>
            <p>(972)346-7670 | 2740 Virginia Parkway Suite 200 McKinney, TX 75071</p>
        </div>
        <div class="header-content">
            <div class="menu">
                <?php wp_nav_menu(
                    [
                        'menu'=>'left-menu',
                        'menu_class'=>'menu-left',
                        'depth' => 2
                    ]
                );?>
                <div class="menu-logo">
                    <?php the_custom_logo();?>
                </div>
                <?php wp_nav_menu(
                    [
                        'menu'=>'right-menu',
                        'menu_class'=>'menu-right'
                    ]
                );?>
            </div>
        </div>
    </div>
</header>