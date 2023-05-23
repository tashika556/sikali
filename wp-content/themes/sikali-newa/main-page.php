 <!-- Template Name: Home Page -->
 <?php get_header(); ?>
<section class="slider_homepage p-0">
    <div class="slider stick-dots">
    <?php 
$images = get_field('image_slider');
if( $images ): ?>
<?php foreach( $images as $image ): ?>
        <div class="slide">
       
            <div class="slide__img">
                <img src="" data-lazy="<?php echo $image['url'];?>" class="full-image animated"
                    data-animation-in="zoomInImage" />
            </div>
       
        </div>     <?php endforeach; ?>
<?php endif;?> 
  
    </div>
    <a href="#about" class="scroll-down" address="true"></a>
</section>
<section id="about" class="about_section bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="section_title-right ">
                    <div class="mb-md-4 mb-2">
                        <div class="mb-4">
                            <h6>Family Resort</h6>
                            <h1><?php bloginfo('name'); ?></h1>
                        </div>
                        <div class="section_icon icon_left position-relative d-inline">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">
                        </div>
                    </div>
             <?php the_field('summary',47); ?>

                    <div class="default-btn-wrapp mt-md-5 mt-3">
                        <a href="<?php echo get_page_link(47); ?>" class="btn_default">Read More
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-12">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="about_img mb-md-0 mb-4">
                            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(47) ); ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review_block ml-md-3 ml-0  about_reatiing bg_green text-center p-md-4 p-3 ">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/tripadvisor-seeklogo.png" class="img-fluid">
                            <div class=" pb-4 pt-2 text-white">
                                <h1>4.8</h1>
                            </div>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/h1-star.png">
                            <div class="text-white pt-3">
                                <h4>1,496 Reviews</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 pt-4 flex_mobile">
                    <div class="row">
                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'services',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'services',
   'posts_per_page' => 4,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                        <div class="col-6">
                            <div class="services_img d-flex flex-md-row flex-column align-items-center ">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" class="img-fluid">
                                <div class="ml-2 mt-md-0 mt-2">
                                    <h5><?php the_title() ?></h5>
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
</section>

<section id="room" class="room dark_gray">
    <div class="container-fluid p-lg-0 p-4">
        <div class="row_wrapp ml-auto">
            <div class="row">
                <div class="offset-lg-2 offset-0 col-lg-4 col-md-6">
                    <div class="section_title-right d-flex flex-column justify-content-center h-100 pr-lg-4 pr-0">


                        <div class="mb-md-4 mb-2">
                            <div class="mb-4">
                                <h2>The Stay</h2>
                            </div>
                            <div class="section_icon icon_left position-relative d-inline">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">

                            </div>
                        </div>

                        <?php the_field('summary',47) ?>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="room_slider d-flex align-items-center h-100 mt-lg-0 mt-2">
                    <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'roomss',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'rooms',
   'posts_per_page' => 100,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                        <a href="<?php the_permalink() ?>">
                            <div class="room_slider_itme ">
                                <div class="room_slider_wrap position-relative">
                                    <div class="room_slider_img">
                                    <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                                    </div>
                                    <div class="room_slider_content text-white">
                                    <div class="mb-2">
                                            <h4><?php the_title() ?></h4>
                                        </div>
                                        <h5>From <span><?php the_field('price') ?></span> <span>/ Night</span></h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endwhile; ?>
<?php wp_reset_postdata(); ?>    

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="activities bg_img dark_before">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-7">
                <div class="activities_slider">
                

                
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'activity',
   'orderby' => 'date',
   'category_name'=>'activity',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                    <div class="activities_item">
                        <div class="activities_block">
                            <div class="activties_img">
                                <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid w-100">
                            </div>
                            <div class="activities_text text-white text-center">
                                <h5><?php the_title() ?></h5>
                            </div>
                        </div>
                    </div>
              

          
                    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
                   
                </div>
            </div>
            <div class="col-lg-5">
                <div
                    class="section_title-right text-white d-flex flex-column justify-content-center h-100 pl-5 mt-lg-0 mt-4">

                    <div class="mb-4">
                        <div class="mb-md-4 mb-2">
                            <h1>Activities</h1>
                        </div>
                        <div class="section_icon icon_left position-relative d-inline">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">
                        </div>
                    </div>
              <?php the_field('summary',121) ?>

                    <div class="default-btn-wrapp mt-md-5 mt-3">
                        <a href="#book" class="btn_default">Book Now
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section_title">

                    <div class="mb-4">
                        <h1>Blogs</h1>
                    </div>
                    <div class="section_icon  position-relative d-inline">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'post',
   'orderby' => 'date',
   'category_name'=>'blog',
   'posts_per_page' => 3,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
            <div class="col-lg-4 col-md-6">
                
                <div class="blog_wrap position-relative mb-lg-0 mb-5">
                    <div class="blog_img">
                        <img src="<?php echo the_post_thumbnail_url() ?>" class="img-fluid">
                    </div>
                    <div class="blog_content d-flex justify-content-center flex-column">

                        <a href="<?php the_permalink() ?>">
                            <h5><?php the_title() ?>
                            </h5>
                        </a>
                        <div class="blog_date">
                            <h5><strong> <?php echo get_the_date('d') ?></strong> / <span><?php echo get_the_date('M') ?></span></h5>
                        </div>
                    </div>

                </div>
            </div>
            <?php endwhile; ?>
<?php wp_reset_postdata(); ?>
        
        </div>
    </div>
</section>

<section id="book" class="booking_sec position-relative dark_before">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section_title">

                    <div class="mb-4 text-white">
                        <h1>Book Now</h1>
                    </div>
                    <div class="section_icon  position-relative d-inline">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/title-icon-img1.png" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
        
  
                
              <?php the_field('book_form_sub',20) ?>

     
        
    </div>
</section>
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

<div class="modal" id="realtorModal" tabindex="-1" role="dialog" aria-labelledby="realtorModalLabel" aria-hidden="true">


    <div class="modal-dialog d-flex justify-content-center align-items-center">
        <div class="modal-content rounded-0">
            <div class="modal-body p-0">
                <a type="button" class="close_video" data-dismiss="modal">×</a>
                <div class="popup uppercase">
                    <div class="video_block">
                        <div class="embed-responsive embed-responsive-4by3">
                            <video loop="" class="full-screen-video" data-autoplay="1" muted="" autoplay="">
                                <source
                                    src="https://player.vimeo.com/external/403833760.sd.mp4?s=309db6b4a56780b895f3150c561038edb10b5fe9&profile_id=164&oauth2_token_id=57447761"
                                    type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
