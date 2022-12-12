<?php

get_header(); ?>

<div class="page-banner">
  <div>
  <img src="<?php echo get_theme_file_uri('/images/ocean.jpg') ?>" alt=""></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">پروژه ها</h1>
    <div class="page-banner__intro">
      <p>Keep up with our latest news.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
    while (have_posts()) {
      the_post(); ?>
  <div class="post-item">
    <h5 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
      </a></h5>

    <div class="metabox">
      این مطلب در
      <!-- <?php the_author_posts_link(); ?> -->
      <?php the_time('l, F j, Y'); ?> در دسته
      <?php echo get_the_category_list(', '); ?> منتشر شد
      </p>
    </div>

    <div>
      <?php the_excerpt(); ?>
      <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">بیشتر بخوانید &raquo;</a></p>
    </div>

  </div>
  <?php }
    ?>
</div>

<?php get_footer();

?>