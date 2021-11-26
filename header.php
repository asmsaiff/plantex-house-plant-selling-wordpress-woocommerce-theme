<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php bloginfo( 'title' ); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="<?php echo home_url(); ?>" class="nav__logo">
                <i class="ri-leaf-line nav__logo-icon"></i> <?php bloginfo( 'title' ); ?>
            </a>

            <div class="nav__menu" id="nav-menu">
                <?php
                    $menu_args = array(
                        'theme_location'        =>  'primary-menu',
                        'menu_id'               =>  'primary-menu',
                        'menu_class'            =>  'nav__list',
                        'menu_container'        =>  'ul',
                        'echo'                  =>  false
                    );
                    $plantex_main_menu = wp_nav_menu($menu_args);

                    $plantex_main_menu = str_replace('menu-item', 'menu-item nav__item', $plantex_main_menu);
                    $plantex_main_menu = str_replace('current-menu-item', 'current-menu-item active-link', $plantex_main_menu);

                    echo $plantex_main_menu;
                ?>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__btns">
                <!-- Theme change button -->
                <i class="ri-moon-line change-theme" id="theme-button"></i>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>