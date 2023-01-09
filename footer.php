<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <footer class="site-footer">
        <div class="site-footer__inner container container--narrow">
            <div class="group">
                <div class="site-footer__col">
                    <h3 class="headline headline--small">تماس با ما</h3>
                    <nav class="nav-list">
                        <ul>
                            <li>تلفن: 05138791884</li>
                            <li>ساعت پاسخگویی: 8 الی 16 روزهای کاری</li>
                            <li>ایمیل: <a href="mailto:PayamAvaranHolding@gmail.com">PayamAvaranHolding@gmail.com</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="site-footer__col">
                    <h3 class="headline headline--small">پروژه ها</h3>
                    <nav class="nav-list">
                        <ul>
                            <li>
                                <?php $post = get_post(73);
                                setup_postdata($post); ?><a href="<?php the_permalink(); ?>">مزون لباسینو</a>
                            </li>
                            <li>
                                <?php $post = get_post(72);
                                setup_postdata($post); ?><a href="<?php the_permalink(); ?>">جوپاپل</a>
                            </li>
                            <li>
                                <?php $post = get_post(108);
                                setup_postdata($post); ?><a href="<?php the_permalink(); ?>">پرو مجازی لباس</a>
                            </li>
                            <li>
                                <?php $post = get_post(137);
                                setup_postdata($post); ?><a href="<?php the_permalink(); ?>">بازی درمانی</a>
                            </li>
                            <li>
                                <?php $post = get_post(125);
                                setup_postdata($post); ?><a href="<?php the_permalink(); ?>">سفارش مجازی کفش</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="site-footer__col">
                    <h3 class="headline headline--small">موقعیت ما</h3>
                    <nav class="nav-list">
                        <ul>
                            <li>کدپستی :9177734459</li>
                            <li>آدرس:مشهد، خیابان پیروزی 15، دهخدا 12، پلاک 22، واحد 1 و 2</li>
                        </ul>
                    </nav>
                </div>


            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>

</html>