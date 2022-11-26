<!--Main Navigation-->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'container' => 'ul',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                'menu_id' => 'custom_link_class',
                'add_li_class'  => 'nav-item',
            ));

            ?>
        </div>
    </div>
</nav>