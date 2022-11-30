<?php if (have_rows('zoom_room_slider_image')) : ?>

    <!-- Zoom-Room slyder section
        ================================================== -->
    <section class="zoom-room-slyder-section">

        <div class="container-slyder">

            <div class="zoom-room-head">
                <h1>Фото</h1>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">

                    <?php while (have_rows('zoom_room_slider_image')) : the_row();
                        $image = get_sub_field('zoom_room_slider_img');
                        $attr = ['class' => 'd-block w-100', 'alt' => 'First slide'];
                        $img = wp_get_attachment_image($image, 'full', false, $attr);
                    ?>

                        <div class="carousel-item active">
                            <?php echo $img; ?>
                        </div>

                    <?php endwhile; ?>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only"></span>
                </a>
            </div>

        </div>

    </section><!-- Zoom-Room slyder section End -->

<?php endif; ?>