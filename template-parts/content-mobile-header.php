<!-- Modal -->
    
<div class="modal fade mobile-header" id="mobile-menu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <?php if(the_custom_logo() != ''){
                        return the_custom_logo();
                    }else{
                        echo "<a href='/'><img src =".get_template_directory_uri()."/assets/img/main-logo.svg></a>";
                    } ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php wp_nav_menu(
                        [
                            'menu'=>'main-menu',
                            'menu_class'=>'main-menu',
                            'fallback_cb' => 'custom_menu_fallback_03'
                        ]);
                        function custom_menu_fallback_03(){
                            ?>
                            <ul class='custom-tool-tip'>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Services</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Skincare</a></li>
                                <li class="page_item page-item-2"><a href="<?php echo get_admin_url().'customize.php'?>">Our Approach</a></li>
                            </ul>
                            <?php
                        }
                    ;?>
            </div>
        </div>
    </div>
</div>