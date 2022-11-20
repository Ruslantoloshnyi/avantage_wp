<?php

/**
 * Template Name: front_page
 * Template post type: page*/

get_header('main')
?>



<?php

if (have_rows('front_page_content')) :

    while (have_rows('front_page_content')) :
        the_row();

        if (get_row_layout() == 'front_page_info_section') :

            get_template_part('template-parts/front_page_info');

        elseif (get_row_layout() == 'front_page_grid_section') :

            get_template_part('template-parts/front_page_grid');

        endif;

    endwhile;

endif;


?>




<!-- Booking Section
   ================================================== -->

<section class="booking">

    <div class="container">

        <h1>Бронювання</h1>

        <p>Забронювати номер можна за телефоном - <span>(099) 470-99-39</span> або <span>(067) 796-03-94</span> </p>
        <p>Поштою – <span>avantagezp@gmail.com</span></p>
        <p>Не забудьте вказати тип номера і дати заїзду та виїзду, так ми швидше вам <br>допоможемо.</p>

        <h1>Розрахувати ціну</h1>

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-6 col-12">

                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../avantage/image/slider-image.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../avantage/image/slider-image.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="../avantage/image/slider-image.jpg" class="d-block w-100" alt="...">
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

                        <form>
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
                    <p><span class="booking-span-title">Всього:</span> <span class="">11500 грн (7 ночей)</span><br>
                        <span class="booking-text-content">(2 ночі по 1250 - 2500грн; 5 ночей по 1800 - 9000грн;
                            Всього 11500грн )<br>
                            Бронювання здійснюється за телефоном або електронною поштою.
                        </span>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section> <!-- Booking Section End -->

<?php get_footer(); ?>