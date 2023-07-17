<?php

/**
 * Template Name: new_room_page
 * Template post type: page*/

get_header('room');
?>
<section>
    <?php
    if (have_rows('room_page_content')) {
        get_template_part('./template-parts/room_page_templates/room_page_first');
    }
    ?>
</section>
<?php get_footer(); ?>