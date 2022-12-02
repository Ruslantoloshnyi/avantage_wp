<?php

/**
 * Template Name: booking_page
 * Template post type: page*/

get_header('booking');
?>

<?php

if (have_rows('booking_content')) :

    while (have_rows('booking_content')) :
        the_row();

        if (get_row_layout() == 'booking_calculation_section') :

            get_template_part('template-parts/booking_page_templates/booking_calculation');
        
        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>