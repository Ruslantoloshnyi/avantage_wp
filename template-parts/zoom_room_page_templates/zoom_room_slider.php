<?php if (have_rows('zoom_room_slider_image')) : ?>

    <!-- Zoom-Room slyder section
        ================================================== -->
    <section class="zoom-room-slyder-section">

        <div class="container-slyder">

            <div class="zoom-room-head">
                <h1>Фото</h1>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php while (have_rows('zoom_room_slider_image')) : the_row();
                        $image = get_sub_field('zoom_room_slider_img');
                        $attr = ['class' => 'd-block w-100', 'alt' => '...'];
                        $img = wp_get_attachment_image($image, 'full', false, $attr);
                    ?>

                        <div class="carousel-item active">
                            <?php echo $img; ?>
                        </div>

                    <?php endwhile; ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </section><!-- Zoom-Room slyder section End -->

<?php endif; ?>