<?php
$zoom_room_head = get_sub_field('zoom_room_room_head');
$image = get_sub_field('zoom_room_room_image');
$img = wp_get_attachment_image($image, 'full', false);
?>

<!-- Room section
    ================================================== -->

<?php if (have_rows('zoom_room_room_pic')) : ?>

    <section>
        <div class="container-fluid">

            <div class="row zoom-room-head-section">

                <div class="col-md-4 col-12 order-md-1 order-2">

                    <div class="row">
                        <div class="col-12">

                            <div class="zoom-room-head">
                                <h1><?php echo $zoom_room_head; ?></h1>
                            </div>

                        </div>

                        <?php while (have_rows('zoom_room_room_pic')) : the_row();
                            $image_pic = get_sub_field('zoom_room_room_pic_image');
                            $img_pic = wp_get_attachment_image($image_pic, 'full', false);
                            $text = get_sub_field('zoom_room_room_pic_text');
                        ?>

                            <div class="col-md-6 col-4">
                                <div>

                                    <div class="zoom-room-pic">
                                        <?php echo $img_pic; ?>
                                    </div>

                                    <div class="zoom-room-pic-text">
                                        <p><?php echo $text; ?></p>
                                    </div>

                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>

                </div>

                <div class="col-md-8 col-12 order-md-2 order-1">
                    <?php echo $img; ?>
                </div>

            </div>
        </div>

    </section><!-- Room section End -->

<?php endif; ?>