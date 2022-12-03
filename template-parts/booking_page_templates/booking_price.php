<?php
$head = get_sub_field('booking_price_head');
$content_1 = get_sub_field('booking_price_content_1');
$content_2 = get_sub_field('booking_price_content_2');
$tel_1 = get_sub_field('booking_price_tel_1');
$tel_2 = get_sub_field('booking_price_tel_2');
$mail = get_sub_field('booking_price_mail');

?>

<!-- Booking price section
    ================================================== -->
<section class="booking-price">

    <div class="container">

        <div class="booking-head">
            <h1><?php echo $head; ?></h1>
        </div>

        <div class="booking-price-content">


            <div>
                <p>Час поселення в номер с 14:00. Час виїзду з номеру до 12:00.</p>
                <p>Всi цiни за проживання вказанi в гривнi.</p>
                <p>Забронювати номер можна за телефоном - <span><?php echo $tel_1; ?></span> або <span><?php echo $tel_2; ?></span></p>
                <p>Поштою – <span><?php echo $mail; ?></span></p>
            </div>

            <div>
                <p><?php echo $content_1; ?></p>
            </div>

            <div>
                <p><?php echo $content_2; ?></p>
            </div>

        </div>

    </div>

</section> <!-- Booking price section End -->