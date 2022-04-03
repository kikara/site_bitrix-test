<?php if (! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1920,initial-scale=1">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <? $APPLICATION->ShowHead(); ?>
    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH_DEFAULT . "/css/style.css");
    ?>
</head>
<body>
<? $APPLICATION->ShowPanel(); ?>
<header class="header">
    <div class="container">
        <div class="row container__wrapper">
            <div class="container__logo">
                <a href="/">
                    <img src="<?=SITE_TEMPLATE_PATH?>/images/header_logo.svg" alt="Food4u">
                </a>
            </div>
            <nav class="container__nav">
                <ul class="h-list">
                    <li class="h-list__item">
                        <a href="#" class="h-list__link">Каталог рецептов</a>
                    </li>
                    <li class="h-list__item">
                        <a href="#" class="h-list__link">Спецпроекты</a>
                    </li>
                    <li class="h-list__item">
                        <a href="#" class="h-list__link">Шеф-повар</a>
                    </li>
                </ul>
            </nav>
            <a href="#" class="container_btn">
                Предложить рецепт
            </a>
        </div>
    </div>
</header>
<section class="banner img-cover" style='background-image: url("<?=SITE_TEMPLATE_PATH?>/images/main_banner.png")'>
    <div class="banner__container">
        <h1 class="banner__title">Новогодние рецепты со всего мира</h1>
        <div class="banner__content">Для тех, кто даже в пылу дедлайнов и новогдней суеты ни на минуту не перестаёт хотеть есть — найдите рецепт по вкусу за пару кликов!</div>
        <div class="row h-scroll banner__block">
            <a href="#" class="v-block-ref banner__item">
                <div class="img-cover banner__item-img" style='background-image: url("<?=SITE_TEMPLATE_PATH?>/images/main_dishes.png")'></div>
                <h3 class="banner__item-title">Основные блюда</h3>
            </a>
            <a href="#" class="v-block-ref banner__item">
                <div class="img-cover banner__item-img" style='background-image: url("<?=SITE_TEMPLATE_PATH?>/images/deserts.png")'></div>
                <h3 class="banner__item-title">Десерты</h3>
            </a>
            <a href="#" class="v-block-ref banner__item">
                <div class="img-cover banner__item-img" style='background-image: url("<?=SITE_TEMPLATE_PATH?>/images/drinks.png")'></div>
                <h3 class="banner__item-title">Напитки</h3>
            </a>
        </div>
    </div>
</section>