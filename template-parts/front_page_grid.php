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

$attr = ['class' => 'grid-img'];

$img1 = wp_get_attachment_image($image1, 'full', false, $attr);
$img2 = wp_get_attachment_image($image2, 'full', false, $attr);
$img3 = wp_get_attachment_image($image3, 'full', false, $attr);
$img4 = wp_get_attachment_image($image4, 'full', false, $attr);
$img5 = wp_get_attachment_image($image5, 'full', false, $attr);
$img6 = wp_get_attachment_image($image6, 'full', false, $attr);
$img7 = wp_get_attachment_image($image7, 'full', false, $attr);
$img8 = wp_get_attachment_image($image8, 'full', false, $attr);
$img9 = wp_get_attachment_image($image9, 'full', false, $attr);
$img10 = wp_get_attachment_image($image10, 'full', false, $attr);
$img11 = wp_get_attachment_image($image11, 'full', false, $attr);
$img12 = wp_get_attachment_image($image12, 'full', false, $attr);
$img13 = wp_get_attachment_image($image13, 'full', false, $attr);
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