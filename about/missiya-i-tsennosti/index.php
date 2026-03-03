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

    <!-- Values Section -->
    <section class="section bg-light">
      <div class="container">
        <h2 class="section_title">Наши ценности</h2>
        <p class="text-center lead mb-5">Принципы, которыми мы руководствуемся в работе</p>
        
        <div class="row g-4">
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-heart card-icon text-danger"></i>
                <h3 class="card-title">Клиентоориентированность</h3>
                <p class="card-text">Успех наших клиентов — наш главный приоритет. Мы строим долгосрочные партнерские отношения, основанные на доверии и взаимопонимании. Всегда на связи и готовы помочь в любой ситуации.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-star card-icon text-warning"></i>
                <h3 class="card-title">Качество</h3>
                <p class="card-text">Высокие стандарты во всем: от кода до коммуникации. Каждый проект проходит тщательное тестирование и code review. Мы гордимся качеством нашей работы и гарантируем надежность решений.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-rocket card-icon text-primary"></i>
                <h3 class="card-title">Инновации</h3>
                <p class="card-text">Мы постоянно изучаем новые технологии и внедряем лучшие практики в наши проекты. Собственный R&amp;D центр позволяет нам быть на шаг впереди и предлагать передовые решения.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-shield-check card-icon text-success"></i>
                <h3 class="card-title">Ответственность</h3>
                <p class="card-text">Мы берем на себя ответственность за результат и выполняем взятые обязательства. Каждый проект для нас — это репутация компании. Гарантируем соблюдение сроков и качество исполнения.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-people card-icon text-info"></i>
                <h3 class="card-title">Командная работа</h3>
                <p class="card-text">Успех проекта — результат слаженной работы всей команды: разработчиков, дизайнеров, менеджеров. Мы ценим вклад каждого специалиста и поддерживаем дружественную атмосферу.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightbulb card-icon text-warning"></i>
                <h3 class="card-title">Развитие</h3>
                <p class="card-text">Мы инвестируем в обучение команды и постоянно повышаем профессиональный уровень. Регулярные тренинги, конференции и курсы — часть нашей корпоративной культуры.</p>
              </div>
            </div>
          </div>
        </div>
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

    <!-- Social Responsibility Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Социальная ответственность</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-book card-icon text-primary"></i>
                <h3 class="card-title">Образование</h3>
                <p class="card-text">Проводим бесплатные курсы и вебинары для начинающих разработчиков. Сотрудничаем с ВУЗами и предоставляем места для стажировки студентов.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-tree card-icon text-success"></i>
                <h3 class="card-title">Экология</h3>
                <p class="card-text">Используем энергоэффективное оборудование, минимизируем бумажный документооборот. Поддерживаем экологические инициативы и озеленение города.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card h-100">
              <div class="card-body text-center">
                <i class="bi bi-heart-pulse card-icon text-danger"></i>
                <h3 class="card-title">Благотворительность</h3>
                <p class="card-text">Участвуем в благотворительных проектах, оказываем бесплатную IT-помощь некоммерческим организациям и социальным учреждениям.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
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