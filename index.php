<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/** @var CMain $APPLICATION */

$APPLICATION->SetTitle("Главная - Корпоративный портал");
?>
<!-- Блок "Команда" -->
<section class="section bg-light" id="team">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <?$APPLICATION->IncludeComponent(
                    "lancy:Image",
                    ".default",
                    [
                        "ALT" => "Корпоративные порталы",
                        "COMPONENT_TEMPLATE" => ".default",
                        "TYPE" => "MEDIA_LIBRARY",
                        "WIDTH" => "90%",
                        "HEIGHT" => "",
                        "COLLECTION" => "1",
                        "COLLECTION_URL" => "/upload/medialibrary/b8c/gns4ej5yta49ztnhn2ne9jqa7frwg2j4.png"
                    ],
                    false
                );?>
            </div>

            <div class="col-lg-6">
                <?php
                $APPLICATION->IncludeComponent(
                        "bitrix:news.detail",
                        "sta",
                        Array(
                            "ELEMENT_ID" => "43",
                            "IBLOCK_ID" => "9",
                            "IBLOCK_TYPE" => "site_content",
                            "FIELD_CODE" => [
                                0 =>"NAME",
                            ],
                            "PROPERTY_CODE" => [
                                0=>"UF_SUBTITLE",
                            ],

                            "BUTTONS_COUNT" => "1",

                            "BTN1_TEXT" => "Познакомиться с командой",
                            "BTN1_LINK" => "/about/team/",
                            'BUTTONS_ON_CENTER' => 'N'
                        )
                );?>
            </div>
        </div>
    </div>
</section>

<!-- Кейсы -->
<section class="section">
    <div class="container">
        <h2 class="section_title">Наши кейсы</h2>
        <?php
        $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "cases_grid",
                [
                        "COMPONENT_TEMPLATE" => "cases_grid",
                        "IBLOCK_TYPE" => "site_content",
                        "IBLOCK_ID" => "6",
                        "NEWS_COUNT" => "3",
                        "SORT_BY1" => "ACTIVE_FROM",
                        "SORT_ORDER1" => "DESC",
                        "SORT_BY2" => "SORT",
                        "SORT_ORDER2" => "ASC",
                        "FILTER_NAME" => "",
                        "FIELD_CODE" => [
                                0 => "ID",
                                1 => "NAME",
                                2 => "TAGS",
                                3 => "PREVIEW_TEXT",
                                4 => "PREVIEW_PICTURE",
                                5 => "",
                        ],
                        "PROPERTY_CODE" => [
                                0 => "",
                                1 => "",
                        ],
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "Y",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "CACHE_TYPE" => "A",
                        "CACHE_TIME" => "36000000",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "PREVIEW_TRUNCATE_LEN" => "75",
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "SET_TITLE" => "Y",
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_LAST_MODIFIED" => "N",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                        "PARENT_SECTION" => "",
                        "PARENT_SECTION_CODE" => "",
                        "INCLUDE_SUBSECTIONS" => "Y",
                        "STRICT_SECTION_CHECK" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "DISPLAY_TOP_PAGER" => "N",
                        "DISPLAY_BOTTOM_PAGER" => "Y",
                        "PAGER_TITLE" => "Новости",
                        "PAGER_SHOW_ALWAYS" => "N",
                        "PAGER_DESC_NUMBERING" => "N",
                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "SET_STATUS_404" => "N",
                        "SHOW_404" => "N",
                        "MESSAGE_404" => "",
                        "ELEMENT_MODIFIER" => "col-md-4",
                        "SHOW_FILTERS" => "N",
                        "SHOW_SECTION_NAME" => "N"
                ],
                false
        );
        ?>
    </div>
</section>

<!-- Кратко о миссии -->
<section class="section bg-light" id="mission">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    "sta",
                    Array(
                        "ELEMENT_ID" => "41",
                        "IBLOCK_ID" => "9",
                        "IBLOCK_TYPE" => "site_content",
                        "FIELD_CODE" => [
                            0 =>"NAME",
                            1 =>"PREVIEW_TEXT",
                        ],
                        "PROPERTY_CODE" => [
                            0=>"UF_SUBTITLE",
                        ],
                        "BUTTONS_COUNT" => "1",
                        "BTN1_TEXT" => "Подробнее о ценностях",
                        "BTN1_LINK" => "/about/missiya-i-tsennosti/",
                    )
                );?>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section">
    <div class="container">
        <div class="col-lg-8 mx-auto text-center">
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.detail",
                "sta",
                Array(
                    "ELEMENT_ID" => "42",
                    "IBLOCK_ID" => "9",
                    "IBLOCK_TYPE" => "site_content",
                    "FIELD_CODE" => [
                        0 =>"NAME",
                    ],
                    "PROPERTY_CODE" => [
                        0=>"UF_SUBTITLE",
                    ],

                    "BUTTONS_COUNT" => "2",

                    "BTN1_TEXT" => "Связаться с нами",
                    "BTN1_LINK" => "/contacts/",
                    "BTN1_ICON_MODIFIER" => "envelope",

                    "BTN2_TEXT" => "Услуги и цены",
                    "BTN2_LINK" => "/services/",
                    "BTN2_ICON_MODIFIER" => "list",
                )
            );?>
        </div>
    </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>