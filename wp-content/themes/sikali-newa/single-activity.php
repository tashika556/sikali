<?php get_header('two'); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
    <h1><?php the_title() ?></h1>
    </div>
    <a href="#activities_detail" class="scroll-down" address="true"></a>
</section>
<section id="activities_detail" class="">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="readmore__content text-center mb-4">
                  <?php the_content() ?>
                </div>
                <div class="d-flex">
                    <button class="readmore__toggle custom-btn theme_btn border-0 mt-3 m-auto" role="switch"
                        aria-checked="true">
                        Show more
                    </button>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="activities_detail facilities p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="facilities_left_block bg_gray d-flex flex-column justify-content-center">
                   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="room_des">
                                <div class="facilities_list services_list">
                                    <div class="include mb-lg-4 mb-2">
                                        <h4> Included</h4>
                                    </div>
                                    <ul>
                                    <?php   if( have_rows('included_activities') ):?>
<?php while( have_rows('included_activities') ) : the_row();?>
                                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/tick.png" class="img-fluid"
                                                    aria-hidden="true"><?php the_sub_field('title') ?></a></li>
                                                    <?php   endwhile; ?>
<?php endif;?> 
                                    

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="room_des">
                                <div class="facilities_list services_list">
                                <div class="excluded mb-lg-4 mb-2">
                                        <h4> Excluded</h4>
                                    </div>
                                    <ul>
                                    <?php   if( have_rows('excluded_activities') ):?>
<?php while( have_rows('excluded_activities') ) : the_row();?>
                                        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/crush.png" class="img-fluid"
                                                    aria-hidden="true"><?php the_sub_field('title') ?></a></li>
                                      
                                                    <?php   endwhile; ?>
<?php endif;?> 
                       

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 bg_black">
                <div class="room_detail-slider">

                <?php 
$images = get_field('image_slider');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
                    <div class="room_detail-item">
                        <div class="room_detail-img">
                            <img src="<?php echo $image['url'];?>" class="img-fluid w-100">
                        </div>
                    </div>
                  
                    <?php endforeach; ?>
<?php endif;?> 

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