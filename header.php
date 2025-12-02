<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ball.svg" alt="Логотип VolleyArea" class="logo-icon">
                    <span class="logo-text">VolleyArea</span>
                </div>
                <nav class="nav">
                    <button class="burger-menu" aria-label="Открыть меню">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'nav-list',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'fallback_cb'    => false,
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </header>

    <main>
