<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body style="background-color: #ffdff1;">
    <!--HEADER-->
    <header class="header">
        <div class="header-overlay">
            <div class="nav-container">
                <div class="col-2"> 
                    <img src="<?php the_field('logo_1', 2); ?>" alt="" class="logo"> 
                    <img src="<?php the_field('logo_2', 2); ?>" alt="" class="logo2 text-center">
                </div>
                <nav class="nav-wrapper">
                    <ul class="nav">
                        <li class="nav__item"><a href="#a1" class="nav__link nav__link-active">Главная</a></li>
                        <li class="nav__item"><a href="#a2" class="nav__link">Услуги</a></li>
                        <li class="nav__item"><a href="#a3" class="nav__link">Работы</a></li>
                        <li class="nav__item"><a href="#a4" class="nav__link">Контакты</a></li>
                    </ul>
                    <div id="menu-togle" class="menu-icon">
                        <div class="menu-icon-line"></div>
                    </div>
                    <div id="mobile-nav" class="mobile-nav">
                        <ul class="mobile-nav__list">
                            <li class="mobile-nav__item"><a href="#a1" class="nav__link nav__link-active">Главная</a></li>
                            <li class="mobile-nav__item"><a href="#a2" class="nav__link">Услуги</a></li>
                            <li class="mobile-nav__item"><a href="#a3" class="nav__link">Работы</a></li>
                            <li class="mobile-nav__item"><a href="#a4" class="nav__link">Контакты</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>