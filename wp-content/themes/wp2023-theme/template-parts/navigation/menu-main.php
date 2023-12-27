<nav class="header__menu">
    <?php
    if (has_nav_menu('primary')) {
        wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'menu_wrappers',
            'container_class' => 'header__menu',
            'container' => true,
            'items_wrap' => '<ul class="%2$s" id="primary-menu">%3$s</ul>',
        ]);
    }
    ?>
</nav>