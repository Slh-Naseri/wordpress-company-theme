<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body <?php body_class(); ?>>

    <header class="site-header">
        <nav class="navbar navbar-expand-lg main-navigation">
            <div class="container">
                <h1 class="school-logo-text">
                    <a href="<?php echo site_url() ?>"><strong>پیام آوران هنر و فناوری شرق</strong></a>
                </h1>
                <button class="navbar-toggler fa fa-bars bg-light" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link" aria-current="page" href="<?php echo site_url('/about-us') ?>">درباره
                                ما</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<?php echo site_url('/blog') ?>">وبلاگ
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                پروژه ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                <?php $post = get_post(72);
                                setup_postdata($post); ?>
                                <a class="dropdown-item" href="<?php the_permalink(); ?>">جوپاپل</a></li>
                                <li>
                                <?php $post = get_post(73);
                                setup_postdata($post); ?><a class="dropdown-item" href="<?php the_permalink(); ?>">مزون لباسینو</a></li>
                                <li>
                                <?php $post = get_post(125);
                                setup_postdata($post); ?><a class="dropdown-item" href="<?php the_permalink(); ?>">سفارش مجازی کفش</a></li>
                                <li>
                                <?php $post = get_post(108);
                                setup_postdata($post); ?><a class="dropdown-item" href="<?php the_permalink(); ?>">پرو مجازی لباس</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
</body>

</html>