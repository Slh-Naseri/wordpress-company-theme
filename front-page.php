<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner_image"
        style="background-image: url(https://preview.noortarbiat.ir/wp-content/uploads/2022/12/front_page.png);">
    </div>
</div>
<div class="news_container">
    <div class="layout_padding">
        <div class="row">
            <div class="col-lg-3 col-sm-6  padding_right_0 order-lg-3 order-2">
                <?php $post_id = array(125, 108);
                for ($i = 0; $i < 2; $i++) {
                    $post = get_post($post_id[$i]);
                    setup_postdata($post);
                ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <img src="<?php $pageBannerImage = get_field('page_banner_bg');
                    echo $pageBannerImage['url'] ?>" alt="" width="1200" height="800">
                    <!-- <?php the_post_thumbnail(); ?> -->
                    <div class="text_box">
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="col-lg-6  padding_0 center_box order-lg-2 order-1">
                <?php $post = get_post(156);
                setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <img src="<?php $pageBannerImage = get_field('page_banner_bg');
                    echo $pageBannerImage['url'] ?>" alt="" width="1200" height="800">
                    <div class="text_box">

                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding_left_0 order-lg-1 order-3">
                <?php $post_id = array(73, 72);
                for ($i = 0; $i < 2; $i++) {
                    $post = get_post($post_id[$i]);
                    setup_postdata($post);
                ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <img src="<?php $pageBannerImage = get_field('page_banner_bg');
                    echo $pageBannerImage['url'] ?>" alt="" width="1200" height="800">
                    <!-- <?php the_post_thumbnail(); ?> -->
                    <div class="text_box">
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="paneled-image">
        <div class="panel-image">
            <img width="960" height="540"
                src="https://preview.noortarbiat.ir/wp-content/uploads/2022/12/frontPage-header-1.jpg"
                class="attachment-panel-image size-panel-image wp-post-image" alt="" loading="lazy">
        </div>
        <div class="panel">
            <h6>About</h6>
            <p>The mission of The Walt Disney Company is to entertain, inform and inspire people around the globe
                through the power of unparalleled storytelling, reflecting the iconic brands, creative minds and
                innovative technologies that make ours the world’s premier entertainment company.</p>
            <a class="button" href="<?php echo site_url('/about-us') ?>"> View More</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>