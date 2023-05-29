<!-- Grid Section
   ================================================== -->
<?php
$attr = ['class' => 'grid-img'];
$field = get_field('front_page_grid');
?>

<section class="grid">

    <div class="container-fluid">

        <h1>Фото готелю</h1>

        <div class="grid-container">

            <div class="grid-item1">
                <?php echo wp_get_attachment_image($field['front_page_grid_image_1'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item2">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_2'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item3">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_3'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item4">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_4'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item5">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_5'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item6">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_6'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item7">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_7'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item8">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_8'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item9">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_9'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item10">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_10'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item11">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_11'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item12">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_12'], 'full', false, $attr); ?>
            </div>

            <div class="grid-item13">
            <?php echo wp_get_attachment_image($field['front_page_grid_image_13'], 'full', false, $attr); ?>
            </div>

        </div>

    </div>

</section> <!-- Grid Section End -->