<?php global $theme_prefix, $theme_uri; ?>

<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <?php get_template_part('template-parts/footer/footer','widgets') ?>
        <?php get_template_part('template-parts/footer/footer','copyright') ?>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<?php wp_footer() ?>


</body>

</html>