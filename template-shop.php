<?php
//Template Name:Shop Page

get_header();
the_post(); // use with the_content.
?>
<div id="main_container" class="container-fluid" style="margin-top: 5rem;">
    <h1><?php the_title(); ?></h1>
    <h2>Custom Shop Page</h2>


</div>
<?php get_footer(); ?>