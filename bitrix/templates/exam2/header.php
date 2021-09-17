<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/reset.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" />
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/owl.carousel.css" />
    <script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script>
    <link rel="icon" type="image/vnd.microsoft.icon"  href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
</head>

<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<!-- wrap -->
<div class="wrap">
    <!-- header -->
    <header class="header">
        <div class="inner-wrap">
            <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
            </div>
            <div class="main-phone-block">
                <?
                $hour = date('G');
                if (($hour >= 9) && ($hour <= 18)) { ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/main_main.php"
                        )
                    );?>
                <?php
                }else{ ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => "/include/main_tel.php"
                        )
                    );?>
                <?php } ?>
                <div class="shedule">время работы с 9-00 до 18-00</div>
            </div>
            <div class="actions-block">
                <form action="/" class="main-frm-search">
                    <input type="text" placeholder="Поиск">
                    <button type="submit"></button>
                </form>
                <nav class="menu-block">
                    <ul>
                        <li class="att popup-wrap">
                            <a id="hd_singin_but_open" href="" class="btn-toggle">Войти на сайт</a>
                            <form action="/" class="frm-login popup-block">
                                <div class="frm-title">Войти на сайт</div>
                                <a href="" class="btn-close">Закрыть</a>
                                <div class="frm-row"><input type="text" placeholder="Логин"></div>
                                <div class="frm-row"><input type="password" placeholder="Пароль"></div>
                                <div class="frm-row"><a href="" class="btn-forgot">Забыли пароль</a></div>
                                <div class="frm-row">
                                    <div class="frm-chk">
                                        <input type="checkbox" id="login">
                                        <label for="login">Запомнить меня</label>
                                    </div>
                                </div>
                                <div class="frm-row"><input type="submit" value="Войти"></div>
                            </form>
                        </li>
                        <li><a href="">Зарегистрироваться</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- /header -->
    <!-- nav -->
    <nav class="nav">
        <div class="inner-wrap">
            <div class="menu-block popup-wrap">
                <a href="" class="btn-menu btn-toggle"></a>
                <div class="menu popup-block">
                    <ul class="">
                        <li class="main-page"><a href="">Главная</a>
                        </li>
                        <li>
                            <a href="">Компания</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Новости</a>
                        </li>
                        <li>
                            <a href="">Каталог</a>
                            <ul>
                                <li>
                                    <a href="">Пункт 1</a>
                                    <ul>
                                        <li><a href="">Пункт 1</a>
                                        </li>
                                        <li><a href="">Пункт 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="">Пункт 2</a>
                                </li>
                                <li><a href="">Пункт 3</a>
                                </li>
                                <li><a href="">Пункт 4</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Фотогалерея</a>
                        </li>
                        <li><a href="">Партнерам</a>
                        </li>
                        <li><a href="">Контакты</a>
                        </li>
                    </ul>
                    <a href="" class="btn-close"></a>
                </div>
                <div class="menu-overlay"></div>
            </div>
        </div>
    </nav>
    <!-- /nav -->
    <!-- breadcrumbs -->
    <div class="breadcrumbs-box">
        <div class="inner-wrap">
            <a href="">Главная</a>
            <a href="">Мебель</a>
            <span>Выставки и события</span>
        </div>
    </div>
    <!-- /breadcrumbs -->
    <!-- page -->
    <div class="page">
        <!-- content box -->
        <div class="content-box">
            <!-- content -->
            <div class="content">
                <div class="cnt">