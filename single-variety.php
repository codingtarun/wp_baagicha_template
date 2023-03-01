<?php get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-5 col-lg-4 mb-4">
                <img src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0]; ?>" alt="" srcset="" class="img-fluid" width="100%">
            </div>
            <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                <h1 class="text-center"><?php the_title(); ?></h1>
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <td><strong>Title</strong></td>
                            <td><?php echo get_field('title'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Strain</strong></td>
                            <td><?php echo get_field('strain'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Origin</strong></td>
                            <td><?php echo get_field('origin'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Shelf Life</strong></td>
                            <td><?php echo get_field('shelf_life'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Flowering</strong></td>
                            <td><?php echo get_field('flowering'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Harvesting</strong></td>
                            <td><?php echo get_field('harvesting'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Pollination</strong></td>
                            <td><?php echo get_field('pollination'); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Bearing</strong></td>
                            <td><?php echo get_field('fruit_bearing'); ?></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <strong>Identification</strong><br>
                                <?php echo get_field('identification'); ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <strong>Description</strong><br>
                                <?php echo get_field('description'); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12">
                <div class="fb-like" data-href="<?php echo "https://baagicha.in/" . $_SERVER['REQUEST_URI']; ?>" data-width="" data-layout="" data-action="" data-size="" data-share="true"></div>
            </div>
            <div class="col-12">
                <div class="fb-comments" data-href="<?php echo "https://baagicha.in/" . $_SERVER['REQUEST_URI']; ?>" data-width="" data-numposts="5"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>