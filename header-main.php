<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Avantage
 */
?>

<?php 
$id = '14';
$id_room = get_permalink($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avantage</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://fonts.google.com/specimen/Merriweather?query=Merriweather">



    <? wp_head();
    ?>
</head>

    <!-- Header
    ================================================== -->
    <header class="header">

        <nav class="navbar navbar-expand-md navbar-light bg-avantage">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <?php wp_nav_menu([                        
                        'menu_class'      => 'navbar-nav',                       
                    ]);
                    ?>
                </div>
            </div>
        </nav>

        <div class="container">

            <section id="title" class="title-section">

                <div class="title">

                    <div class="title-head">
                        <h1>Готель “Авантаж”</h1>
                    </div>

                    <div class="title-content">
                        <p>Сучасний комфортабельний готель <br> за два кроки від пляжу</p>
                    </div>

                    <div class="title-foot">
                        <p>Залізний Порт</p>
                    </div>

                    <a href="<?php echo $id_room; ?>"><button type="button" style="background-color: #1ABC9C" class="btn btn-primary title-href">Обрати
                        номер
                    </button></a>

                </div>

            </section>

        </div>

    </header> <!-- Header End -->