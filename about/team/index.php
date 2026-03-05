<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наша команда");
?>
<!-- Intro Section -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
      <?php
      $APPLICATION->IncludeComponent(
          "bitrix:news.detail",
          "sta",
          Array(
              "ELEMENT_ID" => "45",
              "IBLOCK_ID" => "9",
              "IBLOCK_TYPE" => "site_content",
              "FIELD_CODE" => [
                  0 =>"NAME",
              ],
              "PROPERTY_CODE" => [
                  0=>"UF_SUBTITLE",
              ],

              "BUTTONS_COUNT" => "0",
          )
      );?>
      </div>
    </div>
  </div>
</section>

<!-- Team Filter -->
<section class="section bg-light">
  <div class="container">
      <?php
      $APPLICATION->IncludeComponent(
              "bitrix:news.list",
              "team_grid",
              [
                      "IBLOCK_TYPE" => "site_content",
                      "IBLOCK_ID" => "10",
                      "COMPONENT_TEMPLATE" => "team_grid",
                      "NEWS_COUNT" => "20",
                      "SORT_BY1" => "ACTIVE_FROM",
                      "SORT_ORDER1" => "DESC",
                      "SORT_BY2" => "SORT",
                      "SORT_ORDER2" => "ASC",
                      "FILTER_NAME" => "",
                      "FIELD_CODE" => [
                              0 => "",
                              1 => "",
                      ],
                      "PROPERTY_CODE" => [
                              0 => "UF_POSITION",
                              1 => "UF_SPECIALIZATION",
                              2 => "UF_LINKEDIN_LINK",
                              3 => "UF_EMAIL_LINK",
                              4 => "UF_TELEGRAM_LINK",
                              5 => "",
                              6 => "",
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
                      "PREVIEW_TRUNCATE_LEN" => "",
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
                      "MESSAGE_404" => ""
              ],
              false
      );
      ?>
  </div>
</section>

<!-- Stats Section -->
<section class="section">
  <div class="container">
    <h2 class="section_title">Команда в цифрах</h2>
    <?php
    $APPLICATION->IncludeComponent(
        "lancy:content.block",
        "digitals",
        [
            "COMPONENT_TEMPLATE" => "digitals",
            "IBLOCK_TYPE" => "site_content",
            "IBLOCK_ID" => "3",
            "SECTION_ID" => "4"
        ],
        false
    );
    ?>
  </div>
</section>

<!-- Culture Section -->
<section class="section bg-light">
  <div class="container">
    <h2 class="section_title">Корпоративная культура</h2>

    <?php
    $APPLICATION->IncludeComponent(
      "lancy:content.block",
      "advantages",
      [
          "COMPONENT_TEMPLATE" => "advantages",
          "IBLOCK_TYPE" => "site_content",
          "IBLOCK_ID" => "2",
          "SECTION_ID" => "7",
          "IBLOCK_PROPERTIES" => [0=>"UF_MODIFIER",],
          "ELEMENT_MODIFIER" => "col-lg-4 col-md-6"
      ],
      false
    );
    ?>
  </div>
</section>

<!-- CTA Section -->
<section class="section">
  <div class="container text-center">
      <?php
      $APPLICATION->IncludeComponent(
              "bitrix:news.detail",
              "sta",
              Array(
                  "ELEMENT_ID" => "46",
                  "IBLOCK_ID" => "9",
                  "IBLOCK_TYPE" => "site_content",
                  "FIELD_CODE" => [
                      0 =>"NAME",
                  ],
                  "PROPERTY_CODE" => [
                      0=>"UF_SUBTITLE",
                  ],

                  "BUTTONS_COUNT" => "1",
                  'BTN1_TEXT' => 'Посмотреть вакансии',
                  'BTN1_LINK' => '/career/',
              )
      );?>
  </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>