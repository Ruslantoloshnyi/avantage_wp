<?php

/**
 * Template Name: front_page
 * Template post type: page*/

get_header('main')
?>

<?php

if (have_rows('front_page_content')) :

    while (have_rows('front_page_content')) :
        the_row();

        if (get_row_layout() == 'front_page_info_section') :

            get_template_part('template-parts/front_page_info');

        elseif (get_row_layout() == 'front_page_grid_section') :

            get_template_part('template-parts/front_page_grid');

        elseif (get_row_layout() == 'front_page_booking_section') :

            get_template_part('template-parts/front_page_booking');

        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>