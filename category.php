<?php
//Template Name:Blog Page
/**
 * 
 * Index page is by default used to show blog section
 */
get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">

    <div class="container mb-5">
        <h2 class="text-center heading_primary">ब्लॉग | <?php single_cat_title(); ?> </h2>
        <div class="container" id="all_categories">
            <?php include '_inc/partials/_all_categories_list.php';
            ?>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $posts = new WP_Query($args);
            while ($posts->have_posts()) {
                $posts->the_post();
            ?>
                <div class="col-6 col-sm-4 col-md-3 blog_slider_box g-0">
                    <a href="<?php echo get_permalink(); ?>" class="blog_slider_box--link shadow-sm">
                        <div class="blog_slider_box--link-img mb-2">
                            <?php
                            $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                            if ($imgPath) { ?>
                                <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid" width="100%">
                            <?php } else { ?>
                                <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid">
                            <?php }
                            ?>
                            <div class="img-outline shadow-sm"></div>
                        </div>
                        <h3>
                            <?php
                            $categories =  get_the_category($post->ID); //[0]; //->name;
                            //print_r($categories);
                            foreach ($categories as $cat) {
                                echo $cat->name . " | ";
                            }

                            ?>
                        </h3>
                        <h2>
                            <?php the_title(); ?>
                        </h2>
                        <h3><?php echo get_the_date(); ?> | Tarun Chauhan</h3>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                    </a>
                </div>
            <?php }
            wp_reset_postdata(); ?>

            <div class="row mt-5">
                <div class="col-12">
                    <?php echo wp_pagenavi(); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<?php get_footer(); ?>