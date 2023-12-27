<?php 

global $theme_prefix, $theme_uri;
$theme_prefix = 'wp2023_theme';
$theme_uri = get_template_directory_uri() . '/assets';
$theme_dir = get_template_directory() ;
$theme_version = '1.0';


// Đăng ký style cho theem
require_once $theme_dir . '/inc/scripts.php';

// Đăng ký các thành phần hỗ trợ theme
require_once $theme_dir . '/inc/theme_support.php';

// Đăng ký sidebar, widgets
require_once $theme_dir . '/inc/widgets.php';

// Đăng ký customizers
require_once $theme_dir . '/inc/customizers.php';

// Đăng ký shortcodes
require_once $theme_dir . '/inc/shortcodes.php';
