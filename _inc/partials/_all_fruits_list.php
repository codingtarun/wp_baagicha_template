<?php
$fruitsList = get_terms(['taxonomy' => 'fruit', 'hide_empty' => false]);
//print_r($fruitsList);
?>
<li class="categories">
    किस्में
    <ul>
        <?php foreach ($fruitsList as $fruit) {
        ?>
            <li class="cat-item">
                <a href="#"><?php echo $fruit->name; ?></a>
            </li>
        <?php } ?>
    </ul>
</li>