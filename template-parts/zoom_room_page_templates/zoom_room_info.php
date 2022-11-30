<?php 
$zoom_room_info_head = get_sub_field('zoom_room_info_section_head');
$text_1 = get_sub_field('zoom_room_info_section_1');
$text_2 = get_sub_field('zoom_room_info_section_2');
$text_3 = get_sub_field('zoom_room_info_section_3');
$text_4 = get_sub_field('zoom_room_info_section_4');
$text_5 = get_sub_field('zoom_room_info_section_5');
?>

<!-- Zoom-Room info section
    ================================================== -->
<section>

    <div class="container">

        <div class="zoom-room-head-section">

            <div class="row">

                <div class="col-12">

                    <div class="zoom-room-head">
                        <h1><?php echo $zoom_room_info_head; ?></h1>
                    </div>

                    <div class="zoom-room-info-content">

                        <div>
                            <p><?php echo $text_1; ?></p>
                        </div>

                        <div>
                            <p><?php echo $text_2; ?></p>
                        </div>

                        <div>
                            <p><?php echo $text_3; ?></p>
                        </div>

                        <div>
                            <p><?php echo $text_4; ?></p>
                        </div>

                        <div>
                            <p><?php echo $text_5; ?></p>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section><!-- Zoom-Room info section End -->