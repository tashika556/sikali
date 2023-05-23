<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.minn.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/custom.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery-ui.css">

</head>
<?php wp_head();?>
<body>
    <div class="menu-btn d-lg-none d-block">
        <i class="fa fa-bars" aria-hidden="true"></i>
    </div>
    <section class="to_heading py-0 bg_gray d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social_icon py-2 d-flex justify-content-end align-items-center">
                        <ul class="d-flex justify-content-end">
                        <li><a href="<?php the_field('facebook',29) ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php the_field('instagram',29) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

                            <li><a href="<?php the_field('youtube',29) ?>" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="header_phone position-relative">
                            <h6><span><i class="fa fa-phone"></i></span><?php the_field('phone1',29) ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="header position-relative w-100 bg-white">
        <div class="container">
            <nav class="cssmenu d-flex align-items-center p-0">
                <div class="sticky_logo">
                    <a href="<?php echo get_page_link(20); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="logo1"></a>
                </div>
                <ul class="menu_ul d-flex justify-content-end w-100 p-0">
                    <li><a href="<?php echo get_page_link(47); ?>">About</a></li>

                    <li>
                        <a class="sub_menu_link" href="#">Accommodation</a>
                        <ul class="sub_menu">
                        <?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
   'post_type'=>'roomss',
   'orderby' => array(    
      'meta_key' => 'bar',
      'order' => 'DESC',
    ),
   'category_name'=>'rooms',
   'posts_per_page' => 5,
   'paged' => $paged
);
$custom_query = new WP_Query( $args );
while($custom_query->have_posts()) : 
   $custom_query->the_post(); 
   $postid = get_the_ID();
?>
                            <li>
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                            </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

                        </ul>
                    </li>

                    <li><a href="<?php echo get_page_link(121); ?>">Activities</a></li>
                    <li><a href="<?php echo get_page_link(82); ?>">Review</a></li>
                    <li><a href="<?php echo get_page_link(162); ?>">Gallery</a></li>
                    <li><a href="<?php echo get_page_link(29); ?>">Contact</a></li>
                    <li><button onclick="window.location.href='#book';">Book Now</button></li>

                </ul>
            </nav>
        </div>
    </header>
    <!-- book now start  -->
    <div id="mySidenav" class="sidenav ">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-6 bg-white ">
                    <div class="right_side_box text-left ">
                        <div action="">
                                    <?php the_field('book_form',20) ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="booknow_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slider04.jpg" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- book now end  -->