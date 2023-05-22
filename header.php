<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Dynamisk meta description -->
    <meta name="description" content="<?php if (have_posts()) {
                                            while (have_posts()) {
                                                the_post();
                                            }
                                            echo the_title();
                                            echo " - ";
                                            // Excerpt utan html-taggar
                                            echo the_excerpt_rss();
                                        } else {
                                            echo "Välkommen till Rävsta stugby. Vi har funnits sedan 1967.";
                                        }
                                        ?>" />
    <title><?php bloginfo('name') ?> | <?php
                                        //Dynamisk title, kodsnutt från StackExchange, "the_title() shows title of the first post instead of the page title?", https://wordpress.stackexchange.com/questions/90574/the-title-shows-title-of-the-first-post-instead-of-the-page-title Hämtad 2022-10-24 
                                        if (is_front_page()) {
                                            echo "Hem";
                                        } else if (is_single()) { // Enskilda inlägg
                                            echo the_title();;
                                        } else if (is_page()) { // Vanlig sida
                                            echo get_the_title();
                                        } else if (is_category()) { // Kategorisida (Nyheter t.ex.)
                                            single_cat_title();
                                        } ?></title>
    <!--Typsnitt-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Merriweather:wght@400;700&family=Montserrat:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!--Favicon-->
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!--Stilmall-->
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/main.css">
    <!--Hook-->
    <?php wp_head(); ?>
</head>

<body>
    <!--Sidhuvud-->
    <header>
        <div class="header-content">
            <a href="<?= get_home_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/images/logotyp.svg" alt="" id="logotyp" /></a>
            <!--Huvudnavigering-->
            <nav class="main-nav">
                <?php
                //Aktiverar plats i tema för dynamisk meny
                wp_nav_menu(array('theme-location' => 'main-nav'));
                ?>
            </nav>
            <!--Ikon för hamburgarmeny-->
            <div class="burger-menu">
                <div class="bar">
                    <span class="bar-1"></span>
                    <span class="bar-2"></span>
                    <span class="bar-3"></span>
                </div>
            </div>
        </div>
    </header>
    <!--Slut på sidhuvud-->
    <main>