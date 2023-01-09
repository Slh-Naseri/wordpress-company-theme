<?php
get_header();

while (have_posts()) {
    the_post();
    pageBanner(); ?>

<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo site_url() ?>"><i class="fa fa-home"
                    aria-hidden="true"></i> بازگشت به صفحه اصلی
            </a> <span class="metabox__main">
                <?php the_title(); ?>
            </span>
        </p>
    </div>

    <div class="generic-content">
        <!-- <img src="<?php the_post_thumbnail_url() ?>" alt=""> -->
        <?php echo ("kjhgfdsa");
    the_post_thumbnail();
    the_content(); ?>
    </div>
</div>

<?php
}

get_footer();
?>