<?php
/*
 * Plugin Name:       Wordpress 2023 - Ecommerce
 * Plugin URI:        #
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Dinh Huy
 * Author URI:        #
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        #
 * Text Domain:       wp2023_ecommerce
 * Domain Path:       /languages
 */

// Định nghĩa các hằng số
define('WP2023_PATH', plugin_dir_path(__FILE__));
define('WP2023_URI', plugin_dir_url(__FILE__));

// Định nghĩa khi plugin kích hoạt
register_activation_hook(__FILE__, 'wp2023_ecommerce_activation');
function wp2023_ecommerce_activation () {
    // Tạo CSDL


    // Tạo dữ liệu mẫu


    // Tạo option
}

// Định nghĩa khi plugin tắt đi
register_deactivation_hook(__FILE__,'wp2023_ecommerce_deactivation');
function wp2023_ecommerce_deactivation () {
    // Xóa CSDL


    // Xóa option

}

include_once WP2023_PATH . 'includes/include.php';














