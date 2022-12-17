<?php

/**
 * Template Name: photo_page
 * Template post type: page*/

get_header();
?>

<?php

if (have_rows('photo_page_content')) :

    while (have_rows('photo_page_content')) :
        the_row();

        if (get_row_layout() == 'photo_section') :            

            get_template_part('template-parts/photo_page_templates/photo_section');        

        endif;

    endwhile;

endif;

?>

<?php get_footer(); ?>