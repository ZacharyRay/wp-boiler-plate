<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<nav>
<!-- menu -->
<?php 
    wp_nav_menu(array(
        'theme_location' => 'header_menu'
    ));
?>
<!-- menu end -->
</nav>
<body <?php body_class(); ?>>
    
