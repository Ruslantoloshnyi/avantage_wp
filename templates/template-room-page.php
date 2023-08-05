<?php

/**
 * Template Name: new_room_page
 * Template post type: page*/

get_header('room');
?>

<?php
$args = array(
    'post_type'      => 'room',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date',
);
$query = new WP_Query($args);
?>
<section>
    <div class="container">

        <div class="rooms-row">
            <?php
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <div class="rooms-card ">
                        <div class="rooms-card-image">
                            <?php
                            the_post_thumbnail('full', 'class=img-fluid');
                            ?>
                        </div>
                        <div class="container-card">
                            <div class="rooms-card-head"><?php the_title(); ?></div>
                            <div class="rooms-card-pinc">
                                <?php
                                if (have_rows('single_room_pic')) :
                                    while (have_rows('single_room_pic')) : the_row();
                                        $image = wp_get_attachment_image(get_sub_field('single_room_pic_img'), 'full');
                                ?>
                                        <div class="card-pinc">
                                            <?php echo $image; ?>
                                            <div class="image-overlay">
                                                <div><?php echo get_sub_field('single_room_pic_text'); ?></div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <div class="rooms-content"><?php the_excerpt(); ?></div>
                            <div class="card-footer">
                                <a href="<?php echo get_permalink(); ?>" class="rooms-button">Детальніше</a>
                                <div class="card-price">Ціна від <?php echo get_field('single_price_1'); ?> грн</div>
                            </div>
                        </div>
                    </div>
                <? endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</section> <!-- Rooms Section End -->
<?php get_footer(); ?>