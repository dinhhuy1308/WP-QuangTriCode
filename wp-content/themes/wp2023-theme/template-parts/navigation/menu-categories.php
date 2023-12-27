<div class="hero__categories">
    <div class="hero__categories__all">
        <i class="fa fa-bars"></i>
        <span>All departments</span>
    </div>
    <?php
    if (has_nav_menu('vertical')) {
        wp_nav_menu([
            'theme_location' => 'vertical',
            'menu_class' => 'menu_wrappers',
            'items_wrap' => '<ul class="%2$s" id="departments-menu">%3$s</ul>',
        ]);
    }
    ?>
</div>