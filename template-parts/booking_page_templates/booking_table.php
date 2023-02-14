<?php
$tel_1 = get_sub_field('booking_table_tel_1');
$tel_2 = get_sub_field('booking_table_tel_2');
$arrPrice = [];
$repeater_table_field = get_field('table', 'option');
?>

<?php if ($repeater_table_field) : ?>

    <!-- Booking table section
    ================================================== -->
    <section class="booking-table">

        <div class="col-12">

            <div class="row">

                <div class="container">

                    <table>
                        <tr>
                            <th> </th>
                            <th>Комфорт для двох</th>
                            <th>Комфорт для трьох</th>
                            <th>Люкс для двох</th>
                            <th>Люкс для трьох</th>
                            <th>Люкс для чотирьох</th>
                            <th>Двокімнатний люкс<br>для чотирьох</th>
                        </tr>

                        <?php while (have_rows('table', 'option')) : the_row();
                            $head = get_sub_field('table_head');

                        ?>
                            <tr>
                                <td class="booking-table-one"><?php echo $head; ?></td>

                                <?php while (have_rows('table_subhead', 'option')) : the_row();
                                    $price = get_sub_field('table_price', 'option');
                                ?>
                                    <?php array_push($arrPrice, $price); ?>

                                    <td><?php echo $price; ?></td>
                                <?php endwhile; ?>
                            </tr>
                        <?php endwhile; ?>
                    </table>

                </div>

            </div>

        </div>

    </section> <!-- Booking table section End -->

<?php endif; ?>

<script>
    <?php echo "var arrPrice=" . json_encode($arrPrice, JSON_FORCE_OBJECT); ?>
</script>

<!-- Booking map section
    ================================================== -->
<section class="map-section">

    <div class="booking-head">
        <h1>Адреса</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <div class="booking-map-text">
                    <p>Наша адреса: вулиця Шкільна, 59Б, Залізний Порт, Херсонська область, 75653</p>
                </div>

                <div class="booking-map-text">
                    <p>Телефони: <?php echo $tel_1; ?>;<br>
                        <span><?php echo $tel_2; ?></span>
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-12">

                <div class="map-responsive">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5530.925745666488!2d32.28159932597306!3d46.12160893929788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfe79e8540310af6f!2z0JDQstCw0L3RgtCw0LY!5e0!3m2!1sru!2sde!4v1668270806167!5m2!1sru!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

        </div>

    </div>

</section> <!-- Booking map section End -->