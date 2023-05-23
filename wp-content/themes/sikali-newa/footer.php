
<section class="contact-area bg_img" id="contact">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="contact-content text-center">
                <div class="logo_footer">
                    <a href="<?php echo get_page_link(20); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="logo1"></a>
                    </div>
               
                    <div class="hr"></div>
                    <h6>
                    <?php the_field('address',29) ?></h6>
                    <div class="phone_text">
                        <h6> <a href="tel: <?php the_field('phone1',29) ?>" target="_blank">
                        <?php the_field('phone1',29) ?></a><span>|</span><a href="tel: <?php the_field('phone2',29) ?>" target="_blank">
                        <?php the_field('phone2',29) ?></a></h6>

                    </div>
                    <div class="contact-social">
                        <ul>
                            <li><a class="hover-target" href="<?php the_field('facebook',29) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a class="hover-target" href="<?php the_field('twitter',29) ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li><a class="hover-target" href="<?php the_field('instagram',29) ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <p>Copyright © 2023 Sikali Newa Kitchen and Homestay.</p>
    <div class="footer_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/accepts.png" class="img-fluid" alt="">
    </div>
    <p>Website by: <strong>DigiSoft Developers</strong></p>
</footer>
<?php wp_footer(); ?>
<!-- mobile menu start  -->
<div class="side-bar">
    <header>
        <div class="close-btn">
            <i class="fa fa-times"></i>
        </div>
    </header>
    <div class="menu_mobile pt-3">
        <div class="item"><a href="<?php echo get_page_link(47); ?>"> About</a></div>
        <div class="item">
            <a class="sub-btn">
            Accommodation

                <i class="fa fa-angle-right dropdown"></i></a>
            <div class="sub-menu">
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
                                <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                         
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>

              

            </div>
        </div>
      
        <div class="item"><a href="<?php echo get_page_link(121); ?>"> Activities</a></div>

        <div class="item"><a href="<?php echo get_page_link(82); ?>">Review</a></div>
        <div class="item"><a href="<?php echo get_page_link(162); ?>">Gallery</a></div>
        <div class="item"><a href="<?php echo get_page_link(29); ?>">Contact</a></div>
        <div class="item ml-4"> <button onclick="openNav()">Book Now</button></div>


    </div>
</div>
<!-- mobile menu end  -->
<!-- <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.4.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick-animation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/font-awesom.js "></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/typed.min.js"
    integrity="sha512-BdHyGtczsUoFcEma+MfXc71KJLv/cd+sUsUaYYf2mXpfG/PtBjNXsPo78+rxWjscxUYN2Qr2+DbeGGiJx81ifg=="
    crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
</body>

</html>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center" role="document">
        <div class="booking_form modal-content ">
            <section class="p-0" id="booknow-page">
                <div class="container p-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="book-now_form">
                                <div class="d-flex">
                                    <div class="form_left w-50 p-4">
                                        <div class="check-in-out flex-column">
                                            <div class="input-group_block pt-0">
                                                <label class="label_block  mt-0" for="check-in">Check-in</label>
                                                <input type="date" id="check-in" autocomplete="off"
                                                    class="date-picker input_block">
                                            </div>
                                            <div class="input-group_block">
                                                <label class="label_block" for="check-out">Check-out</label>
                                                <input type="date" id="check-out" autocomplete="off"
                                                    class="date-picker input_block">
                                            </div>
                                        </div>
                                        <div class="check-in-out">
                                            <div
                                                class="select_potion input-group_block check-in-out flex-column align-items-start ">
                                                <label class="label_block" for="room">Country</label>
                                                <select class="input_block slect_input">
                                                    <label class="label_block" for="exampleFormControlSelect1">Room
                                                        Type</label>
                                                    <option>Nepal</option>
                                                    <option>India</option>
                                                    <option>Bhutan</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="input-group_block">
                                            <label class="label_block" for="Type code">Type code</label>
                                            <input type="text" id="Type code" autocomplete="off" class=" input_block">
                                        </div>
                                        <div class="check-in-out">
                                            <div
                                                class="select_potion input-group_block check-in-out flex-column align-items-start ">
                                                <label class="label_block" for="room">Destination </label>
                                                <select class="input_block slect_input">
                                                    <label class="label_block"
                                                        for="exampleFormControlSelect1">Destination</label>
                                                    <option>Nepal</option>
                                                    <option>Bali</option>
                                                    <option>India</option>
                                                    <option>Tibet</option>
                                                    <option>Bhutan</option>
                                                    <option>Dubai</option>
                                                    <option>Thailand</option>
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="form_right w-50 bg_blue p-4">
                                        <div class="other">
                                            <div class="input-group_block">

                                                <input type="text" class="input_block" placeholder="Name">
                                            </div>
                                            <div class="input-group_block">

                                                <input class="input_block" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="other">
                                            <div class="input-group_block">

                                                <input type="text" class="input_block" placeholder="Address">
                                            </div>
                                            <div class="input-group_block">

                                                <input class="input_block" type="number" id="kids" min="0"
                                                    placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="other ">
                                            <div class="input-group_block">

                                                <textarea name="" id="" cols="30" rows="10" class="border-0"
                                                    placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="other">
                                            <div class="input-group_block  ">
                                                <button type="submit"
                                                    class="btn third bg_orang rounded-0 text-white py-2 w-100">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>
</div>