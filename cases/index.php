<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Кейсы");
?>
    <!-- Intro Section -->
    <section class="section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="mb-4">500+ успешных проектов</h2>
            <p class="lead">Мы реализовали проекты для компаний из различных отраслей: от малого бизнеса до крупных федеральных корпораций. Каждый проект уникален и решает конкретные задачи бизнеса.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Filter Section -->
    <section class="section bg-light">
      <div class="container">
        <div class="text-center mb-5">
          <button class="btn btn-outline-primary m-2 case-filter active" data-filter="all">Все проекты</button>
          <button class="btn btn-outline-primary m-2 case-filter" data-filter="portal">Корпоративные порталы</button>
          <button class="btn btn-outline-primary m-2 case-filter" data-filter="ecommerce">E-commerce</button>
          <button class="btn btn-outline-primary m-2 case-filter" data-filter="integration">Интеграции</button>
          <button class="btn btn-outline-primary m-2 case-filter" data-filter="website">Сайты</button>
        </div>

        <!-- Cases Grid -->
        <div class="row g-4" id="cases-grid">
          <!-- Case 1 -->
          <div class="col-lg-6 case-item" data-category="portal">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop" alt="Корпоративный портал" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-primary mb-3">Корпоративный портал</span>
                <h3 class="card-title">Корпоративный портал для производственной компании</h3>
                <p class="card-text">Разработали комплексное решение для управления производством с интеграцией 1С, системой документооборота и модулем планирования проектов.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Ускорение бизнес-процессов на 40%</li>
                    <li>Сокращение времени на документооборот в 3 раза</li>
                    <li>Повышение прозрачности управления</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">1С‑Битрикс</span>
                  <span class="tech-badge">PHP</span>
                  <span class="tech-badge">JavaScript</span>
                  <span class="tech-badge">REST API</span>
                  <span class="tech-badge">1С интеграция</span>
                </div>
                <a href="#case-modal-1" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 2 -->
          <div class="col-lg-6 case-item" data-category="ecommerce">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&h=400&fit=crop" alt="Интернет-магазин" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-success mb-3">E-commerce</span>
                <h3 class="card-title">Интернет‑магазин для сети ритейла</h3>
                <p class="card-text">Создали высоконагруженный интернет‑магазин с интеграцией складской системы, онлайн‑оплатой и программой лояльности на 50 000+ товаров.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Рост онлайн-продаж на 250%</li>
                    <li>Средний чек увеличился на 35%</li>
                    <li>Конверсия выросла с 1.2% до 3.8%</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">1С‑Битрикс</span>
                  <span class="tech-badge">Vue.js</span>
                  <span class="tech-badge">Redis</span>
                  <span class="tech-badge">Payment API</span>
                  <span class="tech-badge">Elasticsearch</span>
                </div>
                <a href="#case-modal-2" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 3 -->
          <div class="col-lg-6 case-item" data-category="portal">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=600&h=400&fit=crop" alt="Образовательная платформа" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-primary mb-3">Корпоративный портал</span>
                <h3 class="card-title">Образовательная платформа для корпоративного обучения</h3>
                <p class="card-text">Внедрили систему дистанционного обучения с трекингом прогресса, тестированием, видеоконференциями и выдачей сертификатов для 2000+ сотрудников.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Обучено 2000+ сотрудников</li>
                    <li>Экономия на оффлайн-обучении 15 млн ₽/год</li>
                    <li>Повышение квалификации персонала на 60%</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">Bitrix24</span>
                  <span class="tech-badge">Learning Portal</span>
                  <span class="tech-badge">Video Streaming</span>
                  <span class="tech-badge">SCORM</span>
                </div>
                <a href="#case-modal-3" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 4 -->
          <div class="col-lg-6 case-item" data-category="integration">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop" alt="CRM система" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-warning text-dark mb-3">Интеграция</span>
                <h3 class="card-title">CRM‑система для сети автосалонов</h3>
                <p class="card-text">Разработали специализированную CRM с модулями учета автомобилей, управления сделками, аналитикой продаж и интеграцией с банками для автокредитования.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Увеличение продаж на 45%</li>
                    <li>Сокращение цикла сделки на 30%</li>
                    <li>Прозрачность всех этапов работы с клиентом</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">Bitrix24</span>
                  <span class="tech-badge">Custom Modules</span>
                  <span class="tech-badge">Analytics</span>
                  <span class="tech-badge">Bank API</span>
                </div>
                <a href="#case-modal-4" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 5 -->
          <div class="col-lg-6 case-item" data-category="website">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop" alt="Корпоративный сайт" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-info mb-3">Корпоративный сайт</span>
                <h3 class="card-title">Многоязычный сайт для международной компании</h3>
                <p class="card-text">Создали корпоративный сайт с поддержкой 5 языков, личным кабинетом партнеров, каталогом продукции и интеграцией с корпоративной CRM.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Посещаемость выросла на 180%</li>
                    <li>Количество лидов увеличилось в 2.5 раза</li>
                    <li>Автоматизация работы с партнерами</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">1С‑Битрикс</span>
                  <span class="tech-badge">Multilanguage</span>
                  <span class="tech-badge">REST API</span>
                  <span class="tech-badge">SEO</span>
                </div>
                <a href="#case-modal-5" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 6 -->
          <div class="col-lg-6 case-item" data-category="ecommerce">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1607082348824-0a96f2a4b9da?w=600&h=400&fit=crop" alt="Маркетплейс" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-success mb-3">E-commerce</span>
                <h3 class="card-title">B2B‑маркетплейс для оптовых поставщиков</h3>
                <p class="card-text">Разработали платформу для оптовой торговли с личными кабинетами для поставщиков и покупателей, системой ценообразования и интеграцией с логистикой.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>350+ активных поставщиков</li>
                    <li>2000+ компаний-покупателей</li>
                    <li>Оборот 500 млн ₽ за первый год</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">1С‑Битрикс</span>
                  <span class="tech-badge">B2B</span>
                  <span class="tech-badge">Marketplace</span>
                  <span class="tech-badge">Integration</span>
                </div>
                <a href="#case-modal-6" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 7 -->
          <div class="col-lg-6 case-item" data-category="integration">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop" alt="Интеграция систем" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-warning text-dark mb-3">Интеграция</span>
                <h3 class="card-title">Интеграция корпоративного портала с внешними сервисами</h3>
                <p class="card-text">Интегрировали Битрикс24 с 1С, AmoCRM, IP-телефонией, системой электронного документооборота и сервисами доставки для логистической компании.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>Полная автоматизация процессов</li>
                    <li>Сокращение ручной работы на 70%</li>
                    <li>Единое информационное пространство</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">Bitrix24</span>
                  <span class="tech-badge">1С</span>
                  <span class="tech-badge">AmoCRM</span>
                  <span class="tech-badge">Asterisk</span>
                  <span class="tech-badge">СДЭК API</span>
                </div>
                <a href="#case-modal-7" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>

          <!-- Case 8 -->
          <div class="col-lg-6 case-item" data-category="portal">
            <div class="card h-100">
              <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=600&h=400&fit=crop" alt="Портал для медицины" class="card-img-top">
              <div class="card-body">
                <span class="badge bg-primary mb-3">Корпоративный портал</span>
                <h3 class="card-title">Информационный портал для сети медицинских центров</h3>
                <p class="card-text">Создали портал с записью на прием, личным кабинетом пациента, электронной медицинской картой и интеграцией с медицинским оборудованием.</p>
                <div class="mb-3">
                  <strong>Результаты:</strong>
                  <ul class="mt-2">
                    <li>50 000+ записей онлайн за месяц</li>
                    <li>Снижение нагрузки на call-центр на 60%</li>
                    <li>Повышение лояльности пациентов</li>
                  </ul>
                </div>
                <div class="mb-3">
                  <span class="tech-badge">1С‑Битрикс</span>
                  <span class="tech-badge">Healthcare</span>
                  <span class="tech-badge">Integration</span>
                  <span class="tech-badge">Security</span>
                </div>
                <a href="#case-modal-8" class="btn btn-outline-primary" data-bs-toggle="modal">Подробнее</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Stats Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Статистика проектов</h2>
        <div class="row g-4">
          <div class="col-md-3 col-sm-6">
            <div class="stat-card">
              <div class="stat-number">500+</div>
              <div class="stat-label">Реализованных проектов</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="stat-card">
              <div class="stat-number">200+</div>
              <div class="stat-label">Довольных клиентов</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="stat-card">
              <div class="stat-number">98%</div>
              <div class="stat-label">Успешных запусков</div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="stat-card">
              <div class="stat-number">16+</div>
              <div class="stat-label">Лет опыта</div>
            </div>
          </div>
        </div>
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
        <h2 class="mb-4">Хотите такой же успешный проект?</h2>
        <p class="lead mb-4">Обсудим вашу задачу и предложим оптимальное решение</p>
        <a href="index.html#contacts" class="btn btn-primary btn-lg">Связаться с нами</a>
      </div>
    </section>

  <script>
    // Case filtering
    $(document).ready(function() {
      $('.case-filter').click(function() {
        $('.case-filter').removeClass('active');
        $(this).addClass('active');
        
        const filter = $(this).data('filter');
        
        if (filter === 'all') {
          $('.case-item').fadeIn(400);
        } else {
          $('.case-item').fadeOut(400);
          $(`.case-item[data-category="${filter}"]`).fadeIn(400);
        }
      });
    });
  </script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>