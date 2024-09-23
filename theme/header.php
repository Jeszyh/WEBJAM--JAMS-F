<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/styles/main.css">
    <script>
        iconsPath = '<?php bloginfo('template_url') ?>/dist/';
    </script>
    <script src="<?php bloginfo('template_url') ?>/dist/scripts/main.js" defer></script>
</head>

<body data-component="Scrolly" <?php body_class(); ?>>

    <header class="header" data-component="Header" data-scroll-limit="0.05" data-auto-hide="true">
        <div class="wrapper">
        <div class="header__logo">
                <a href="<?php bloginfo('url') ?>">
                    <img src="<?php bloginfo('template_url') ?>/dist/assets/images/logo.png" alt="Logo">
                </a>
            </div>
            <?php wp_nav_menu(array(
                'theme_location' => 'menu_principal',
                'container' => 'nav',
                'container_class' => 'header__nav',
                'menu_class' => 'nav__menu',
            )); ?>
        </div>
        <button class="header__toggle js-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
    </header>
    