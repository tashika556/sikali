 <!-- Template Name: About Page -->
 <?php get_header('two'); ?>
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?></h1>
    </div>
    <a href="#about" class="scroll-down" address="true"></a>
</section>
<section id="about" class="about_section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about_page_img d-lg-flex d-block">
                    <div class="about_img-one mr-4 mt-4 mb-lg-0 mb-3">
                    <?php $image=get_field('image_one'); ?>
                        <img src="<?php echo $image['url'];?>" class="img-fluid">
                    </div>
                    <div class="about_img-two">
                    <?php $image=get_field('image_two'); ?>
                        <img src="<?php echo $image['url'];?>" class="img-fluid">
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div class="section_title-right pl-lg-3 pl-0 mt-lg-0 mt-4 border-0">


                    <div class="mb-md-4 mb-2">
                        <div class="mb-4">
                            <h2><?php bloginfo('name'); ?></h2>
                        </div>
                        <div class="section_icon icon_left position-relative d-inline">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">

                        </div>
                    </div>
                    <div class="readmore__content mb-4">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
                    </div>
                    <button class="readmore__toggle custom-btn theme_btn border-0 mt-3" role="switch"
                        aria-checked="true">
                        Show more
                    </button>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="services">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-2 offset-0">
                <div class="section_title">

                    <div class="mb-4 text-white">
                        <h2>Our Service</h2>
                    </div>
                    <div class="section_icon icon_left position-relative d-inline">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">

                    </div>

                </div>
                <div class="row">
             
                    <div class="col-lg-8">
                   
                        <div class="about_services-slider">
                        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'services',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'services',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
      
                            <div class="about_services-item">
                                <div class="service_icon bg-white">
                                    <div class="services_icon-img">
                                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                                    </div>
                                    <div class="services_content">
                                        <h4><?php the_title() ?></h4>
                                        <?php the_content() ?>
                                    </div>
                                </div>
    
                            </div>
                        
                                                                        
                            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
                        </div>
                  
                      
                    </div>  
                </div>    
            </div>

        </div>
    </div>

</section>
<?php include 'room_panal.php';?>

<?php include 'testimonial-page.php'; ?>



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