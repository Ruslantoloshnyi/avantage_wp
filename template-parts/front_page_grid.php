<!-- Grid Section
   ================================================== -->
<?php
$head = get_sub_field('front_page_grid_head');

$image1 = get_sub_field('front_page_grid_img_1');
$image2 = get_sub_field('front_page_grid_img_2');
$image3 = get_sub_field('front_page_grid_img_3');
$image4 = get_sub_field('front_page_grid_img_4');
$image5 = get_sub_field('front_page_grid_img_5');
$image6 = get_sub_field('front_page_grid_img_6');
$image7 = get_sub_field('front_page_grid_img_7');
$image8 = get_sub_field('front_page_grid_img_8');
$image9 = get_sub_field('front_page_grid_img_9');
$image10 = get_sub_field('front_page_grid_img_10');
$image11 = get_sub_field('front_page_grid_img_11');
$image12 = get_sub_field('front_page_grid_img_12');
$image13 = get_sub_field('front_page_grid_img_13');

$img1 = wp_get_attachment_image($image1, 'full');
$img2 = wp_get_attachment_image($image2, 'full');
$img3 = wp_get_attachment_image($image3, 'full');
$img4 = wp_get_attachment_image($image4, 'full');
$img5 = wp_get_attachment_image($image5, 'full');
$img6 = wp_get_attachment_image($image6, 'full');
$img7 = wp_get_attachment_image($image7, 'full');
$img8 = wp_get_attachment_image($image8, 'full');
$img9 = wp_get_attachment_image($image9, 'full');
$img10 = wp_get_attachment_image($image10, 'full');
$img11 = wp_get_attachment_image($image11, 'full');
$img12 = wp_get_attachment_image($image12, 'full');
$img13 = wp_get_attachment_image($image13, 'full');
?>

<section class="grid">

    <div class="container-fluid">

        <h1><?php echo $head; ?></h1>

        <div class="grid-container">

            <div class="grid-item1">
                <?php echo $img1; ?>
            </div>

            <div class="grid-item2">
                <?php echo $img2; ?>
            </div>

            <div class="grid-item3">
                <?php echo $img3; ?>
            </div>

            <div class="grid-item4">
                <?php echo $img4; ?>
            </div>

            <div class="grid-item5">
                <?php echo $img5; ?>
            </div>

            <div class="grid-item6">
                <?php echo $img6; ?>
            </div>

            <div class="grid-item7">
                <?php echo $img7; ?>
            </div>

            <div class="grid-item8">
                <?php echo $img8; ?>
            </div>

            <div class="grid-item9">
                <?php echo $img9; ?>
            </div>

            <div class="grid-item10">
                <?php echo $img10; ?>
            </div>

            <div class="grid-item11">
                <?php echo $img11; ?>
            </div>

            <div class="grid-item12">
                <?php echo $img12; ?>
            </div>

            <div class="grid-item13">
                <?php echo $img13; ?>
            </div>

        </div>

    </div>

</section> <!-- Grid Section End -->