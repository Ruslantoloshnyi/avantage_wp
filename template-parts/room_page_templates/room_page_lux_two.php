<?php
$image = get_sub_field('room_page_lux_two_image');
$content = get_sub_field('room_page_lux_two_content');
$price = get_sub_field('room_page_lux_two_price');
$attr = ['class' => 'img-fluid', 'alt' => 'Responsive image'];
$img = wp_get_attachment_image($image, 'full', false, $attr);
$id = '242'; 
$id_lux_two = get_permalink($id); 
?>

<!-- Rooms Section
   ================================================== -->
<?php if (have_rows('room_page_lux_two_pic')) : ?>

    <section>
        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6 col-12  rooms-card ">

                    <div class="rooms-card-image">
                        <?php echo $img; ?>
                    </div>

                    <div class="container-card">

                        <div class="rooms-card-head">Люкс для двох</div>

                        <div class="rooms-card-pinc">

                            <?php while (have_rows('room_page_lux_two_pic')) : the_row();
                                $image_pic = get_sub_field('lux_two_pic');
                                $img_pic = wp_get_attachment_image($image_pic, 'full', false);
                            ?>
                                <div class="card-pinc">
                                    <?php echo $img_pic; ?>
                                </div>

                            <?php endwhile; ?>

                        </div>

                        <div class="rooms-content"><?php echo $content; ?></div>

                        <div class="card-footer">
                            
                                <a href="<?php echo $id_lux_two; ?>"><button type="button" class="rooms-button">Детальніше</button></a>
                            
                            <div class="card-price"><?php echo $price; ?></div>
                        </div>

                    </div>
                </div>

            <?php endif; ?>