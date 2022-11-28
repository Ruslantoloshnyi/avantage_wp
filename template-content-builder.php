<?php

/**
 * Template Name: room page
 * Template post type: page*/

get_header();
?>

<?php

if (have_rows('room_page_content')) :

    while (have_rows('room_page_content')) :
        the_row();

        if (get_row_layout() == 'room_page_lux_two') :

            get_template_part('template-parts/room_page_templates/room_page_lux_two');

        elseif (get_row_layout() == 'room_page_comfort_two') :

            get_template_part('template-parts/room_page_templates/room_page_comfort_two');

        elseif (get_row_layout() == 'room_page_lux_three') :

            get_template_part('template-parts/room_page_templates/room_page_lux_three');

        elseif (get_row_layout() == 'room_page_comfort_three') :

            get_template_part('template-parts/room_page_templates/room_page_comfort_three');

        elseif (get_row_layout() == 'room_page_lux_four') :

            get_template_part('template-parts/room_page_templates/room_page_lux_four');

        elseif (get_row_layout() == 'room_page_lux_four_two') :

            get_template_part('template-parts/room_page_templates/room_page_lux_four_two');

        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>