<?php
//Template Name:Home Page
/**
 * This is the actual home page
 */
get_header(); ?>
<div id="main_container" class="container-fluid" style="margin-top: 5rem;">
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12">
                <section id="hero_container">
                    <div class="hero">
                        <?php
                        $args = [
                            'post_type' => 'carousel',
                            'post_status' => 'publish'
                        ];
                        $carousels = new WP_Query($args);
                        while ($carousels->have_posts()) {
                            $carousels->the_post();
                        ?>
                            <div class="hero_slider">
                                <?php
                                $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
                                if ($imgPath) { ?>
                                    <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid" height="600px" width="300px">
                                <?php } else { ?>
                                    <img src="http://baagicha.in/wp-content/uploads/2023/03/IMG_6140-min.jpg" alt="" srcset="" class="img-fluid" width="100%">
                                <?php }
                                ?>
                                <a href="<?php echo get_field('url'); ?>" target="_blank"><?php echo get_the_title(); ?></a>
                                <div class="slider_border">
                                    <!-- <a href="<?php echo get_field('url'); ?>" target="_blank"><?php echo get_the_title(); ?></a> -->
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 g-0">
                <h2 class="text-center heading_primary">किस्में</h2>
                <h5 class="text-center heading_tertiary">Latest Apple Varieties Information</h5>
                <section id="slider_container">
                    <div class="slider">
                        <?php
                        $args = array(
                            'post_type' => 'variety',
                            'post_status' => 'publish'
                        );
                        $varieties = new WP_Query($args);
                        while ($varieties->have_posts()) {
                            $varieties->the_post(); ?>
                            <div class="slider_box shadow-sm">
                                <a href="<?php echo get_the_permalink(); ?>" class="slider_box--link">
                                    <div class="slider_box--link-img mb-2">
                                        <?php
                                        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), array(450, 450));
                                        if ($imgPath) { ?>
                                            <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid" width="100%">
                                        <?php } else { ?>
                                            <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid">
                                        <?php }
                                        ?>
                                    </div>
                                    <h3>
                                        Category | HOME
                                    </h3>
                                    <h2>
                                        <?php echo the_title(); ?>
                                    </h2>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="slider_box shadow-sm">
                            <a href="#" class="slider_box--link">
                                <div class="slider_box--link-img mb-2">
                                    <img src="https://picsum.photos/id/23/500/500" alt="" srcset="" class="img-fluid">
                                </div>
                                <h3>
                                    View All
                                </h3>
                                <h2>
                                    View All
                                </h2>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5" id="blog">
        <div class="row">
            <div class="col-12 g-0">
                <h2 class="text-center heading_primary">ब्लॉग</h2>
                <!-- <div class="container" id="all_categories">
                    <?php include '_inc/partials/_all_categories_list.php'; ?>
                </div> -->
                <section id="blog_slider_container">
                    <div class="blog_slider">
                        <?php
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish'
                        );
                        $posts = new WP_Query($args);
                        while ($posts->have_posts()) {
                            $posts->the_post(); ?>
                            <div class="blog_slider_box">
                                <a href="<?php echo get_permalink(); ?>" class="blog_slider_box--link">
                                    <div class="blog_slider_box--link-img mb-2">
                                        <?php
                                        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), array(450, 450));
                                        if ($imgPath) { ?>
                                            <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid" width="100%">
                                        <?php } else { ?>
                                            <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid">
                                        <?php }
                                        ?>
                                        <div class="img-outline shadow-lg"></div>
                                    </div>
                                    <h3>
                                        <?php
                                        $categories =  get_the_category($post->ID); //[0]; //->name;
                                        //print_r($categories);
                                        foreach ($categories as $cat) {
                                            echo $cat->name . " | ";
                                        }
                                        //echo $categories;
                                        ?>
                                    </h3>
                                    <h2>
                                        <?php echo get_the_title(); ?>
                                    </h2>
                                    <h3><?php echo get_the_date(); ?> | Tarun Chauhan</h3>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="blog_slider_box">
                            <a href="<?php echo site_url(); ?>./blog/" class="blog_slider_box--link">
                                <div class="blog_slider_box--link-img mb-2">
                                    <img src="http://baagicha.in/wp-content/uploads/2023/03/IMG_6140-min.jpg" alt="" srcset="" class="img-fluid">
                                    <div class="img-outline shadow-lg"></div>
                                </div>
                                <h3>
                                    ब्लॉग
                                </h3>
                                <h2>
                                    और देखें
                                </h2>
                                <p style="font-size:2rem"> सेब बागवानी से जुडी हुई और जानकारी के लिए कृपया यहाँ क्लिक करें</p>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 g-0">
                <h2 class="text-center heading_primary">बीमारी</h2>
                <h5 class="text-center heading_tertiary">Latest Apple Varieties Information</h5>
                <section id="slider_container">
                    <div class="slider">
                        <?php
                        $args = array(
                            'post_type' => 'disease',
                            'post_status' => 'publish'
                        );
                        $diseases = new WP_Query($args);
                        while ($diseases->have_posts()) {
                            $diseases->the_post(); ?>
                            <div class="slider_box shadow-sm">
                                <a href="<?php echo get_the_permalink(); ?>" class="slider_box--link">
                                    <div class="slider_box--link-img mb-2">
                                        <?php
                                        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), array(450, 450));
                                        if ($imgPath) { ?>
                                            <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid" width="100%">
                                        <?php } else { ?>
                                            <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid">
                                        <?php }
                                        ?>
                                        <div class="img-outline shadow-lg"></div>
                                    </div>
                                    <h3>
                                        <?php
                                        //$categories =  get_the_category($post->ID); //[0]; //->name;
                                        $categories = get_terms(['taxonomy' => 'disease_types', 'hide_empty' => false]);
                                        //print_r($categories);
                                        foreach ($categories as $cat) {
                                            echo $cat->name . " | ";
                                        }
                                        ?>
                                    </h3>
                                    <h2>
                                        <?php echo get_the_title(); ?>
                                    </h2>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="slider_box shadow-sm">
                            <a href="#" class="slider_box--link">
                                <div class="slider_box--link-img mb-2">
                                    <img src="https://picsum.photos/id/23/500/500" alt="" srcset="" class="img-fluid">
                                </div>
                                <h3>
                                    View All
                                </h3>
                                <h2>
                                    View All
                                </h2>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php get_footer();
?>