<?php get_header(); ?>

<?php
while (have_posts()) :
    the_post();
?>
    <section>
        <div class="container">
            <div class="zoom-room-head-section">
                <div class="zoom-room-head-left">
                    <div class="zoom-room-head">
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="zoom-room-row">
                        <?php
                        if (have_rows('single_room_image')) :
                            while (have_rows('single_room_image')) : the_row();
                                $image = wp_get_attachment_image(get_sub_field('room_img'), 'full', false, ['class' => 'zoom-room-pic-img']);
                        ?>
                                <div class="zoom-room-head-discription">
                                    <div class="zoom-room-pic">
                                        <?php echo $image; ?>
                                    </div>
                                    <div class="zoom-room-pic-text">
                                        <p><?php echo get_sub_field('room_text'); ?></p>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="zoom-room-head-right">
                    <?php the_post_thumbnail('full', 'class=img-fluid zoom-room-main-img'); ?>
                </div>
            </div>
        </div>
    </section><!-- Room section End -->

    <!-- Zoom-Room info section
    ================================================== -->
    <section>
        <div class="container">
            <div class="zoom-room-head-section">
                <div class="row">
                    <div class="col-12">
                        <div class="zoom-room-head">
                            <h1>Опис</h1>
                        </div>
                        <div class="zoom-room-info-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Zoom-Room info section End -->

    <!-- Zoom-Room slyder section
        ================================================== -->
    <section class="zoom-room-slyder-section">

        <div class="container">

            <div class="zoom-room-head">
                <h1>Фото</h1>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="100000">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-key="1">
                        <?php echo wp_get_attachment_image(get_field('single_slider_image_1'), 'full', false, ['class' => 'd-block w-100 zoom-slider-img']); ?>
                    </div>
                    <div class="carousel-item" data-key="2">
                        <?php echo wp_get_attachment_image(get_field('single_slider_image_2'), 'full', false, ['class' => 'd-block w-100 zoom-slider-img']); ?>
                    </div>
                    <div class="carousel-item" data-key="3">
                        <?php echo wp_get_attachment_image(get_field('single_slider_image_3'), 'full', false, ['class' => 'd-block w-100 zoom-slider-img']); ?>
                    </div>

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

    <!-- Booking Section
   ================================================== -->

    <section class="booking-zoom-room">
        <div class="container">
            <div class="zoom-room-head">
                <h1>Бронювання</h1>
            </div>
            <p>Забронювати номер можна за телефоном - <span>(099) 470-99-39</span> або <span>(067) 796-03-94</span> </p>
            <p>Поштою – <span>avantagezp@gmail.com</span></p>
            <p>Не забудьте вказати тип номера і дати заїзду та виїзду, так ми швидше вам <br>допоможемо.</p>
            <div class="zoom-room-head">
                <h1>Розрахувати ціну</h1>
            </div>
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="container-calendar">
                                <div class="calendar-head">
                                    <p>Дата заїзду:</p>
                                </div>

                                <form>
                                    <div class="row form-group">
                                        <div>
                                            <div class="input-group date" id="datepicker">
                                                <input id="check-in" type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="calendar-head">
                                <p>Дата виїзду:</p>
                            </div>

                            <form>
                                <div class="row form-group">
                                    <div>
                                        <div class="input-group date" id="datepicker-2">
                                            <input id="check-out" data-key="2" type="text" class="form-control">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="zoom-room-booking-text">
                        <div class="zoom-room-booking-text-head">
                            <p><span class="booking-span-title">Всього:</span> <span id="price" class=""></span><span id="nights"></span></p>
                        </div>
                        <div class="zoom-room-booking-text-one">
                            <p>Бронювання здійснюється за телефоном або електронною поштою.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="zoom-room-head">
                <h1>Вартість номеру</h1>
            </div>
        </div>
        <div class="container">
            <table class="zoom-room-table">
                <tr>
                    <td class="zoom-room-table-one">Червень 1-15</td>
                    <td class="zoom-room-table-two"> <?php echo get_field('single_price_1'); ?> грн.</td>
                </tr>
                <tr>
                    <td class="zoom-room-table-one">Червень 15-26</td>
                    <td class="zoom-room-table-two"> <?php echo get_field('single_price_2'); ?> грн.</td>
                </tr>
                <tr>
                    <td class="zoom-room-table-one">Липень-Серпень</td>
                    <td class="zoom-room-table-two"> <?php echo get_field('single_price_3'); ?> грн.</td>
                </tr>
                <tr>
                    <td class="zoom-room-table-one">Вересень</td>
                    <td class="zoom-room-table-two"> <?php echo get_field('single_price_4'); ?> грн.</td>
                </tr>
            </table>
        </div>
    </section><!-- Zoom-Room booking section End -->
<?php endwhile; ?>

<?php get_footer(); ?>