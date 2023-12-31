<?php 
global $theme_dir;
require_once $theme_dir . '/inc/widgets/WP2023_Recent_News.php';
require_once $theme_dir . '/inc/widgets/WP2023_Tags.php';

add_action( 'widgets_init', 'wp2023_register_widgets' );
function wp2023_register_widgets() {
	/* Đăng ký sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Primary Sidebar' ),
			'description'   => __( 'A short description of the sidebar.' ),
			'before_widget' => '<div id="%1$s" class="blog__sidebar__item %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-1',
			'name'          => __( 'Footer 1 Sidebar','wp2023-theme' ),
			'description'   => __( 'A short description of the sidebar.','wp2023-theme' ),
			'before_widget' => '<div class="footer__widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-footer-title">',
			'after_title'   => '</h6>',
		)
	);
	register_sidebar(
		array(
			'id'            => 'footer-2',
			'name'          => __( 'Footer 2 Sidebar','wp2023-theme' ),
			'description'   => __( 'A short description of the sidebar.','wp2023-theme' ),
			'before_widget' => '<div class="footer__widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-footer-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'id'            => 'footer-3',
			'name'          => __( 'Footer 3 Sidebar','wp2023-theme' ),
			'description'   => __( 'A short description of the sidebar.','wp2023-theme' ),
			'before_widget' => '<div class="footer__widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h6 class="widget-footer-title">',
			'after_title'   => '</h6>',
		)
	);


	/* Đăng ký widget. */
    register_widget( 'WP2023_Recent_News' );
    register_widget( 'WP2023_Tags' );
}