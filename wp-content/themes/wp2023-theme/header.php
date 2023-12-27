<?php global $theme_prefix, $theme_uri; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>
    <?php wp_head() ?>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="<?= $theme_uri ?>/img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="<?= $theme_uri ?>/img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <?php
            if (has_nav_menu('mobile')) {
                wp_nav_menu([
                    'theme_location' => 'mobile',
                    'menu_class' => 'mobile-menu_wrappers',
                    'items_wrap' => '<ul class="%2$s" id="mobile-menu">%3$s</ul>',
                ]);
            }
            ?>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <?php get_theme_mod('header_top_social') ?>

        </div>
        <div class="humberger__menu__contact">
            <ul>
                <?php get_theme_mod('header_top_left') ?>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <?php get_template_part('template-parts/header/header', 'top-bar') ?>
        <?php get_template_part('template-parts/header/header', 'main') ?>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php get_template_part('template-parts/header/header', 'bottom') ?>
    <!-- Hero Section End -->