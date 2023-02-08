<?php get_header( );?>

<?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                the_content();
            }
        }
        
?>

<?php get_template_part( 'template-parts/section', 'hero' );?>


<?php get_footer(); ?>