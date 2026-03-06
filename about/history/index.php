<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
?>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
          <?php
          $APPLICATION->IncludeComponent(
                  "bitrix:news.detail",
                  "sta",
                  Array(
                      "ELEMENT_ID" => "47",
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

<section class="section bg-light">
    <div class="container">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "history",
            Array(
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
                "COMPONENT_TEMPLATE" => "history",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => [0=>"",1=>"",],
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "12",
                "IBLOCK_TYPE" => "site_content",
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
                "PROPERTY_CODE" => [0=>"UF_YEAR",1=>"ACHIEVEMENT_1",2=>"ACHIEVEMENT_2",3=>"ACHIEVEMENT_3",4=>"",],
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
        );?>
    </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $APPLICATION->IncludeComponent(
      "lancy:content.block",
      "digitals",
      [
          "COMPONENT_TEMPLATE" => "digitals",
          "IBLOCK_TYPE" => "site_content",
          "IBLOCK_ID" => "3",
          "SECTION_ID" => "3"
      ],
      false
    );
    ?>
</section>

<!-- Awards Section -->
<section class="section bg-light">
  <div class="container">
    <h2 class="section_title">Награды и сертификаты</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-trophy card-icon text-warning"></i>
            <h3 class="card-title">Лучший интегратор года</h3>
            <p class="text-muted mb-2">1С-Битрикс, 2017, 2019, 2022</p>
            <p class="card-text">Трижды получали престижную награду от компании 1С-Битрикс за выдающиеся результаты в разработке и внедрении корпоративных порталов</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-award card-icon text-primary"></i>
            <h3 class="card-title">ISO 27001</h3>
            <p class="text-muted mb-2">Сертификация, 2019</p>
            <p class="card-text">Международный сертификат по управлению информационной безопасностью, подтверждающий высокий уровень защиты данных клиентов</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-gem card-icon text-success"></i>
            <h3 class="card-title">Топ-10 интеграторов</h3>
            <p class="text-muted mb-2">Рейтинг РБК, 2023-2026</p>
            <p class="card-text">Стабильно входим в десятку крупнейших интеграторов корпоративных IT-решений в России по версии РБК</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 mt-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-patch-check card-icon text-info"></i>
            <h3 class="card-title">Золотой партнер 1С-Битрикс</h3>
            <p class="text-muted mb-2">С 2018 года</p>
            <p class="card-text">Высший статус партнерства, подтверждающий экспертизу команды и качество реализованных проектов</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-star card-icon text-danger"></i>
            <h3 class="card-title">Премия «Инновация года»</h3>
            <p class="text-muted mb-2">IT-форум ЮФО, 2021</p>
            <p class="card-text">Награда за внедрение AI-технологий в корпоративные порталы и автоматизацию бизнес-процессов</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-heart card-icon text-danger"></i>
            <h3 class="card-title">Лучший работодатель</h3>
            <p class="text-muted mb-2">Рейтинг HeadHunter, 2024</p>
            <p class="card-text">Признание в номинации «Лучший работодатель в сфере IT» в Ростовской области</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
          <?php
            $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "sta",
            Array(
                "ELEMENT_ID" => "48",
                "IBLOCK_ID" => "9",
                "IBLOCK_TYPE" => "site_content",
                "FIELD_CODE" => [
                    0 =>"NAME",
                ],
                "PROPERTY_CODE" => [
                    0=>"UF_SUBTITLE",
                ],

                    "BUTTONS_COUNT" => "1",
                    'BTN1_TEXT' => 'Узнать больше о миссии',
                    'BTN1_LINK' => '/about/missiya-i-tsennosti/',
                    'BUTTONS_ON_CENTER' => 'N'
                )
            );?>
      </div>

      <div class="col-lg-6">
          <?$APPLICATION->IncludeComponent(
                  "lancy:Image",
                  ".default",
                  [
                          "ALT" => "",
                          "COLLECTION" => "1",
                          "COLLECTION_URL" => "/upload/medialibrary/e38/r5yq94vb4rhyt4ky612jty41gaq4h3nz.jpeg",
                          "COMPONENT_TEMPLATE" => ".default",
                          "TYPE" => "MEDIA_LIBRARY",
                          "WIDTH" => "100%",
                          "HEIGHT" => ""
                  ],
                  false
          );?>
      </div>
    </div>
  </div>
</section>

<section class="section bg-light">
  <div class="container">
      <?$APPLICATION->IncludeComponent(
          "lancy:content.block",
          "advantages",
          Array(
              "COMPONENT_TEMPLATE" => "advantages",
              "ELEMENT_MODIFIER" => "col-lg-3 col-md-6",
              "IBLOCK_ID" => "2",
              "IBLOCK_PROPERTIES" => [0=>"UF_MODIFIER",],
              "IBLOCK_TYPE" => "site_content",
              "SECTION_ID" => "9"
          )
      );?>
  </div>
</section>

<section class="section">
      <div class="container text-center">
          <?php
          $APPLICATION->IncludeComponent(
                  "bitrix:news.detail",
                  "sta",
                  Array(
                          "ELEMENT_ID" => "49",
                          "IBLOCK_ID" => "9",
                          "IBLOCK_TYPE" => "site_content",
                          "FIELD_CODE" => [
                                  0 =>"NAME",
                          ],
                          "PROPERTY_CODE" => [
                                  0=>"UF_SUBTITLE",
                          ],

                          "BUTTONS_COUNT" => "2",

                          'BTN1_TEXT' => 'Связаться с нами',
                          'BTN1_LINK' => '/contacts/',
                          'BTN1_ICON_MODIFIER' => 'envelope',

                          'BTN2_TEXT' => 'Наши проекты',
                          'BTN2_LINK' => '/cases/',
                          'BTN2_ICON_MODIFIER' => 'folder',
                  )
          );?>
      </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>