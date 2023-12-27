<?php global $theme_uri; ?>
<?php
$page_title = '';
$page_sub_title = '';

if(is_category()) {
    $page_title = single_cat_title('Category: ', false);
    $page_sub_title = single_cat_title('', false);
} 
if(is_tag()) {
    $page_title = single_cat_title('Tag: ', false);
    $page_sub_title = single_cat_title('', false);
} 

if(is_search()) {
    $s = get_query_var('s'); // $_GET
    $page_title = 'Tìm kiếm cho ' . $s;
    $page_sub_title = 'Kết quả tìm kiếm cho ' . $s;
} 

if(is_page()) {
    $page_title = get_the_title();
    $page_sub_title = $page_title;
} 

?>

<section class="breadcrumb-section set-bg" data-setbg="<?= $theme_uri ?>/img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2><?php echo $page_title ?></h2>
                    <div class="breadcrumb__option">
                        <a href="<?php echo home_url() ?>">Home</a>
                        <span><?php echo $page_sub_title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>