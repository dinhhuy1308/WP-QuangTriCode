<?php 
// Đăng ký loại bài viết sp
add_action('init', 'wp2023_cusstom_post_type');
function wp2023_cusstom_post_type() {
	register_post_type('product',
		array(
			'labels'      => array(
				'name'          => __('Products', 'wp2023_ecommerce'),
				'singular_name' => __('Product', 'wp2023_ecommerce'),
			),
				'public'      => true,
				'has_archive' => true,
                'rewrite'     => array( 'slug' => 'products' ), 
                'supports'    =>  array( 'title', 'editor', 'thumbnail', 'excerpt' ), 

		)
	);
}


// Taxonomy
add_action( 'init', 'wp2023_register_taxonomy_product' );
function wp2023_register_taxonomy_product () {
    $labels = array(
        'name'              => _x( 'Categories', 'taxonomy general name' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Categories' ),
        'all_items'         => __( 'All Categories' ),
        'parent_item'       => __( 'Parent Category' ),
        'parent_item_colon' => __( 'Parent Category:' ),
        'edit_item'         => __( 'Edit Category' ),
        'update_item'       => __( 'Update Category' ),
        'add_new_item'      => __( 'Add New Category' ),
        'new_item_name'     => __( 'New Category Name' ),
        'menu_name'         => __( 'Category' ),
    );
    $args   = array(
        'hierarchical'      => true, 
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'product_cat', [ 'product' ], $args );
}



