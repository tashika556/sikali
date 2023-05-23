 <!-- Template Name: Activity Page -->
 <?php get_header('two'); ?>
 <section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?></h1>
    </div>
    <a href="#activities_page" class="scroll-down" address="true"></a>
</section>
<section id="activities_page" class="activities_page">
    <div class="container">
        <div class="row">

        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'activity',
   'orderby' => 'date',
   'category_name'=>'activity',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>

            <div class="col-lg-4 col-md-6">
                <div class="activities_block position-relative mb-lg-4 mb-3">
                    <div class="activities_img">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid w-100">
                    </div>
                    <a href="<?php the_permalink() ?>">
                        <div class="activities_content bg-white">
                            <h6><span><?php the_field('sub_topics') ?></span> </h6>

                            <h5><?php the_title() ?></h5>

                        </div>
                    </a>
                </div>
            </div>
           
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
                   


        </div>
    </div>

</section>

<?php include 'room_panal.php';?>
<?php include 'testimonial-page.php';?>

<section class="booking-logo bg-white py-md-5 py-3 position-relative">
    <div class="container">
        <div class="booking_wrap">
            <div class="booking_item">
                <a href=" <?php the_field('agoda',29) ?>" target="_blank" class="logo_item d-flex align-items-center h-100 justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-agoda.png">
                </a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('booking',29) ?>" target="_blank" class="logo_item d-flex align-items-center h-100 justify-content-center"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-booking.png"></a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('expedia',29) ?>" target="_blank" class="logo_item d-flex align-items-center h-100 justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-expedia.png">
                </a>
            </div>
            <div class="booking_item">
                <a href=" <?php the_field('trip_advisor',29) ?>" target="_blank" class="logo_item d-flex align-items-center h-100 justify-content-center"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/partner/logo-tripadvisor.png"></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>