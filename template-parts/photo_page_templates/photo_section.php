
<?php if (have_rows('photo_content')) : ?>

    <section>

        <?php while (have_rows('photo_content')) : the_row();

            $image = get_sub_field('photo_image');
            $image_2 = get_sub_field('photo_image_2');

            $attr = ['class' => 'img-fluid', 'alt' => 'Responsive image'];
            $img = wp_get_attachment_image($image, 'full', false, $attr);
            $img_2 = wp_get_attachment_image($image_2, 'full', false, $attr);
        ?>

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-6 col-12  rooms-card ">

                        <div class="rooms-card-image">
                            <?php echo $img; ?>
                        </div>

                    </div>

                    <div class="col-md-6 col-12 rooms-card">

                        <div class="rooms-card-image">
                            <?php echo $img_2; ?>
                        </div>

                    </div>

                </div>

            </div>

        <?php endwhile; ?>

    </section> <!-- Rooms Section End -->

<?php endif; ?>