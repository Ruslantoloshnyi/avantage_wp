<?php

/**
 * Template Name: zoom_room_page
 * Template post type: page*/

get_header();
?>

<?php

if (have_rows('zoom_room_content')) :

    while (have_rows('zoom_room_content')) :
        the_row();

        if (get_row_layout() == 'zoom_room_room_section') :

            get_template_part('template-parts/zoom_room_page_templates/zoom_room_room');
       
        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>