<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html lang="ru">

<head>
    <?

    use Bitrix\Main\Page\Asset;
    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.scss');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/template_style.scss');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/styles.scss');

    // Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/slick.min.js');
    // Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick.css');
    // Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/slick-theme.css');

    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>


</head>

<body>

    <?
    $APPLICATION->ShowPanel();
    ?>

    <div class="container">
        <div class="header">
            <div class="header-content">
                <div class="header-content-left">
                    <span>+7 (777) 111-22-33</span>
                    <span>Ежедневно с 9:00 до 18:00</span>
                </div>
                <div class="header-logo">
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="">
                    </a>
                </div>
                <div class="header-icons">
                    <svg class="icon">
                        <use xlink:href="#Profile"></use>
                    </svg>
                    <svg class="icon">
                        <use xlink:href="#Vector"></use>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:sale.basket.basket.line",
                            "cart",
                            array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "PATH_TO_BASKET" => SITE_DIR . "personal/cart/",    // Страница корзины
                                "PATH_TO_ORDER" => SITE_DIR . "personal/order/make/",    // Страница оформления заказа
                                "SHOW_NUM_PRODUCTS" => "Y",    // Показывать количество товаров
                                "SHOW_TOTAL_PRICE" => "Y",    // Показывать общую сумму по товарам
                                "SHOW_EMPTY_VALUES" => "Y",    // Выводить нулевые значения в пустой корзине
                                "SHOW_PERSONAL_LINK" => "Y",    // Отображать персональный раздел
                                "PATH_TO_PERSONAL" => SITE_DIR . "personal/",    // Страница персонального раздела
                                "SHOW_AUTHOR" => "N",    // Добавить возможность авторизации
                                "PATH_TO_AUTHORIZE" => "",    // Страница авторизации
                                "SHOW_REGISTRATION" => "Y",    // Добавить возможность регистрации
                                "PATH_TO_REGISTER" => SITE_DIR . "login/",    // Страница регистрации
                                "PATH_TO_PROFILE" => SITE_DIR . "personal/",    // Страница профиля
                                "SHOW_PRODUCTS" => "N",    // Показывать список товаров
                                "POSITION_FIXED" => "N",    // Отображать корзину поверх шаблона
                                "HIDE_ON_BASKET_PAGES" => "N",    // Не показывать на страницах корзины и оформления заказа
                            ),
                            false
                        ); ?>
                    </svg>
                    <svg class="icon">
                        <use xlink:href="#Search">

                        </use>
                        <? $APPLICATION->IncludeComponent(
                            "bitrix:search.title",
                            ".default",
                            array(),
                            false
                        ); ?>
                    </svg>
                </div>
            </div>
            <nav>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "template1",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                        "DELAY" => "N",    // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1",    // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                        "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                    ),
                    false
                ); ?>
            </nav>
        </div>
        <div class="slider1"><? $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "slider_index1",
                                    array(
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "ADD_SECTIONS_CHAIN" => "Y",
                                        "AJAX_MODE" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "CACHE_FILTER" => "N",
                                        "CACHE_GROUPS" => "Y",
                                        "CACHE_TIME" => "36000000",
                                        "CACHE_TYPE" => "A",
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "DISPLAY_BOTTOM_PAGER" => "Y",
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "FIELD_CODE" => array("", ""),
                                        "FILTER_NAME" => "",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "IBLOCK_ID" => "5",
                                        "IBLOCK_TYPE" => "Sillage",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "MESSAGE_404" => "",
                                        "NEWS_COUNT" => "20",
                                        "PAGER_BASE_LINK_ENABLE" => "N",
                                        "PAGER_DESC_NUMBERING" => "N",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "N",
                                        "PAGER_SHOW_ALWAYS" => "N",
                                        "PAGER_TEMPLATE" => ".default",
                                        "PAGER_TITLE" => "Новости",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "PROPERTY_CODE" => array("URL", ""),
                                        "SET_BROWSER_TITLE" => "Y",
                                        "SET_LAST_MODIFIED" => "N",
                                        "SET_META_DESCRIPTION" => "Y",
                                        "SET_META_KEYWORDS" => "Y",
                                        "SET_STATUS_404" => "N",
                                        "SET_TITLE" => "Y",
                                        "SHOW_404" => "N",
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_ORDER2" => "ASC",
                                        "STRICT_SECTION_CHECK" => "N"
                                    )
                                ); ?></div>

        <div class="list">
            <p>новинки</p>
        </div>

        <div class="list">
            <p>бестселлеры</p>
        </div>

        <div class="list">
            <p>акции</p>
        </div>