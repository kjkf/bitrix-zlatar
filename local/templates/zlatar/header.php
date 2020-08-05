<?php
/**
 * Created by IntelliJ IDEA.
 * User: yakjk
 * Date: 04.08.2020
 * Time: 13:44
 */
?>
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>

    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead();?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/public/css/normalize.css') ?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/public/css/styles.min.css') ?>

</head>
<body>
<?$APPLICATION->ShowPanel(); ?>
<div class="container">
    <header class="header">
        <div class="contacts header__contacts">
            <div class="contacts__l">
                <a class="ic email" href="#">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/email.php",
                        array(),
                        array(
                            "MODE" => "text"
                        )
                    )?>
                </a>
            </div>
            <div class="contacts__r">
                <a class="ic phone" href="tel:+77076060319">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/phone1.php",
                            array(),
                            array(
                                    "MODE" => "text"
                            )
                    )?>
                </a>
                <a class="ic phone" href="tel:+77273297848">
                    <?$APPLICATION->IncludeFile(
                        SITE_DIR."include/phone2.php",
                        array(),
                        array(
                            "MODE" => "text"
                        )
                    )?>
                </a>
            </div>
        </div>
        <div class="left-side">
            <div class="logo">
                <a href="#" class="logo__link"><img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/ZR_Logo.svg" alt="ЗЛАТАРЬ" class="logo__img"></a>
            </div>
            <div class="nav-wrap">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "menu", Array(
                    "ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "2",	// Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                    "ROOT_MENU_TYPE" => "leftfirst",	// Тип меню для первого уровня
                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                    "COMPONENT_TEMPLATE" => "horizontal_multilevel"
                ),
                    false
                );?>
                <div class="banner">
                    <img src="<?=SITE_TEMPLATE_PATH?>/public/images/content/banner_01.jpg" alt="ЗЛАТАРЬ" class="banner__img">
                </div>
            </div>
        </div>
    </header>
    <div class="content about">
        <div class="content-in">
            <h1 class="content__header title title-main"><span class="ic-rhomb"></span><?php $APPLICATION->ShowTitle() ?></h1>