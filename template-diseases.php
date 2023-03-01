<?php
//Template Name:Disease Page

get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container mb-5">
        <h2 class="text-center heading_primary"><?php the_title(); ?></h2>
        <div class="container" id="all_categories">
            <?php include '_inc/partials/_all_diseases_type_list.php'; ?>
        </div>
        <div class="row">
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="col-6 col-sm-4 col-md-3 g-0">
                    <div class="slider_box shadow-sm">
                        <a href="#" class="slider_box--link">
                            <div class="slider_box--link-img mb-2">
                                <img src="http://localhost/wp_playground/wp-content/uploads/2023/02/infected_new_leaves.png" alt="" srcset="" class="img-fluid">
                            </div>
                            <h3>
                                Category
                            </h3>
                            <h2>
                                अभी तक इस उद्योग
                            </h2>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>