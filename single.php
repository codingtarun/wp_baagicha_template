<?php get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container post">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Blog</a></li>
            </ol>
        </nav>
        <hr>
        <div class="container" id="all_categories">
            <?php include '_inc/partials/_all_categories_list.php'; ?>
        </div>
        <h1><?php the_title(); ?></h1>
        <h3>
            <?php
            $categories =  get_the_category($post->ID); //[0]; //->name;
            //print_r($categories);
            foreach ($categories as $cat) {
                echo $cat->name . " | ";
            }
            //echo $categories;
            echo "<br>";
            echo get_the_date() . " | " . get_the_author_meta($fields = 'display_name'); ?>
        </h3>
        <div class="d-flex justify-content-center post-img-div">
            <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>" alt="" srcset="" class="img-fluid post-img" width="60%">
        </div>

        <div class="all_content">
            <div class="blog-excrept">
                <?php echo the_excerpt(); ?>
            </div>
            <div class="fb_like_share">
                <?php include '_inc/partials/fb_like_share_btn.php'; ?>
            </div>
            <div class="main-body">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
    <div class="container" id="all_categories">
        <?php include '_inc/partials/_all_categories_list.php'; ?>
    </div>
    <hr>
    <div class="col-12 d-flex justify-content-center">
        <?php
        global $wp;
        ?>
        <hr>
        <div class="fb-comments" data-href="https://google.com/<?php //echo home_url($wp->request); 
                                                                ?>" data-width="" data-numposts="5"></div>
    </div>
</div>
<?php get_footer(); ?>