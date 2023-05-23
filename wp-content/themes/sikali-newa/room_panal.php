<section id="room" class="room">
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
                    <div class="room_slider d-flex align-items-center h-100 mt-lg-0 mt-3">
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