<?php
/*
Jonna Nöjd
Projektarbete i dt197g Mittuniversitetet 2022
*/

//Aktivera meny

add_action('init', 'register_menus');

function register_menus()
{
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny'
    ));
}

//Aktivera widget-area

add_action('widgets_init', 'skogab_widget_init');

function skogab_widget_init()
{
    register_sidebar(array(
        'name' => 'Längst upp sidebar på startsidan',
        'id' => 'start-puff',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Vänster-kolumn i sidfot',
        'id' => 'left-footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Mitten-kolumn i sidfot',
        'id' => 'middle-footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Höger-kolumn i sidfot',
        'id' => 'right-footer',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Längst upp sidebar på personal-sidan',
        'id' => 'staff-puff',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}


//Aktivera utvald bild 

add_theme_support('post-thumbnails');

add_image_size('card', 500, 400, array('center', 'center'));
add_image_size('landscape', 700, 500, array('center', 'center'));
add_image_size('square', 400, 400, array('center', 'center'));

//Aktivera shortcode för copyright symbol

add_action('init', 'ravsta_register_shortcodes');

function ravsta_register_shortcodes()
{
    add_shortcode('copyright', 'copyright');
}

function copyright($content)
{

    $content = '&copy;';

    return $content;
}


/* Dynamisk header-bild -> Funkar av någon anledning inte

$args = array(
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'width' => 1900,
    'height' => 500,
    'uploads' => true
);
add_theme_support('custom-header', $args);

//För att temat ska hitta default header-bild behövde jag skriva detta, kod från StackExchange, "Default header image does not display", https://wordpress.stackexchange.com/questions/195641/default-header-image-does-not-display

register_default_headers(array(
    'headerimage' => array(
        'url'           => '%s/images/header.jpg',
        'thumbnail_url' => '%s/images/header.jpg',
        'description'   => __('headerimage', 'ravsta')
    ),
));

*/




