<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avantage
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avantage</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Merriweather?query=Merriweather">



    <? wp_head();
    ?>
</head>


<>


    <!-- Header
    ================================================== -->
    <header class="header">

        <nav class="navbar navbar-expand-md navbar-light bg-avantage">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php wp_nav_menu([                        
                        'menu_class'      => 'navbar-nav',                       
                    ]);
                    ?>
                </div>
            </div>
        </nav>

        <div class="container">

            <section id="title" class="title-section">

                <div class="title">

                    <div class="title-head">
                        <h1>Готель “Авантаж”</h1>
                    </div>

                    <div class="title-content">
                        <p>Сучасний комфортабельний готель <br> за два кроки від пляжу</p>
                    </div>

                    <div class="title-foot">
                        <p>Залізний Порт</p>
                    </div>

                    <button type="button" style="background-color: #1ABC9C" class="btn btn-primary title-href">Обрати
                        номер
                    </button>

                </div>

            </section>

        </div>

    </header> <!-- Header End -->


    <!-- Info Section
    ================================================== -->

    <section id="info" class="info">

        <div class="container">

            <div class="row">

                <div class="col-6 col-md-4">

                    <div class="info-one">

                        <div class="img-one">
                            <img src="image/info-img1.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>20 метрів від пляжу</p>
                        </div>

                        <div class="info-content">
                            <p>Готель на самому березі моря. Шаг за дверь – і ви на пляжі. Ніяких утомливих походів
                                по
                                жарі.
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-6 col-md-4">

                    <div class="info-one">

                        <div class="img-one">
                            <img class="img2" src="image/info-img2.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>Щоденне прибирання</p>
                        </div>

                        <div class="info-content">
                            <p>Ми любимо чистоту і порядок, тому у всіх номерах готелю сухе і вологе прибирання
                                кожен
                                день.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-6 col-md-4">
                    <div class="info-one">

                        <div class="img-one">
                            <img src="image/info-img3.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>Wi-Fi</p>
                        </div>

                        <div class="info-content">
                            <p>Безкоштовний бездротовий інтернет для гостей доступний на всій території готелю
                                Авантаж.
                            </p>
                        </div>

                    </div>
                </div>


                <div class="col-6 col-md-4">

                    <div class="info-one">

                        <div class="img-one">
                            <img src="image/info-img4.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>Спокійний сон</p>
                        </div>

                        <div class="info-content">
                            <p>
                                Пicля активного вiдпочинку добре вiдiспатися на великому лiжку з ортопедичним
                                матрацем,
                                дихаючи морським повiтрям.
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-6 col-md-4">

                    <div class="info-one">

                        <div class="img-one">
                            <img class="img2" src="image/info-img5.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>Нові меблі</p>
                        </div>

                        <div class="info-content">
                            <p>
                                Ми відкрилися у 2016 році. Вся техніка і меблі у дуже добром стані. Ніяких скрипучих
                                радянських ліжок.
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-6 col-md-4">

                    <div class="info-one">

                        <div class="img-one">
                            <img src="image/info-img6.png" alt="">
                        </div>

                        <div class="info-title">
                            <p>Охорона і безпека</p>
                        </div>

                        <div class="info-content">
                            <p>
                                Для вашої безпеки територія готелю охороняється. А в кожному номері є сейф для
                                цінних
                                речей.
                            </p>
                        </div>

                    </div>

                </div>


            </div>
        </div>

    </section> <!-- Info section End -->


    <!-- Grid Section
   ================================================== -->

    <section class="grid">

        <div class="container-fluid">

            <h1>Фото готелю</h1>

            <div class="grid-container">

                <div class="grid-item1">
                    <img class="grid-img" src="image/grid-image1.jpg" alt="">
                </div>

                <div class="grid-item2">
                    <img class="grid-img" src="image/grid-image2.jpg" alt="">
                </div>

                <div class="grid-item3">
                    <img class="grid-img" src="image/grid-image3.jpg" alt="">
                </div>

                <div class="grid-item4">
                    <img class="grid-img" src="image/grid-image4.jpg" alt="">
                </div>

                <div class="grid-item5">
                    <img class="grid-img" src="image/grid-image5.jpg" alt="">
                </div>

                <div class="grid-item6">
                    <img class="grid-img" src="image/grid-image6.jpg" alt="">
                </div>

                <div class="grid-item7">
                    <img class="grid-img" src="image/grid-image7.jpg" alt="">
                </div>

                <div class="grid-item8">
                    <img class="grid-img" src="image/grid-image8.jpg" alt="">
                </div>

                <div class="grid-item9">
                    <img class="grid-img" src="image/grid-image9.jpg" alt="">
                </div>

                <div class="grid-item10">
                    <img class="grid-img" src="image/grid-image10.jpg" alt="">
                </div>

                <div class="grid-item11">
                    <img class="grid-img" src="image/grid-image11.jpg" alt="">
                </div>

                <div class="grid-item12">
                    <img class="grid-img" src="image/grid-image12.jpg" alt="">
                </div>

                <div class="grid-item13">
                    <img class="grid-img" src="image/grid-image13.jpg" alt="">
                </div>

            </div>

        </div>

    </section> <!-- Grid Section End -->

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

    <!-- footer
   ================================================== -->

    <footer>

        <section class="footer-section">

            <div class="container">

                <div class="row">
                    <div class="col-6">
                        <div class="footer-menu">

                            <ul class="footer-nav">
                                <li><a class="footer-nav-line" href="#"> Головна </a></li>
                                <li><a href="#"> Номери </a></li>
                                <li><a href="#"> Фото готелю </a></li>
                                <li><a href="#"> Бронювання та цiни </a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col-6">
                        <div class="row footer-adress">
                            <div class="col-12 col-md-6 footer-head">
                                <p>Адреса:</p>
                            </div>
                            <div class="col-12 col-md-6 footer-content">
                                <p>вулиця Шкільна, 59Б, Залізний Порт,<br> Херсонська область, 75653</p>
                            </div>

                            <div class="col-12 col-md-6 footer-head ">
                                <p>Контакти: </p>
                            </div>
                            <div class="col-12 col-md-6 footer-content-two">
                                <p>(099) 470-99-39; (067) 796-03-94</p>
                                <p>avantagezp@gmail.com</p>
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </section>

    </footer>

    <script src="js/script.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker();
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $('#datepicker-2').datepicker();
        });
    </script>

    </body>

</html>