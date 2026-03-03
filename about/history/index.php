<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("История компании");
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

    <!-- Timeline Section -->
    <section class="section bg-light">
      <div class="container">
        <h2 class="section_title">Основные вехи</h2>
        <div class="timeline">
          <!-- 2011 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="timeline-year">2011</div>
                  <h3>Основание компании</h3>
                  <p>Александр Петров основал компанию в Ростове-на-Дону. Первый офис — небольшое помещение на 3 человека. Первый проект — корпоративный сайт для местной производственной компании.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>3 сотрудника в команде</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Первые 5 клиентов</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Фокус на малый бизнес</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" alt="2011" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2013 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                  <div class="timeline-year">2013</div>
                  <h3>Первая сертификация 1С-Битрикс</h3>
                  <p>Получили статус сертифицированного партнера 1С-Битрикс. Команда выросла до 10 человек. Реализовали первый крупный корпоративный портал для федеральной компании.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Статус партнера Битрикс</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>10 сотрудников</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Выход на федеральный уровень</li>
                  </ul>
                </div>
                <div class="col-md-6 order-md-1">
                  <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop" alt="2013" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2015 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="timeline-year">2015</div>
                  <h3>Расширение географии</h3>
                  <p>Открыли представительство в Москве. Начали работу с клиентами из других регионов России. Запустили собственную линейку готовых решений для автоматизации бизнеса.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Офис в Москве</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>25 сотрудников</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>50+ реализованных проектов</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop" alt="2015" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2017 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                  <div class="timeline-year">2017</div>
                  <h3>Премия «Лучший интегратор года»</h3>
                  <p>Получили награду от 1С-Битрикс как «Лучший интегратор года» в ЮФО. Реализовали более 100 проектов. Внедрили систему круглосуточной технической поддержки.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Премия «Лучший интегратор»</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>100+ завершенных проектов</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Техподдержка 24/7</li>
                  </ul>
                </div>
                <div class="col-md-6 order-md-1">
                  <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="2017" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2019 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="timeline-year">2019</div>
                  <h3>Запуск облачных решений</h3>
                  <p>Начали разработку и внедрение облачных корпоративных порталов. Получили сертификацию по информационной безопасности ISO 27001. Команда достигла 40 специалистов.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Облачные решения</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Сертификат ISO 27001</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>40 сотрудников</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=400&fit=crop" alt="2019" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2021 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                  <div class="timeline-year">2021</div>
                  <h3>Инновации и интеграции</h3>
                  <p>Внедрили AI-решения для автоматизации бизнес-процессов. Начали интеграцию с популярными CRM и ERP-системами. Запустили программу обучения для клиентов.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>AI-технологии</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Интеграции с CRM/ERP</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Учебный центр для клиентов</li>
                  </ul>
                </div>
                <div class="col-md-6 order-md-1">
                  <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=600&h=400&fit=crop" alt="2021" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2023 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6">
                  <div class="timeline-year">2023</div>
                  <h3>Топ-10 интеграторов России</h3>
                  <p>Вошли в топ-10 крупнейших интеграторов корпоративных решений в России по версии РБК. Реализовали более 500 проектов. Открыли собственный R&amp;D центр.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Топ-10 интеграторов РФ</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>500+ проектов</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>R&amp;D центр</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?w=600&h=400&fit=crop" alt="2023" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>

          <!-- 2026 -->
          <div class="timeline-item">
            <div class="timeline-marker"></div>
            <div class="timeline-content">
              <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                  <div class="timeline-year">2026</div>
                  <h3>Сегодня</h3>
                  <p>Команда из 50+ специалистов. Лидер рынка корпоративных IT-решений в ЮФО. Работаем с крупнейшими компаниями России. Развиваем собственные инновационные продукты.</p>
                  <ul class="list-unstyled">
                    <li><i class="bi bi-check-circle text-primary me-2"></i>50+ профессионалов</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Лидер рынка в ЮФО</li>
                    <li><i class="bi bi-check-circle text-primary me-2"></i>Собственные продукты</li>
                  </ul>
                </div>
                <div class="col-md-6 order-md-1">
                  <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" alt="2026" class="img-fluid rounded shadow">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Наши достижения</h2>

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

    <!-- Mission Section -->
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

    <!-- Future Section -->
    <section class="section bg-light">
      <div class="container">
        <h2 class="section_title">Планы на будущее</h2>

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

    <!-- CTA Section -->
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