<?php
if (have_rows('room_page_content')) :
    while (have_rows('room_page_content')) : the_row();

        $attr = ['class' => 'img-fluid'];
        $image_first = wp_get_attachment_image(get_sub_field('room_page_content_first_image'), 'full', false, $attr);
        $image_second = wp_get_attachment_image(get_sub_field('room_page_content_second_image'), 'full', false, $attr);
        $page_first_ID = '';
        $page_second_ID = '';

        if (get_sub_field('room_page_content_first_head') == 'Люкс для двох') {
            $page_first_ID = 242;
        } elseif (get_sub_field('room_page_content_first_head') == 'Люкс для трьох') {
            $page_first_ID = 259;
        } elseif (get_sub_field('room_page_content_first_head') == 'Люкс для чотирьох') {
            $page_first_ID = 265;
        };

        if (get_sub_field('room_page_content_second_head') == 'Комфорт для двох') {
            $page_second_ID = 256;
        } elseif (get_sub_field('room_page_content_second_head') == 'Комфорт для трьох') {
            $page_second_ID = 261;
        } elseif (get_sub_field('room_page_content_second_head') == 'Двокімнатний люкс для чотирьох') {
            $page_second_ID = 267;
        };

?>

        <div class="container-fluid">

            <div class="row">

                <div class="col-md-6 col-12  rooms-card ">

                    <div class="rooms-card-image">
                        <?php echo $image_first; ?>
                    </div>

                    <div class="container-card">

                        <div class="rooms-card-head"><?php echo get_sub_field('room_page_content_first_head'); ?></div>

                        <div class="rooms-card-pinc">
                            <?php
                            if (have_rows('room_page_content_first_pic')) :
                                while (have_rows('room_page_content_first_pic')) : the_row();

                                    $pic_first_img = wp_get_attachment_image(get_sub_field('room_page_first_pic'), 'full');

                            ?>
                                    <div class="card-pinc">
                                        <?php echo $pic_first_img; ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <div class="rooms-content"><?php echo get_sub_field('room_page_content_first_text') ?></div>

                        <div class="card-footer">
                            <a href=" <?php echo get_permalink($page_first_ID) ?>"><button type="button" class="rooms-button">Детальніше</button></a>
                            <div class="card-price">Ціна від 850 грн</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 rooms-card">

                    <div class="rooms-card-image">
                        <?php echo $image_second; ?>
                    </div>

                    <div class="container-card">

                        <div class="rooms-card-head"><?php echo get_sub_field('room_page_content_second_head') ?></div>

                        <div class="rooms-card-pinc">
                            <?php
                            if (have_rows('room_page_content_second_pic')) :
                                while (have_rows('room_page_content_second_pic')) : the_row();

                                    $pic_second_img = wp_get_attachment_image(get_sub_field('room_page_second_pic'), 'full');
                            ?>
                                    <div class="card-pinc">
                                        <?php echo $pic_second_img ?>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>

                        </div>

                        <div class="rooms-content"><?php echo get_sub_field('room_page_content_second_text') ?></div>

                        <div class="card-footer">
                            <a href="<?php echo get_permalink($page_second_ID); ?>"><button type="button" class="rooms-button"> Детальніше </button></a>
                            <div class="card-price">Ціна від 700 грн</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    <?php endwhile; ?>
<?php endif; ?>