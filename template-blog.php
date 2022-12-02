<?php
//Template Name:Blog Page

get_header();
the_post(); // use with the_content.
?>
<div id="main_container" style="margin-top: 5rem;">
    <div class="container mb-5">
        <h2 class="text-center heading_primary"><?php the_title(); ?></h2>
        <h5 class="text-center heading_tertiary mb-5">Latest Updates | Blogs | Inverviews</h5>
        <div class="row">
            <?php for ($i = 0; $i < 50; $i++) { ?>
                <div class="col-12 col-sm-4 col-md-3 blog_slider_box g-0">
                    <a href="#" class="blog_slider_box--link  shadow-sm">
                        <div class="blog_slider_box--link-img mb-2">
                            <img src="http://localhost/wp_playground/wp-content/uploads/2022/12/IMG_6277.jpg" alt="" srcset="" class="img-fluid">
                        </div>
                        <h3>
                            Category
                        </h3>
                        <h2>
                            संस्क्रुति उन्हे जानते नयेलिए वातावरण कारन सक्षम
                            देकर विनिमय अंतर्गत प्रेरना समाज उन्हे
                        </h2>
                        <p> <strong>Tarun Chauhan</strong> पुर्णता कार्यसिधान्तो लोगो बनाने एकत्रित विश्वव्यापि कार्य उनके बहतर
                            अनुवादक सुस्पश्ट संस्क्रुति उन्हे जानते नयेलिए वातावरण कारन सक्षम
                            देकर विनिमय अंतर्गत प्रेरना समाज उन्हे उपलब्ध तकनीकी उपेक्ष गयेगया
                            विज्ञान हमारी बदले हिंदी पहोच आधुनिक विभाजनक्षमता ढांचामात्रुभाषा </p>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>