<?php global $theme_uri; ?>

<?php
    $blogs = get_posts([
        'post_type' => 'post',
        'numberposts' => 3,
    ]);
?>

<!-- Blog Section Begin -->
<?php if(count($blogs) ): ?>
<section class="from-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title from-blog__title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach($blogs as $blog): ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <?php get_template_part('template-parts/post/content', null, ['post_id' =>$blog->ID]) ?>

                <!-- <div class="blog__item">
                    <div class="blog__item__pic">
                        <img src="<?= $theme_uri; ?>/img/blog/blog-1.jpg" alt="">
                    </div>
                    <div class="blog__item__text">
                        <ul>
                            <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                            <li><i class="fa fa-comment-o"></i> 5</li>
                        </ul>
                        <h5><a href="#">Cooking tips make cooking simple</a></h5>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                    </div>
                </div> -->
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php endif ?>
<!-- Blog Section End -->
