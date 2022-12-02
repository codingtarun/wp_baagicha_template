<?php get_header();
the_post(); // use with the_content.
?>
<div id="main_container" class="container-fluid" style="margin-top: 5rem;">
    <h1><?php the_title(); ?> SINGLE DISEASE</h1>

    <?php
    the_post_thumbnail('thumbnail'); // get image including img tag 
    ?>

</div>
<?php get_footer(); ?>