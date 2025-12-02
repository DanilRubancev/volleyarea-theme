<?php

function volleyarea_enqueue_scripts() {
    // Подключение Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css', array(), '5.3.0');
    
    // Подключение шрифтов с Google Fonts
    wp_enqueue_style('volleyarea-google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nova+Round&family=Nova+Script&display=swap', array(), null);
    
    // Подключение основного файла стилей (после Bootstrap)
    wp_enqueue_style('volleyarea-style', get_stylesheet_uri(), array('bootstrap'), '1.0');

    // Подключение Bootstrap JS (с зависимостями)
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js', array(), '5.3.0', true);
    
    // Подключение файла скриптов
    wp_enqueue_script('volleyarea-script', get_template_directory_uri() . '/js/script.js', array('bootstrap-bundle'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'volleyarea_enqueue_scripts');

function volleyarea_theme_setup() {
    // Регистрация области для меню
    register_nav_menus(array(
        'primary' => __('Главное меню', 'volleyarea-theme')
    ));
}

add_action('after_setup_theme', 'volleyarea_theme_setup');

// Добавляем классы Bootstrap к элементам меню
function volleyarea_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->theme_location == 'primary') {
        $atts['class'] = 'nav-link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'volleyarea_nav_menu_link_attributes', 10, 3);

function volleyarea_nav_menu_css_class($classes, $item, $args) {
    if ($args->theme_location == 'primary') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'volleyarea_nav_menu_css_class', 10, 3);

?>
