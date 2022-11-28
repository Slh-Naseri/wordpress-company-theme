<?php get_header(); ?>

<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg'); ?>)"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re
            interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>
<!-- 
<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
                    <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a
                            href="#" class="nu gray">Learn more</a></p>
                </div>
            </div>
            <div class="event-summary">
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Apr</span>
                    <span class="event-summary__day">02</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
                    <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#"
                            class="nu gray">Learn more</a></p>
                </div>
            </div>

            <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
    </div>
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <span class="event-summary__month">Jan</span>
                    <span class="event-summary__day">20</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a>
                    </h5>
                    <p>For the 100th year in a row we are voted #1. <a href="#" class="nu gray">Read more</a></p>
                </div>
            </div>
            <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <span class="event-summary__month">Feb</span>
                    <span class="event-summary__day">04</span>
                </a>
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National
                            Spotlight</a></h5>
                    <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read
                            more</a></p>
                </div>
            </div>

            <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
    </div>
</div> -->

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

<div class="container box_container">
    <div class="layout_padding">
        <div class="row">
            <div class="col-lg-3 col-sm-6  padding_right_0 order-lg-3 order-2">
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <img class="radius" src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>">
                    <div class="text_box">
                        <?php $post = get_post(1);
                        setup_postdata($post); ?>
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                        <!-- <div class="seemore_bt"><a href="#">بیشتر ببینید</a></div> -->
                    </div>
                </div>
                <?php $post = get_post(40);
                        setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <img class="radius" src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>">
                    <div class="text_box">
                        
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                        <!-- <div class="seemore_bt"><a href="#">بیشتر ببینید</a></div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6  padding_0 center_box order-lg-2 order-1">
                <?php $post = get_post(38);
                        setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <div><img class="radius" src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>"></div>
                    <div class="text_box">
                        
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 18); ?>
                        </p>
                        <!-- <div class="seemore_bt"><a href="#">بیشتر ببینید</a></div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 padding_left_0 order-lg-1 order-3">
                <?php $post = get_post(73);
                        setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <div><img class="radius" src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>"></div>
                    <div class="text_box">
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                        <!-- <div class="seemore_bt"><a href="#">بیشتر ببینید</a></div> -->
                    </div>
                </div>
                <?php $post = get_post(72);
                setup_postdata($post); ?>
                <div class="news_box" onclick="window.location='<?php the_permalink(); ?>';">
                    <div><img class="radius" src="<?php echo get_theme_file_uri('/images/apples.jpg'); ?>"></div>
                    <div class="text_box">

                        <!-- <time class="express_text">24/8/1401</time> -->
                        <h5 class="title_box">
                            <?php the_title(); ?>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); ?>
                        </p>
                        <!-- <div class="seemore_bt"><a href="#">بیشتر ببینید</a></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>