<?php

get_header();

while (have_posts()) {
    the_post(); 
    pageBanner();?>


<div class="container container--narrow page-section" style="text-align: justify;">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('project'); ?>"><i
                    class="fa fa-home" aria-hidden="true"></i> پروژه ها</a> <span class="metabox__main">
                <?php the_title(); ?>
            </span></p>
    </div>

    <div class="generic-content">
		<div class="container pt-5 pb-5 px-5">
        <?php the_content(); ?>
		<!-- <img src="<?php the_post_thumbnail_url() ?>" alt=""> -->
		</div>
    </div>

</div>



<?php }

get_footer();

?>