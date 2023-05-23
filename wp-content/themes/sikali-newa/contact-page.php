 <!-- Template Name: Contact Page -->
 <?php get_header('two'); ?>
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?></h1>
    </div>
    <a href="#contact_page" class="scroll-down" address="true"></a>
</section>
<section id="contact_page" class="contact_page_top ">
    <div class="container">
        <div class="contact_row">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div
                        class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-md-0 mt-4">
                        <h2><i class="fa fa-map-marker" aria-hidden="true"></i></h2>
                        <div class="py-3">
                            <h4>Address
                            </h4>

                        </div>
                        <a> <?php the_field('address') ?></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div
                        class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-md-0 mt-4">
                        <h2><i class="fa fa-phone" aria-hidden="true"></i></h2>
                        <div class="py-3">
                            <h4>Phone Number</h4>
                        </div>
                        <a href="tel:  <?php the_field('phone1') ?>"  tabindex="-1">  <?php the_field('phone1') ?>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div
                        class="contact_wrapp-icon text-center d-flex flex-column justify-content-center px-5 position-relative mt-lg-0 mt-4">
                        <h2><i class="fa fa-envelope-o" aria-hidden="true"></i></h2>
                        <div class="py-3">
                            <h4>Email Address</h4>
                        </div>
                        <a href="mailto: <?php the_field('email_address') ?>" tabindex="-1">

                        <?php the_field('email_address') ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="map p-0">
  <?php the_field('map') ?>
</section>
<?php get_footer(); ?>