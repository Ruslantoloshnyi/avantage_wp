


<?php if (have_rows('front_page_info')) : ?>

    <section id="info" class="info">

        <div class="container">

            <div class="row">

                <?php while (have_rows('front_page_info')) : the_row();

                    $image = get_sub_field('front_page_info_img');
                    $head = get_sub_field('front_page_info_head');
                    $subhead = get_sub_field('front_page_info_subhead');
                    $img = wp_get_attachment_image($image, 'full');

                ?>

                    <div class="col-6 col-md-4">

                        <div class="info-one">

                            <div class="img-one">
                                <?php echo $img; ?>
                            </div>

                            <div class="info-title">
                                <p><?php echo $head; ?></p>
                            </div>

                            <div class="info-content">
                                <p><?php echo $subhead; ?></p>
                            </div>

                        </div>

                    </div>

                <?php endwhile; ?>

            </div>

        </div>

    </section>

<?php endif; ?>