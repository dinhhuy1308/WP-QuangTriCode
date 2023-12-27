<?php 
$post_id = isset($args['post_id']) ? $args['post_id'] : get_the_ID();
?>

<div class="blog__item">
    <div class="blog__item__pic">
        <a href="<?php the_permalink($post_id) ?>">
            <?php echo get_the_post_thumbnail($post_id) ?>
        </a>
    </div>
    <div class="blog__item__text">
        <ul>
            <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date('',$post_id) ?></li>
            <li><i class="fa fa-comment-o"></i> <?php comments_number($post_id) ?></li>
        </ul>
        <h5><a href="<?php the_permalink() ?>"><?= get_the_title($post_id) ?></a></h5>
        <p><?php echo get_the_excerpt($post_id) ?> </p>
        <a href="<?php the_permalink($post_id) ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
    </div>
</div>