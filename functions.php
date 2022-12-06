<?php

// add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

// function special_nav_class($classes, $item)
// {
//     if (in_array('current-menu-item', $classes)) {
//         $classes[] = 'active ';
//     }
//     return $classes;
// }

function pageBanner()
{
?>
<div class="page-banner">
    <div>
    <img src="<?php $pageBannerImage = get_field('page_banner_bg');
    echo $pageBannerImage['sizes']['pageBanner'] ?>" alt=""></div>
    <div class="page-banner__content container">
        <h1 class="page-banner__title">
            <?php the_field('title') ?>
        </h1>
        <div class="page-banner__intro">
            <p>
                <?php the_field('page_banner_subtitle') ?>
            </p>
        </div>
    </div>
</div>

<?php }

function add_files()
{
    wp_enqueue_script('bootstrap_js1', get_theme_file_uri('/js/bootstrap.bundle.min.js'), null, '', true);
    wp_enqueue_script('main_js', get_theme_file_uri('/build/index.js'), null, '', true);
    wp_register_script('main_jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '', true);
    wp_register_script('bootstrap_js2', get_theme_file_uri('/js/bootstrap.min.js'), null, '', true);
    wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('main_style', get_stylesheet_uri());
    wp_enqueue_style('style_1', get_theme_file_uri('/build/index.css'));
    wp_enqueue_style('style_2', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
}
add_action('wp_enqueue_scripts', 'add_files');

function add_features()
{
    add_image_size('pageBanner', 1920, 780, true);
}

add_action('after_setup_theme', 'add_features');

function Payam_Avaran()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'Payam_Avaran');
?>