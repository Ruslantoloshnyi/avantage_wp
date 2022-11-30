 <?php
    $price_1 = get_sub_field('zoom_room_booking_price_1');
    $price_2 = get_sub_field('zoom_room_booking_price_2');
    $price_3 = get_sub_field('zoom_room_booking_price_3');
    $price_4 = get_sub_field('zoom_room_booking_price_4');
    $tel1 = get_sub_field('front_page_booking_tel_1');
    $tel2 = get_sub_field('front_page_booking_tel_2');
    $mail = get_sub_field('front_page_booking_mail');
    ?>
 <!-- Booking Section
   ================================================== -->

 <section class="booking-zoom-room">

     <div class="container">

         <div class="zoom-room-head">
             <h1>Бронювання</h1>
         </div>

         <p>Забронювати номер можна за телефоном - <span><?php echo $tel1; ?></span> або <span><?php echo $tel2; ?></span> </p>
         <p>Поштою – <span><?php echo $mail; ?></span></p>
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
                                             <input type="text" class="form-control">
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
                                         <input type="text" class="form-control">
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
                         <p><span class="booking-span-title">Всього:</span><span class="zoom-room-booking-span-text">
                                 11500 грн (7 ночей)</span></p>
                     </div>

                     <div class="zoom-room-booking-text-one">
                         <p>(2 ночі по 1800 - 3600грн; 5 ночей по 2200 - 11000грн; Всього 14600грн )</p>
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
                 <td class="zoom-room-table-two"> <?php echo $price_1; ?></td>
             </tr>

             <tr>
                 <td class="zoom-room-table-one">Червень 15-26</td>
                 <td class="zoom-room-table-two"> <?php echo $price_2; ?></td>
             </tr>

             <tr>
                 <td class="zoom-room-table-one">Липень-Серпень</td>
                 <td class="zoom-room-table-two"> <?php echo $price_3; ?></td>
             </tr>

             <tr>
                 <td class="zoom-room-table-one">Вересень</td>
                 <td class="zoom-room-table-two"> <?php echo $price_4; ?></td>
             </tr>

         </table>
     </div>

 </section><!-- Zoom-Room booking section End -->