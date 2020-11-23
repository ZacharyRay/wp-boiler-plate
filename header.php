<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta <?php bloginfo('charset') ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
    <header class="header-nav"> 
        <nav class="header-nav__nav">
        <!-- menu -->
            <div class="menu-top">
                <div class="menu-top__logo">
                    <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                        }
                    ?>
                </div>
                <div class="menu-top__nav">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'header_menu'
                        ));
                    ?>
                </div>
                <div class="menu-top__bg"></div>
                <div class="menu-top__aside">
                        <!-- ex: cart link etc -->
                        <div class="cart">CART</div>
                </div>
            </div>
            <!-- burger -->
            <div class="burger-icon">
                <button class="hamburger hamburger--squeeze" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        <!-- menu end -->
        </nav>
    </header>
    <div class="content-wrapper">
