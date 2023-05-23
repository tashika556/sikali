 <!-- Template Name: Review Page -->
 <?php get_header('two'); ?>
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url() ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
        <h1><?php the_title() ?></h1>
    </div>
    <a href="#review" class="scroll-down" address="true"></a>
</section>
<section id="review" class="review dark_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'testimonials',
   'orderby' => array(    
    'meta_key' => 'bar',
    'order' => 'DESC',
  ),
   'category_name'=>'reviews',
   'posts_per_page' => 20,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                    <div class="col-12">
                        <div class="testimonial_wrap mb-md-5 mb-4">
                            <div class="testimonial_block text-center position-relative d-flex align-items-center">
                                <div class="testimonial_content">
                                    <span> <i class="fa fa-quote-right" aria-hidden="true"></i></span>
                                   <?php the_content() ?>
                                    <span> <i class="fa fa-quote-right" aria-hidden="true"></i></span>
                                    <div class="mt-2">
                                        <h6><?php the_title() ?></h6>
                                    </div>
                                    <div class="testimonial_logo text-center mt-3">
                                        <img src="<?php echo the_post_thumbnail_url() ?>" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                   
                  
                    <?php endwhile; ?>
<?php wp_reset_postdata(); ?>       

                </div>
            </div>
            <div class="col-lg-4">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'room_panal.php';?>

<?php include 'testimonial-page.php'; ?>
<?php get_footer(); ?>