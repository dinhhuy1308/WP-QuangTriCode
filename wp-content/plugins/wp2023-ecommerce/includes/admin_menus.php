<?php 

add_action('admin_menu', 'wp2023_admin_menu');
function wp2023_admin_menu() {
    // Thêm menu cha
    add_menu_page(
        'Wordpress 2023',
        'Wordpress 2023',
        'manage_options',
        'wp2023', // menu_slug
        'wp2023_admin_page_dasboard',
        '',
        10,
    );

        add_submenu_page(
            'wp2023',
            'Đơn hàng',
            'Đơn hàng',
            'manage_options',
            'wp2023-order',
            'wp2023_admin_page_orders',
            10,
        );
        add_submenu_page(
            'wp2023',
            'Cấu hình',
            'Cấu hình',
            'manage_options',
            'wp2023-settings',
            'wp2023_admin_page_settings',
            10,
        );
}

function wp2023_admin_page_dasboard() {
    include_once WP2023_PATH . 'includes/admin_pages/dashboard.php';

}

function wp2023_admin_page_orders() {
    include_once WP2023_PATH . 'includes/admin_pages/orders.php';
}

function wp2023_admin_page_settings() {
    include_once WP2023_PATH . 'includes/admin_pages/settings.php';
}