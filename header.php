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
                            <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">رویدادها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                پروژه ها
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>

    </header>
</body>

</html>
<!-- <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div> -->
<!-- <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search"
                            aria-hidden="true"></i></span> -->
<!-- <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
                    <h1 class="school-logo-text ">
                        <a href="<?php echo site_url() ?>"><strong>پیام آوران هنر و فناوری شرق</strong></a>
                    </h1>
                </div>
                <div class="site-header__menu group">
                    <nav class="main-navigation">
                        <ul>
                            <li><a href="<?php echo site_url('/about-us') ?>">درباره ما</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown">پروژه
                                    ها</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item text-success" href="#">تست</a>
                                    <a class="dropdown-item text-success" href="#">تست22222</a>
                                    <a class="dropdown-item text-success" href="#">تست3</a>
                                    <a class="dropdown-item text-success" href="#">4 </a>
                                    <a class="dropdown-item text-success" href="#">تستتتتتتتت5</a>
                                    <a class="dropdown-item text-success" href="#">تست 666666</a>
                                </div>
                            </li>
                            <li><a href="#">صفحه اصلی</a></li>
                        </ul>
                    </nav> -->
<!-- <div class="site-header__util">
                    <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                    <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                    <span class="search-trigger js-search-trigger"><i class="fa fa-search"
                            aria-hidden="true"></i></span>
                </div> -->
<!-- </div>

            </nav>
        </div> -->