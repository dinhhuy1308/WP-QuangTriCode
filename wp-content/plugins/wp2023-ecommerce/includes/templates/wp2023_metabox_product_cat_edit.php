<?php
// echo '<pre>';
// print_r($term);
    $image = get_term_meta($term->term_id, 'image', true);
    echo $image;
?>

<tr class="form-field">
    <th scope="row">
        <label for="image">Hình ảnh</label>
    </th>
    <td>
        <input type="text" name="image" value="<?php echo $image ?>">
    </td>
</tr>