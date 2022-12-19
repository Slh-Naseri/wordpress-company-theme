<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner_image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg'); ?>);">
        <div class="background-overlay"></div>
        <h1 class="banner_headline c-white">Welcome!</h1>
    </div>
</div>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
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
                    echo $pageBannerImage['url'] ?>" alt="" width="700" height="800">
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
                <?php $post = get_post(38);
                setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <div><img src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>"></div>
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
</div>

<?php get_footer(); ?>