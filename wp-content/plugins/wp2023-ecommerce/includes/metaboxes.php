<?php 
// Đăng ký metabox cho Post Type
add_action( 'add_meta_boxes', 'wp2023_metabox_product' );
function wp2023_metabox_product() {
	$screens = [ 'post', 'wporg_cpt' ];
	foreach ( $screens as $screen ) {
		add_meta_box(
			'wp2023_product_info',                
			'Thông tin sản phẩm',     
			'wp2023_meta_boxe_product',  
			'product'                            
		);
	}
}

function wp2023_meta_boxe_product () {
    include_once WP2023_PATH . 'includes/templates/metabox_product.php';
}

// Lưu 
add_action( 'save_post', 'wp2023_save_post_product' );
function wp2023_save_post_product( $post_id ) {
    if($_REQUEST['post_type'] == 'product') {
        // echo '<pre>';
        // print_r($_REQUEST);
        // die();

        $product_price = $_REQUEST['product_price'];
        $product_price_sale = $_REQUEST['product_price_sale'];
        $product_stock = $_REQUEST['product_stock'];

        // Lưu vào CSDL
        update_post_meta( $post_id, 'product_price', $product_price);
        update_post_meta( $post_id, 'product_price_sale', $product_price_sale);
        update_post_meta( $post_id, 'product_stock', $product_stock);
    }

}


// Đăng ký metabox cho Taxonomy
// Thêm mới
add_action('product_cat_add_form_fields', 'wp2023_metabox_product_cat_add');
function wp2023_metabox_product_cat_add () {
    include_once WP2023_PATH . 'includes/templates/wp2023_metabox_product_cat_add.php';
}

// Chỉnh sửa
add_action('product_cat_edit_form_fields', 'wp2023_metabox_product_cat_edit', 10, 2);
function wp2023_metabox_product_cat_edit ($term, $taxonomy) {
    include_once WP2023_PATH . 'includes/templates/wp2023_metabox_product_cat_edit.php';
}

// Xử lý khi lưu term
add_action('create_product_cat', 'wp2023_metabox_product_cat_save', 10, 1);
add_action('edit_product_cat', 'wp2023_metabox_product_cat_save', 10, 1);
function wp2023_metabox_product_cat_save ($term_id) {
    $image = $_POST['image'];
    update_term_meta($term_id, 'image', $image);
    echo $image;
}



