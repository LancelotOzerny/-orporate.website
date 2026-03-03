<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кейсы");
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
                              "ELEMENT_ID" => "54",
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
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "cases_grid",
                [
                        "COMPONENT_TEMPLATE" => "cases_grid",
                        "IBLOCK_TYPE" => "site_content",
                        "IBLOCK_ID" => "6",
                        "NEWS_COUNT" => "20",
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
                        "MESSAGE_404" => "",
                        "ELEMENT_MODIFIER" => "col-lg-6",
                        "SHOW_FILTERS" => "Y",
                        "SHOW_SECTION_NAME" => "Y"
                ],
                false
        );
            ?>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Статистика проектов</h2>
        <?php
        $APPLICATION->IncludeComponent(
            "lancy:content.block",
            "digitals",
            [
                "COMPONENT_TEMPLATE" => "digitals",
                "IBLOCK_TYPE" => "site_content",
                "IBLOCK_ID" => "3",
                "SECTION_ID" => "5"
            ],
            false
        );
        ?>
      </div>
    </section>

    <!-- Testimonials Section -->
    <section class="section bg-light">
      <div class="container">
        <h2 class="section_title">Отзывы клиентов</h2>
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="card-text">"Отличная команда профессионалов! Разработали корпоративный портал точно в срок и по бюджету. Особенно порадовала интеграция с 1С — все работает безупречно."</p>
                <div class="mt-3">
                  <strong>Алексей Морозов</strong><br>
                  <small class="text-muted">Директор производственной компании</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="card-text">"После запуска нашего интернет-магазина продажи выросли в 2.5 раза! Техническая поддержка работает оперативно, всегда готовы помочь. Рекомендую!"</p>
                <div class="mt-3">
                  <strong>Мария Волкова</strong><br>
                  <small class="text-muted">Владелец сети магазинов</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card h-100">
              <div class="card-body">
                <div class="mb-3">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
                <p class="card-text">"Профессиональный подход на всех этапах: от аналитики до запуска. CRM-система полностью закрыла наши потребности и автоматизировала продажи."</p>
                <div class="mt-3">
                  <strong>Игорь Петренко</strong><br>
                  <small class="text-muted">Руководитель отдела продаж</small>
                </div>
              </div>
            </div>
          </div>
        </div>
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
                          "ELEMENT_ID" => "55",
                          "IBLOCK_ID" => "9",
                          "IBLOCK_TYPE" => "site_content",
                          "FIELD_CODE" => [
                                  0 =>"NAME",
                          ],
                          "PROPERTY_CODE" => [
                                  0=>"UF_SUBTITLE",
                          ],

                          "BUTTONS_COUNT" => "1",

                          'BTN1_TEXT' => 'Связаться с нами',
                          'BTN1_LINK' => '/contacts/',
                          'BTN1_ICON_MODIFIER' => 'envelope',
                  )
          );?>
      </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>