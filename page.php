<?php get_header();
the_post(); // use with the_content.
/**
 * THIS PAGE IS CALLED BY DEFAULT FOR EVERY PAGE
 */
?>
<div id="main_container" class="container-fluid" style="margin-top: 5rem;">
    <h1><?php the_title(); ?> | DEFAULT PAGE </h1>

    <h2><?php echo site_url(); ?></h2>

    <div class="container">
        <?php the_content(); // display the content which is added from admin panel 
        ?>
        <?php // echo get_the_content(); 
        ?>
        <!-- Use one of them as per the requirement -->

        <!-- Displaying featured image -->
        <?php
        the_post_thumbnail(array(500, 500)); // get image including img tag 
        ?>

        <?php
        // Get image path and use it with custom 'img'
        $imgPath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium');
        echo "<pre>";
        print_r($imgPath);
        echo "</pre>";
        ?>
        <img src="<?php echo $imgPath[0]; ?>" alt="" srcset="" class="fluid-img thumbnail">
        NO IMAGE
    </div>

</div>
<?php get_footer(); ?>