<?php
//Template Name:Home Page
get_header(); ?>
<div id="main_container" class="container-fluid" style="margin-top: 5rem;">
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 col-md-8">
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
                                $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                if ($imgPath) { ?>
                                    <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="img-fluid">
                                <?php } else { ?>
                                    <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid" height="141px">
                                <?php }
                                ?>
                                <a href="<?php echo get_field('url'); ?>" target="_blank"><?php echo get_the_title(); ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                SOME THINGS HERE
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-12 g-0">
                <h2 class="text-center heading_primary">Varieties</h2>
                <h5 class="text-center heading_tertiary">Latest Apple Varieties Information</h5>
                <section id="slider_container">
                    <div class="slider">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="slider_box shadow-sm">
                                <a href="#" class="slider_box--link">
                                    <div class="slider_box--link-img mb-2">
                                        <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/apple.png" alt="" srcset="" class="img-fluid">
                                    </div>
                                    <h3>
                                        Category
                                    </h3>
                                    <h2>
                                        अभी तक इस उद्योग
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
                <h2 class="text-center heading_primary">Blog</h2>
                <h5 class="text-center heading_tertiary mb-5">Latest Updates | Blogs | Inverviews</h5>
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
                                <a href="#" class="blog_slider_box--link">
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
                                        <?php
                                        $categories =  get_the_category($post->ID)[0]->name;
                                        echo $categories;
                                        ?>
                                    </h3>
                                    <h2>
                                        <?php echo get_the_title(); ?>
                                    </h2>
                                    <p>
                                        <strong><?php echo get_the_date(); ?> | Tarun Chauhan</strong>
                                        <?php the_excerpt(); ?>
                                    </p>
                                </a>
                            </div>
                        <?php } ?>
                        <div class="blog_slider_box">
                            <a href="#" class="blog_slider_box--link">
                                <div class="blog_slider_box--link-img mb-2">
                                    <img src="https://picsum.photos/id/21/500/500" alt="" srcset="" class="img-fluid">
                                </div>
                                <h3>
                                    View All
                                </h3>
                                <h2>
                                    View ALL
                                </h2>
                                <p> पुर्णता कार्यसिधान्तो लोगो बनाने एकत्रित विश्वव्यापि कार्य उनके बहतर
                                    अनुवादक सुस्पश्ट संस्क्रुति उन्हे जानते नयेलिए वातावरण कारन सक्षम
                                    देकर विनिमय अंतर्गत प्रेरना समाज उन्हे उपलब्ध तकनीकी उपेक्ष गयेगया
                                    विज्ञान हमारी बदले हिंदी पहोच आधुनिक विभाजनक्षमता ढांचामात्रुभाषा </p>
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
                <h2 class="text-center heading_primary">Diseases</h2>
                <h5 class="text-center heading_tertiary">Latest Apple Varieties Information</h5>
                <section id="slider_container">
                    <div class="slider">
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="slider_box shadow-sm">
                                <a href="#" class="slider_box--link">
                                    <div class="slider_box--link-img mb-2">
                                        <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/infected_leaf_close_shot-min.png" alt="" srcset="" class="img-fluid">
                                    </div>
                                    <h3>
                                        Category
                                    </h3>
                                    <h2>
                                        अभी तक इस उद्योग
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
</div>
<?php get_footer();
?>