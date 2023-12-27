<?php
/* 
Template Name: Page Home */
?>

<?php global $theme_uri; ?>
<?php get_header() ?>

<?php get_template_part('template-parts/page/home/categories') ?>
<?php get_template_part('template-parts/page/home/featured-product') ?>
<?php get_template_part('template-parts/page/home/banner') ?>
<?php get_template_part('template-parts/page/home/lastest-product') ?>
<?php get_template_part('template-parts/page/home/blog') ?>

<?php get_footer(); ?>