<?php

get_header(); ?>

<div class="page-banner">
    <div class="page-banner_image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);">
        <div class="background-overlay"></div>
        <div class="banner_headline">
            <h1 class="page-banner__title">وبلاگ</h1>
            <div class="page-banner__intro">
                <p>اتفاقات اخیر</p>
            </div>
        </div>
    </div>
</div>

<div class="container container--narrow page-section">
    <?php
    while (have_posts()) {
        the_post(); ?>
    <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a></h2>

        <div class="metabox">
            این مطلب در
            <!-- <?php the_author_posts_link(); ?> -->
            <?php the_time('l, F j, Y'); ?> منتشر شد
            </p>
        </div>

        <div>
            <?php the_excerpt(); ?>
            <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">بیشتر بخوانید &raquo;</a></p>
        </div>

    </div>
    <?php }
    ?>
</div>

<?php get_footer();

?>