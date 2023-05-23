 <!-- Template Name: Gallery Page -->
 <?php get_header('two'); ?>
<section class="banner img_bg" style="background-image: url(<?php echo the_post_thumbnail_url(); ?>);">
    <div class="banner_content d-flex justify-content-center align-items-center h-100 text-white">
    <h1><?php the_title() ?></h1>
    </div>
    <a href="#gallery" class="scroll-down" address="true"></a>
</section>
<section id="gallery" class="bg_gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

            <?php the_content() ?>
            </div>
            <div class="col-lg-4">
            <?php include "sidebar.php"; ?>
            </div>
        </div>
    </div>
</section>

<?php include 'room_panal.php';?>

<?php include 'testimonial-page.php'; ?>


<?php get_footer(); ?>