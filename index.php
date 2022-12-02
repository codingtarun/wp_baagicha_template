<?php
//Template Name:Blog Page

get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container mb-5">
        <h2 class="text-center heading_primary">Blog</h2>
        <h5 class="text-center heading_tertiary mb-5">Latest Updates | Blogs | Inverviews</h5>
        <div class="row">
            <?php while (have_posts()) {
                the_post();
            ?>
                <div class="col-12 col-sm-4 col-md-3 blog_slider_box g-0">
                    <a href="<?php echo get_permalink(); ?>" class="blog_slider_box--link  shadow-sm">
                        <div class="blog_slider_box--link-img mb-2">
                            <?php
                            $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                            if ($imgPath) { ?>
                                <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid">
                            <?php } else { ?>
                                <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid" height="141px">
                            <?php }
                            ?>

                        </div>
                        <h3>
                            Category
                        </h3>
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <p>
                            <strong><?php echo get_the_date(); ?> | Tarun Chauhan</strong>
                            <?php the_excerpt(); ?>
                        </p>
                    </a>
                </div>
            <?php } ?>
            <div class="row mt-5">
                <div class="col-12">
                    <?php echo wp_pagenavi(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>