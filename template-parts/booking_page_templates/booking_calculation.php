<?php
$head = get_sub_field('booking_calculation_head');
$image1 = get_sub_field('booking_calculation_slider_image_1');
$image2 = get_sub_field('booking_calculation_slider_image_2');
$image3 = get_sub_field('booking_calculation_slider_image_3');
$image4 = get_sub_field('booking_calculation_slider_image_4');
$image5 = get_sub_field('booking_calculation_slider_image_5');
$image6 = get_sub_field('booking_calculation_slider_image_6');
$attr = ['class' => 'd-block w-100', 'alt' => '...'];
$img1 = wp_get_attachment_image($image1, 'medium', false, $attr);
$img2 = wp_get_attachment_image($image2, 'medium', false, $attr);
$img3 = wp_get_attachment_image($image3, 'medium', false, $attr);
$img4 = wp_get_attachment_image($image4, 'medium', false, $attr);
$img5 = wp_get_attachment_image($image5, 'medium', false, $attr);
$img6 = wp_get_attachment_image($image6, 'medium', false, $attr);
?>

<!-- Booking calculation section
    ================================================== -->

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

                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="100000">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-key="1">
                                <?php echo $img1; ?>
                            </div>
                            <div class="carousel-item" data-key="2">
                                <?php echo $img2; ?>
                            </div>
                            <div class="carousel-item" data-key="3">
                                <?php echo $img3; ?>
                            </div>
                            <div class="carousel-item" data-key="4">
                                <?php echo $img4; ?>
                            </div>
                            <div class="carousel-item" data-key="5">
                                <?php echo $img5; ?>
                            </div>
                            <div class="carousel-item" data-key="6">
                                <?php echo $img6; ?>
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

                <div class="col-md-6 col-12">

                    <div class="row front-booking-row">
                        <div class="col-md-6 col-12">
                            <div class="container-calendar">
                                <div class="calendar-head">
                                    <p>Дата заїзду:</p>
                                </div>

                                <form>
                                    <div class="row form-group">
                                        <div class="input-group date" id="datepicker">
                                            <input id="check-in" type="text" class="form-control">
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

                            <form>
                                <div class="row form-group">
                                    <div class="input-group date" id="datepicker-2">
                                        <input id="check-out" data-key="1" type="text" class="form-control">
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

                    <div id="" class="booking-text">
                        <p><span class="booking-span-title">Всього:</span> <span id="price" class=""></span><span id="nights"></span><br>
                            <span class="booking-text-content">
                                Бронювання здійснюється за телефоном або електронною поштою.
                            </span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section> <!-- Booking calculation section End -->