<?php

get_header();

while (have_posts()) {
    the_post();
    pageBanner(); ?>

<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home"
                    aria-hidden="true"></i> وبلاگ</a> <span class="metabox__main">این مطلب در
                <!--                 <?php the_author_posts_link(); ?> -->
                <?php the_time('l, F j, Y'); ?> منتشر شد
            </span></p>
    </div>

    <div class="generic-content">
        <?php the_content(); ?>
    </div>

</div>



<?php }

get_footer();

?>