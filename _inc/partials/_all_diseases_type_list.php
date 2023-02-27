<?php
$diseasesTypes = get_terms(['taxonomy' => 'disease_types', 'hide_empty' => false]);
//print_r($fruitsList);
?>
<li class="categories">
    बीमारी
    <ul>
        <?php foreach ($diseasesTypes as $type) {
        ?>
            <li class="cat-item">
                <a href="#"><?php echo $type->name; ?></a>
            </li>
        <?php } ?>
    </ul>
</li>