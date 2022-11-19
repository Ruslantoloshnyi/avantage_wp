<?php

/**
 * Template Name: сontent_builder
 * Template post type: page
 */


get_header();
?>


    
    <?php

    if (have_rows('builder')) {
        while (have_rows('builder')) {
            the_row();

            $section = get_row_layout(); // get string name of section
            switch ($section) {

                case 'page_title':

                    get_template_part('template-parts/front_page_info');
                    break;

               
            }
        }
    }

    ?>

<?php

get_footer();