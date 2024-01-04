<?php
global $post;
$product_price = get_post_meta( $post->ID, 'product_price', true );
$product_price_sale = get_post_meta( $post->ID, 'product_price_sale', true );
$product_stock = get_post_meta( $post->ID, 'product_stock', true );

?>
<table class="form-table" role="presentation">
    <tr>
        <th scope="row"><label for="product_price">Giá sản phẩm</label></th>
        <td><input name="product_price" type="text" id="product_price" value="<?php echo $product_price ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th scope="row"><label for="product_price_sale">Giá khuyến mãi</label></th>
        <td><input name="product_price_sale" type="text" id="product_price_sale" value="<?php echo $product_price_sale ?>" class="regular-text"></td>
    </tr>
    <tr>
        <th scope="row"><label for="product_stock">Số lượng</label></th>
        <td><input name="product_stock" type="text" id="product_stock" value="<?php echo $product_stock ?>" class="regular-text"></td>
    </tr>
</table>