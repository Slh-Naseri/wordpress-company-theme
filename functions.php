<?php

function pageBanner()
{
?>
<div class="page-banner">
    <div class="page-banner_image" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_bg');
    echo $pageBannerImage['url'] ?>);">
    </div>
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
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('projectLandscape', 400, 260, true);
}

add_action('after_setup_theme', 'add_features');

function Payam_Avaran()
{
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'Payam_Avaran');


// Redirect subscriber accounts out of admin and onto homepage
add_action('admin_init', 'redirectSubsToFrontend');

function redirectSubsToFrontend()
{
    $ourCurrentUser = wp_get_current_user();

    if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
        wp_redirect(site_url('/'));
        exit;
    }
}


add_action('wp_loaded', 'noSubsAdminBar');

function noSubsAdminBar()
{
    show_admin_bar(false);
    $ourCurrentUser = wp_get_current_user();

    if (count($ourCurrentUser->roles) == 1 and $ourCurrentUser->roles[0] == 'subscriber') {
        show_admin_bar(false);
    }
}

?>
