<?php get_header(); ?>
<!--Main Container-->
<div class="container-fluid" style="margin-top: 5rem;">
    <!-- Hero Section-->
    <div class="row mb-4 border-bottom">
        <div class="col-12 col-sm-2">
            <h3>Weather widgit</h3>
        </div>
        <div class="col-12 order-first col-sm-10">
            <section id="hero" class="shadow-sm">
                <div class="hero_slider shadow-sm">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="hero_slider--box">
                            <img src="https://picsum.photos/id/<?php echo $i; ?>/1200/500" class="img-fluid" alt="" srcset="">
                            <a href="http://google.com">अभी तक इस उद्योग का मानक डमी पाठ मन गयातक इस उद्योग का मानक डमी पाठ मन गया, जब एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई</a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<div class="container mb-4 mt-4">
    <div class="row">
        <div class="col-12 g-0">
            <h2 class="text-center heading_primary">Varieties</h2>
            <h5 class="text-center heading_tertiary">Latest Apple Varieties Information</h5>
            <section id="varieties">
                <div class="varieties_slider">
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div class="varieties_slider--box shadow-sm rounded">
                            <a href="#" class="varieties_slider--box--link">
                                <div class="img--box rounded-top">
                                    <img src="https://picsum.photos/id/23<?php echo $i; ?>/300/300" alt="" srcset="" class="img-fluid">
                                </div>
                                <h2 class="text-center p-2">
                                    अभी तक इस उद्योग
                                </h2>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<div id="blog" class="mb-4 mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center heading_primary">Blog</h2>
                <h5 class="text-center heading_tertiary">Blog | Success Stories | New Technologies</h5>
                <section id="blog">
                    <div class="blog_slider">
                        <?php for ($i = 0; $i < 10; $i++) { ?>
                            <div class="blog_slider--box">
                                <a href="#" class="blog_slider--box--link">
                                    <div class="img--box rounded-top">
                                        <img src="https://picsum.photos/id/23<?php echo $i; ?>/500/500" alt="" srcset="" class="img-fluid rounded">
                                    </div>
                                    <h2>
                                        अभी तक इस उद्योग अभी तक इस उद्योग अभी तक इस उद्योग अभी तक इस उद्योगअभी तक इस उद्योग
                                    </h2>
                                    <p>
                                        <strong>योजन उद्योग</strong> | अक्षर योजन उद्योग का एक साधारण डमी पाठ है. सन १५०० के
                                        बाद से अभी तक इस उद्योग का मानक डमी पाठ मन गया, जब
                                        एक अज्ञात मुद्रक ने नमूना लेकर एक नमूना किताब बनाई. यह न
                                        केवल पाँच सदियों से जीवित रहा बल्कि इसने इलेक्ट्रॉनिक मीडिया में
                                        छलांग लगाने के बाद भी मूलतः अपरिवर्तित रहा. यह 1960 के दशक
                                        में अंश युक्त पत्र के रिलीज के साथ लोकप्रिय हुआ
                                    </p>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<div class="container mb-4 mt-4">
    <div class="row">
        <div class="col-12 g-0">
            <h2 class="text-center heading_primary">Diseases</h2>
            <h5 class="text-center heading_tertiary">Apple Diseases & Management</h5>
            <section id="varieties">
                <div class="varieties_slider">
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div class="varieties_slider--box shadow-sm rounded">
                            <a href="#" class="varieties_slider--box--link">
                                <div class="img--box rounded-top">
                                    <img src="https://picsum.photos/id/23<?php echo $i; ?>/300/300" alt="" srcset="" class="img-fluid">
                                </div>
                                <h2 class="text-center p-2">
                                    उद्योग मानक
                                </h2>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>
<!--<div class="container-fluid" id="videos">
    <div class="row">
        <div class="col-12 g-0">
            <h2 class="text-center heading_primary">BaagichaTV</h2>
            <h5 class="text-center heading_tertiary">Blog | Success Stories | New Technologies</h5>
        </div>
    </div>
</div>-->
<!--<div class="container">
    <div class="row mb-4">
        <div class="col-12 g-0">
            <h2 class="text-center heading_primary">Diseases</h2>
            <h5 class="text-center heading_tertiary">Apple Diseases & Management</h5>
            <section id="varieties">
                <div class="varieties_slider">
                    <?php for ($i = 0; $i < 10; $i++) { ?>
                        <div class="varieties_slider--box shadow-sm rounded">
                            <a href="#" class="varieties_slider--box--link">
                                <div class="img--box rounded-top">
                                    <img src="https://picsum.photos/id/23<?php echo $i; ?>/300/300" alt="" srcset="" class="img-fluid">
                                </div>
                                <h2 class="text-center p-2">
                                    उद्योग मानक
                                </h2>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </div>
</div>-->
<?php get_footer(); ?>