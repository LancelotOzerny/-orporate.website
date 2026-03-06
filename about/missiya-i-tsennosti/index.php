<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Миссия и ценности");
?>
<!-- Mission Section -->
<section class="section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-8 mx-auto text-center">
        <div class="card">
          <div class="card-body p-5">
            <i class="bi bi-bullseye" style="font-size: 4rem; color: var(--bs-primary);"></i>
            <h2 class="mt-4 mb-4">Наша миссия</h2>
            <p class="lead mb-4">Делать сложные IT-решения простыми и доступными, помогая бизнесу расти и развиваться через цифровую трансформацию</p>
            <p class="text-start">Мы верим, что современные технологии должны служить инструментом для достижения бизнес-целей, а не источником проблем. Наша задача — создавать надежные, масштабируемые и удобные решения, которые реально повышают эффективность работы компаний.</p>
            <p class="text-start">За 15 лет работы мы помогли сотням компаний оптимизировать свои бизнес-процессы, автоматизировать рутинные операции и выйти на новый уровень цифровой зрелости. Каждый наш проект — это не просто код, а решение реальных бизнес-задач.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
          <?php
          $APPLICATION->IncludeComponent(
              "bitrix:news.detail",
              "sta",
              Array(
                  "ELEMENT_ID" => "50",
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

      <div class="col-lg-6">
          <?$APPLICATION->IncludeComponent(
              "lancy:Image",
              ".default",
              [
                  "ALT" => "",
                  "COLLECTION" => "1",
                  "COLLECTION_URL" => "/upload/medialibrary/b8c/gns4ej5yta49ztnhn2ne9jqa7frwg2j4.png",
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

<section class="section">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "achievements",
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
                            "COMPONENT_TEMPLATE" => "achievements",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => [0=>"",1=>"",],
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "14",
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
                            "PAGER_TITLE" => "Новости",
                            "PARENT_SECTION" => "",
                            "PARENT_SECTION_CODE" => "",
                            "PREVIEW_TRUNCATE_LEN" => "",
                            "PROPERTY_CODE" => [0=>"UF_ICON_MODIFIER",1=>"UF_SUBTITLE"],
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                    )
            );?>
        </div>
</section>

<!-- Principles Section -->
<section class="section">
  <div class="container">
    <h2 class="section_title">Принципы работы</h2>
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <div class="step-number me-3">01</div>
              </div>
              <div>
                <h4 class="card-title">Прозрачность</h4>
                <p class="card-text">Открытое общение на всех этапах проекта. Регулярная отчетность и демонстрация промежуточных результатов. Клиент всегда в курсе происходящего.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <div class="step-number me-3">02</div>
              </div>
              <div>
                <h4 class="card-title">Гибкость</h4>
                <p class="card-text">Используем Agile-методологию для быстрой адаптации к изменениям. Готовы корректировать планы в соответствии с меняющимися потребностями бизнеса.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <div class="step-number me-3">03</div>
              </div>
              <div>
                <h4 class="card-title">Эффективность</h4>
                <p class="card-text">Оптимизируем процессы разработки для достижения максимального результата в минимальные сроки. Фокусируемся на функциях, которые приносят реальную пользу.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-start">
              <div class="flex-shrink-0">
                <div class="step-number me-3">04</div>
              </div>
              <div>
                <h4 class="card-title">Безопасность</h4>
                <p class="card-text">Соблюдаем стандарты информационной безопасности (ISO 27001). Защита данных клиентов — наш приоритет на всех этапах разработки и эксплуатации.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Culture Section -->
<section class="section bg-light">
  <div class="container">
    <h2 class="section_title">Корпоративная культура</h2>
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
          <?$APPLICATION->IncludeComponent(
                  "lancy:Image",
                  ".default",
                  [
                          "ALT" => "",
                          "COLLECTION" => "1",
                          "COLLECTION_URL" => "/upload/medialibrary/4f4/o4a0hc6ct2uyfh0bi9nxvw0kf4imgzqb.jpg",
                          "COMPONENT_TEMPLATE" => ".default",
                          "TYPE" => "MEDIA_LIBRARY",
                          "WIDTH" => "95%",
                          "HEIGHT" => ""
                  ],
                  false
          );?>
      </div>
      <div class="col-lg-6">
        <h3 class="mb-4">Как мы работаем</h3>
        <p class="lead mb-4">Создаем комфортную среду для профессионального роста и развития</p>
        <div class="mb-4">
          <h5><i class="bi bi-check-circle text-primary me-2"></i>Обучение и развитие</h5>
          <p>Регулярные тренинги, участие в конференциях, корпоративная библиотека. Компания оплачивает курсы повышения квалификации и сертификацию специалистов.</p>
        </div>
        <div class="mb-4">
          <h5><i class="bi bi-check-circle text-primary me-2"></i>Баланс работы и жизни</h5>
          <p>Гибкий график работы, возможность удаленной работы. Мы ценим личное время сотрудников и поддерживаем здоровый work-life balance.</p>
        </div>
        <div class="mb-4">
          <h5><i class="bi bi-check-circle text-primary me-2"></i>Командный дух</h5>
          <p>Регулярные тимбилдинги, корпоративные мероприятия, совместные проекты. Дружная атмосфера и взаимопомощь — основа нашей команды.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
        <div class="container">
            <?$APPLICATION->IncludeComponent(
                    "bitrix:news.list",
                    "achievements",
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
                            "COMPONENT_TEMPLATE" => "achievements",
                            "DETAIL_URL" => "",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "DISPLAY_TOP_PAGER" => "N",
                            "FIELD_CODE" => [0=>"",1=>"",],
                            "FILTER_NAME" => "",
                            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                            "IBLOCK_ID" => "15",
                            "IBLOCK_TYPE" => "site_content",
                            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                            "INCLUDE_SUBSECTIONS" => "Y",
                            "MESSAGE_404" => "",
                            "NEWS_COUNT" => "3",
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
                            "PROPERTY_CODE" => [0=>"UF_ICON_MODIFIER",1=>"UF_SUBTITLE"],
                            "SET_BROWSER_TITLE" => "Y",
                            "SET_LAST_MODIFIED" => "N",
                            "SET_META_DESCRIPTION" => "Y",
                            "SET_META_KEYWORDS" => "Y",
                            "SET_STATUS_404" => "N",
                            "SET_TITLE" => "Y",
                            "SHOW_404" => "N",
                            "SORT_BY1" => "ACTIVE_FROM",
                            "SORT_BY2" => "ID",
                            "SORT_ORDER1" => "DESC",
                            "SORT_ORDER2" => "ASC",
                            "STRICT_SECTION_CHECK" => "N"
                    )
            );?>
        </div>
</section>

<section class="section bg-light">
  <div class="container text-center">
      <?php
      $APPLICATION->IncludeComponent(
              "bitrix:news.detail",
              "sta",
              Array(
                      "ELEMENT_ID" => "51",
                      "IBLOCK_ID" => "9",
                      "IBLOCK_TYPE" => "site_content",
                      "FIELD_CODE" => [
                              0 =>"NAME",
                      ],
                      "PROPERTY_CODE" => [
                              0=>"UF_SUBTITLE",
                      ],

                      "BUTTONS_COUNT" => "2",

                    'BTN1_TEXT' => 'Вакансии',
                    'BTN1_LINK' => '/carrer/',
                    'BTN1_ICON_MODIFIER' => 'briefcase',

                    'BTN2_TEXT' => 'Связаться с нами',
                    'BTN2_LINK' => '/contacts/',
                    'BTN2_ICON_MODIFIER' => 'envelope',
              )
      );?>
  </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>