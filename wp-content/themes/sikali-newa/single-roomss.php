<?php get_header('two'); ?>
<section class="banner" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?>
        </h1>
    </div>
    <a href="#room_detail" class="scroll-down" address="true"></a>
</section>
<section id="room_detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="readmore__content text-center mb-4">
                    <div class="mb-3">
                        <h1>Start from:<span><?php the_field('price') ?></span>/night</h1>
                    </div>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                           <?php the_content() ?>  <?php endwhile; else: ?>
                           
<?php endif; ?>
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
<section class="facilities p-0">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="facilities_left_block bg_black d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <div class="section_title">

                                <div class="mb-4">
                                    <h2>Room Facilities</h2>
                                </div>
                                <div class="section_icon icon_left position-relative d-inline">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="room_des">
                                <div class="facilities_list services_list">
                                    <ul>
                                    <?php   if( have_rows('room_facilities') ):?>
<?php while( have_rows('room_facilities') ) : the_row();?>
                                        <li><a href="#"><img src="<?php
                                $images = get_sub_field('image');?>
                                <?php echo $images['url'];?>"
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
                <div class="room_detail-slider"><?php
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