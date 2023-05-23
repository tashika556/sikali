<?php get_header('two'); ?>
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?></h1>
    </div>

    <a href="#blog_detail" class="scroll-down" address="true"></a>
</section>
<section id="blog_detail">
    <div class="container">
        <div class="row ">

            <div class="col-md-8">
                <div class="bg-white p-4">
                    <div class="readmore__content mb-4">
                        <div class="mb-3">
                            <h4><?php echo get_the_date() ?></h4>
                        </div>
                        <?php the_content() ?>

                    </div>
                    <div class="d-flex">
                        <button class="readmore__toggle custom-btn theme_btn border-0 mt-3" role="switch"
                            aria-checked="true">
                            Show more
                        </button>
                    </div>
                </div>


            </div>
            <div class="col-md-4">
                <div class="blog_detail-section">
                    <h4>Blogs</h4>
                </div>

              <div class="blog_list_detail">
              <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'post',
   'orderby' => 'date',
   'category_name'=>'blog',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

                <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                </a>
               
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              </div>
                <div class="blog_detail-sidebar">
                    <div class="deluxe-left-block position-relative mt-4">
                        <div class="deluxe-left-img position-relative">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider04.jpg"
                                class="img-fluid" alt="">
                        </div>
                        <div class="deluxe-left-text text-white text-center">
                            <h1>Give us a call when you need help.</h1>
                            <h3> <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span>
                                <?php the_field('phone1',29) ?>
                            </h3>
                            <h5><?php the_field('email_address',29) ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'testimonial-page.php'; ?>
<section class="booking-logo bg-white py-md-5 py-3 position-relative">
    <div class="container">
        <div class="booking_wrap">
            <div class="booking_item">
                <a href=" <?php the_field('agoda',29) ?>" target="_blank"
                    class="logo_item d-flex align-items-center h-100 justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-agoda.png">
                </a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('booking',29) ?>" target="_blank"
                    class="logo_item d-flex align-items-center h-100 justify-content-center"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-booking.png"></a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('expedia',29) ?>" target="_blank"
                    class="logo_item d-flex align-items-center h-100 justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-expedia.png">
                </a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('trip_advisor',29) ?>" target="_blank"
                    class="logo_item d-flex align-items-center h-100 justify-content-center"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-tripadvisor.png"></a>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>