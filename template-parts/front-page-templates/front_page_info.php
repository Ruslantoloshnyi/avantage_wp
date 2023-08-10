<section id="info" class="info">

    <div class="container">

        <div class="row">
            <?php
            if (have_rows('front_page_info')) :
                while (have_rows('front_page_info')) : the_row();
                    $image = get_sub_field('front_page_info_image');
                    $img = wp_get_attachment_image($image, 'full');
            ?>
                    <div class="col-6 col-md-4">
                        <div class="info-one">
                            <div class="img-one">
                                <?php echo $img; ?>
                            </div>
                            <div class="info-title">
                                <p><?php echo get_sub_field('front_page_info_title'); ?></p>
                            </div>
                            <div class="info-content">
                                <p><?php echo get_sub_field('front_page_info_content'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section> <!-- Info section End -->