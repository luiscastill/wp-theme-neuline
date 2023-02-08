<!DOCTYPE html>
<html <?php language_attributes()?>>

<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php wp_head();?>

</head>

<body>
    <?php wp_body_open();?>
    <header>
        <?php get_template_part('template-parts/content', 'header');?>
        <?php get_template_part('template-parts/content', 'mobile-header');?>
    </header>
    
    <main>