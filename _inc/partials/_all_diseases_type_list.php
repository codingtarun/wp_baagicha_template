<?php
$diseasesTypes = get_terms(['taxonomy' => 'disease_types', 'hide_empty' => false, 'orderby' => 'ID', 'order' => 'ASC', 'number' => 10]);
//print_r($fruitsList);
?>
<li class="categories">
    बीमारी
    <ul>
        <?php foreach ($diseasesTypes as $type) {
        ?>
            <li class="cat-item">
                <a href="#"> <?php echo $type->name; ?></a>
                <small><?php echo get_wp_term_image($type->term_id); ?></small>
            </li>
        <?php } ?>
    </ul>
</li>