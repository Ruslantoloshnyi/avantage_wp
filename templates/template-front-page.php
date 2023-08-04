<?php

/**
 * Template Name: front_page
 * Template post type: page*/

get_header('main')
?>

<?php

if (have_rows('front_page_info')) {
    get_template_part('./template-parts/front-page-templates/front_page_info');
}

if (have_rows('front_page_grid')) {

    get_template_part('./template-parts/front-page-templates/front_page_grid');
}

if (have_rows('front_page_booking')) {
    get_template_part('./template-parts/front-page-templates/front_page_booking');
}
?>
<div class="container">
    <?php echo do_shortcode('[avantage_weather_widget]'); ?>
</div>

<?php get_footer(); ?>