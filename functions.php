<?php

function volleyarea_enqueue_scripts() {
    // Подключение основного файла стилей
    wp_enqueue_style('volleyarea-style', get_stylesheet_uri());

    // Подключение шрифтов с Google Fonts
    wp_enqueue_style('volleyarea-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nova+Round&family=Nova+Script&display=swap', array(), null);

    // Подключение файла скриптов
    wp_enqueue_script('volleyarea-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'volleyarea_enqueue_scripts');

function volleyarea_theme_setup() {
    // Регистрация области для меню
    register_nav_menus(array(
        'primary' => __('Главное меню', 'volleyarea-theme')
    ));
}

add_action('after_setup_theme', 'volleyarea_theme_setup');

?>
