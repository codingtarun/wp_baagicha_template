<?php
//Template Name:Variety Page

get_header();
the_post(); // use with the_content.
$diseases_type = get_queried_object();
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container mb-5">
        <h2 class="text-center heading_primary"><?php echo $diseases_type->name; ?></h2>
        <div class="container" id="all_categories">
            <?php include '_inc/partials/_all_diseases_type_list.php'; ?>
        </div>
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'disease',
                'post_status' => 'publish',
                'tax_query' => array(
                    [
                        'taxonomy' => 'disease_types',
                        'field' => 'term_id',
                        'terms' =>  $diseases_type->term_id
                    ]
                )
            );
            $diseases = new WP_Query($args);

            while ($diseases->have_posts()) {
                $diseases->the_post();
            ?>
                <div class="col-6 col-sm-4 col-md-3 g-0">
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
                </div>
            <?php } ?>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <?php echo wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>