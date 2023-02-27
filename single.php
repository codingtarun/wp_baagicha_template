<?php get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'small')[0]; ?>" alt="" srcset="" class="img-fluid">
        <p class="text-justify"><?php the_content(); ?></p>
    </div>
    <div class="container" id="all_categories">
        <?php include '_inc/partials/_all_categories_list.php'; ?>
    </div>
    <hr>
    <h1>THIS IS DEFAULT PAGE</h1>
    <div class="container">
        <?php comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>