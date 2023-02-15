 <?php
    $price_1 = get_sub_field('zoom_room_booking_price_1');
    $price_2 = get_sub_field('zoom_room_booking_price_2');
    $price_3 = get_sub_field('zoom_room_booking_price_3');
    $price_4 = get_sub_field('zoom_room_booking_price_4');
    $tel_1 = get_field('tel_1', 'option');
    $tel_2 = get_field('tel_2', 'option');
    $mail = get_field('email', 'option');
    ?>
 <!-- Booking Section
   ================================================== -->

 <section class="booking-zoom-room">

     <div class="container">

         <div class="zoom-room-head">
             <h1>Бронювання</h1>
         </div>

         <p>Забронювати номер можна за телефоном - <span><?php echo $tel_1; ?></span> або <span><?php echo $tel_2; ?></span> </p>
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
                                         <input id="check-out" data-key="zoom-room" type="text" class="form-control">
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
                         <p><span class="booking-span-title">Всього:</span><span id="price" class="zoom-room-booking-span-text">
                             </span><span id="nights" class="zoom-room-booking-span-text">
                             </span> </p>
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