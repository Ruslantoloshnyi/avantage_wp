<?php

/**
 * Template Name: photo_page
 * Template post type: page*/

get_header();
?>

<section>

    <div class="container">
        <div class="rooms-row">
            <?php
            if (have_rows('photo_content')) :
                while (have_rows('photo_content')) : the_row();
                    $img = wp_get_attachment_image(get_sub_field('photo_image'), 'large', false);
                    $img_id = get_sub_field('photo_image');
                    $img_url = wp_get_attachment_image_url($img_id, 'full');
            ?>
                    <div class="photo-card ">
                        <div class="rooms-card-image">
                            <a href="<?php echo $img_url; ?>" data-lightbox="room-gallery"><?php echo $img; ?></a>
                            <div class="container-card rooms-photo-block">
                                <div class="rooms-photo-content"><?php echo get_sub_field('photo_text'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section> <!-- Rooms Section End -->

<?php get_footer(); ?>