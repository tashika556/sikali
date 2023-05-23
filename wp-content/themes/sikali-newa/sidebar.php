<section id="room" class="room dark_gray p-0">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="sidebar_slider d-flex align-items-center h-100">

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
                                    <h5>From <span><?php the_field('price') ?></span><span>/Night</span></h5>
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
</section>
<div class="deluxe-left-block position-relative mt-4">
    <div class="deluxe-left-img position-relative">
        <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider04.jpg" class="img-fluid" alt="">
    </div>
    <div class="deluxe-left-text text-white text-center">
        <h1>Give us a call when you need help.</h1>
        <h3> <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span> <?php the_field('phone1',29) ?>
        </h3>
        <h5><?php the_field('email_address',29) ?></h5>
    </div>
</div>