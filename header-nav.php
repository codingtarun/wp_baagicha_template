<!--Facebook SDK-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0&appId=228453946206759&autoLogAppEvents=1" nonce="IUCBVL8s"></script>
<!--Main Navigation-->
<nav class="navbar navbar-expand-lg fixed-top bg-light shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url(); ?>">
            <!--<img src="<?php echo get_header_image(); ?>" alt="" srcset="" width="20px" height="20px">-->
            <h3>बागीचा</h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars fa-2x"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary_menu', // primary_menu key is used to call the menu
                'container' => 'ul',
                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                'menu_id' => 'custom_link_class',
                'add_li_class'  => 'nav-item',
            ));

            ?>
        </div>
    </div>
</nav>