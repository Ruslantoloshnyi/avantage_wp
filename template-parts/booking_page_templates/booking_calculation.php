<?php
$head = get_sub_field('booking_calculation_head');
?>

<!-- Booking calculation section
    ================================================== -->
<?php if (have_rows('booking_calculation_slider')) : ?>

    <section class="booking-calculation">

        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="booking-title">
                        <h2><?php echo $head; ?></h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="booking-head">
                        <h1>Розрахувати ціну</h1>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="row">

                    <div class="col-md-6 col-12">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">

                                <?php while (have_rows('booking_calculation_slider')) : the_row();
                                    $image = get_sub_field('booking_calculation_slider_image');
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

                    <div class="col-md-6 col-12">

                        <div class="row">

                            <div class="col-md-6 col-12">
                                <div class="container-calendar">
                                    <div class="calendar-head">
                                        <p>Дата заїзду:</p>
                                    </div>

                                    <form>
                                        <div class="row form-group">
                                            <div class="input-group date" id="datepicker">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="col-md-6 col-12">

                                <div class="calendar-head">
                                    <p>Дата виїзду:</p>
                                </div>

                                <form action="" method="post">
                                    <div class="row form-group">
                                        <div class="input-group date" id="datepicker-2">
                                            <input type="text" class="form-control">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                        <div class="col-12 booking-text">
                            <p><span class="booking-span-title">Всього:</span> <span class="">11500 грн (7
                                    ночей)</span><br>
                                <span class="booking-text-content">(2 ночі по 1250 - 2500грн; 5 ночей по 1800 - 9000грн;
                                    Всього 11500грн )<br>
                                    Бронювання здійснюється за телефоном або електронною поштою.
                                </span>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section> <!-- Booking calculation section End -->

<?php endif; ?>