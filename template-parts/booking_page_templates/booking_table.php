<?php if (have_rows('booking_table')) : ?>

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

                        <?php while (have_rows('booking_table')) : the_row();
                            $head = get_sub_field('booking_table_head');

                        ?>
                            <tr>
                                <td class="booking-table-one"><?php echo $head; ?></td>

                                <?php while (have_rows('booking_table_subhead')) : the_row();
                                    $price = get_sub_field('booking_table_price');

                                ?>
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