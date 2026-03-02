<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <!-- Contact Info Section -->
    <section class="section">
      <div class="container">
        <div class="row g-4 mb-5">
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center">
              <div class="card-body">
                <i class="bi bi-geo-alt card-icon"></i>
                <h3 class="card-title">Наш офис</h3>
                <p class="card-text">344000, Ростов‑на‑Дону<br>ул. Примерная, д. 1, оф. 101</p>
                <a href="https://yandex.ru/maps" target="_blank" class="btn btn-outline-primary">Показать на карте</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center">
              <div class="card-body">
                <i class="bi bi-telephone card-icon"></i>
                <h3 class="card-title">Телефон</h3>
                <p class="card-text">
                  <a href="tel:+79991234567" class="text-decoration-none">+7 (999) 123‑45‑67</a><br>
                  <small class="text-muted">Пн‑Пт 9:00‑18:00</small>
                </p>
                <a href="tel:+79991234567" class="btn btn-outline-primary">Позвонить</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="card h-100 text-center">
              <div class="card-body">
                <i class="bi bi-envelope card-icon"></i>
                <h3 class="card-title">Email</h3>
                <p class="card-text">
                  <a href="mailto:info@company.com" class="text-decoration-none">info@company.com</a><br>
                  <small class="text-muted">Ответим в течение 1 часа</small>
                </p>
                <a href="mailto:info@company.com" class="btn btn-outline-primary">Написать</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Form Section -->
    <section class="section bg-light">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6">
            <h2 class="mb-4">Отправьте нам сообщение</h2>
            <p class="lead mb-4">Заполните форму, и мы свяжемся с вами в течение 1 часа в рабочее время</p>
            
            <div class="card">
              <div class="card-body p-4">
                <form class="form-contact">
                  <div class="mb-3">
                    <label class="form-label">Ваше имя *</label>
                    <input type="text" class="form-control" placeholder="Иван Иванов" required>
                    <div class="form-error d-none">Заполните это поле</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" placeholder="ivan@example.com" required>
                    <div class="form-error d-none">Введите корректный email</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Телефон *</label>
                    <input type="tel" class="form-control" placeholder="+7 (999) 123-45-67" required>
                    <div class="form-error d-none">Введите корректный телефон</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Тема обращения</label>
                    <select class="form-control">
                      <option value="">Выберите тему</option>
                      <option>Разработка сайта</option>
                      <option>Корпоративный портал</option>
                      <option>Интеграции</option>
                      <option>Техническая поддержка</option>
                      <option>Консультация</option>
                      <option>Другое</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Сообщение *</label>
                    <textarea class="form-control" rows="5" placeholder="Опишите вашу задачу или вопрос..." required></textarea>
                    <div class="form-error d-none">Заполните это поле</div>
                  </div>
                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="agreeContact" required>
                    <label class="form-check-label" for="agreeContact">
                      Согласен с <a href="#privacy">политикой конфиденциальности</a>
                    </label>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 btn-lg">Отправить сообщение</button>
                  <div class="form-success d-none mt-3">Спасибо! Ваше сообщение отправлено. Мы свяжемся с вами в ближайшее время.</div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <h2 class="mb-4">Дополнительная информация</h2>
            
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-clock text-primary me-2"></i>Режим работы</h4>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><strong>Понедельник — Пятница:</strong> 9:00 — 18:00</li>
                  <li class="mb-2"><strong>Суббота — Воскресенье:</strong> Выходной</li>
                  <li class="mb-2"><strong>Техподдержка:</strong> 24/7 для клиентов с договором</li>
                </ul>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-building text-primary me-2"></i>Реквизиты</h4>
                <ul class="list-unstyled mb-0">
                  <li class="mb-2"><strong>ООО "Компания"</strong></li>
                  <li class="mb-2">ИНН: 1234567890</li>
                  <li class="mb-2">КПП: 123456789</li>
                  <li class="mb-2">ОГРН: 1234567890123</li>
                  <li class="mb-2">Юр. адрес: 344000, Ростов-на-Дону, ул. Примерная, д. 1</li>
                </ul>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-share text-primary me-2"></i>Мы в соцсетях</h4>
                <div class="d-flex gap-3 mt-3">
                  <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-telegram"></i>
                  </a>
                  <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-vk"></i>
                  </a>
                  <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-youtube"></i>
                  </a>
                  <a href="#" class="btn btn-outline-primary btn-lg">
                    <i class="bi bi-linkedin"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Map Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Как нас найти</h2>
        <div class="row">
          <div class="col-12">
              <?$APPLICATION->IncludeComponent(
                      "bitrix:map.yandex.view",
                      ".default",
                      [
                              "API_KEY" => "",
                              "CONTROLS" => [
                                      0 => "ZOOM",
                                      1 => "MINIMAP",
                                      2 => "TYPECONTROL",
                                      3 => "SCALELINE",
                              ],
                              "INIT_MAP_TYPE" => "MAP",
                              "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:47.222535116975116;s:10:\"yandex_lon\";d:39.71756949589596;s:12:\"yandex_scale\";i:18;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:39.71828832791195;s:3:\"LAT\";d:47.22266850912881;s:4:\"TEXT\";s:16:\"Наш офис!\";}}}",
                              "MAP_HEIGHT" => "500",
                              "MAP_ID" => "39 ",
                              "MAP_WIDTH" => "100%",
                              "OPTIONS" => [
                                      0 => "ENABLE_SCROLL_ZOOM",
                                      1 => "ENABLE_DBLCLICK_ZOOM",
                                      2 => "ENABLE_DRAGGING",
                              ],
                              "COMPONENT_TEMPLATE" => ".default"
                      ],
                      false
              );?>
            <div class="mt-4 text-center">
              <p class="lead mb-3">Наш офис находится в центре Ростова-на-Дону</p>
              <p class="text-muted">
                <i class="bi bi-car-front me-2"></i>Парковка для посетителей<br>
                <i class="bi bi-cup-hot me-2"></i>Кофе и чай для гостей<br>
                <i class="bi bi-wifi me-2"></i>Бесплатный Wi-Fi
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Offices Section -->
    <section class="section bg-light">
      <div class="container">
        <h2 class="section_title">Наши офисы</h2>
        <div class="row g-4">
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <h3 class="card-title">Ростов-на-Дону (Головной офис)</h3>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>344000, ул. Примерная, д. 1, оф. 101</li>
                  <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i><a href="tel:+79991234567">+7 (999) 123-45-67</a></li>
                  <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i><a href="mailto:rostov@company.com">rostov@company.com</a></li>
                  <li class="mb-2"><i class="bi bi-clock text-primary me-2"></i>Пн-Пт 9:00-18:00</li>
                </ul>
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=300&fit=crop" alt="Офис в Ростове" class="img-fluid rounded mt-3">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card h-100">
              <div class="card-body">
                <h3 class="card-title">Москва (Представительство)</h3>
                <ul class="list-unstyled">
                  <li class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>119021, Москва, ул. Тестовая, д. 10</li>
                  <li class="mb-2"><i class="bi bi-telephone text-primary me-2"></i><a href="tel:+74951234567">+7 (495) 123-45-67</a></li>
                  <li class="mb-2"><i class="bi bi-envelope text-primary me-2"></i><a href="mailto:moscow@company.com">moscow@company.com</a></li>
                  <li class="mb-2"><i class="bi bi-clock text-primary me-2"></i>Пн-Пт 9:00-18:00</li>
                </ul>
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=300&fit=crop" alt="Офис в Москве" class="img-fluid rounded mt-3">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="section">
      <div class="container">
        <h2 class="section_title">Часто задаваемые вопросы</h2>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="accordion" id="contactFaq">
              <div class="accordion-item mb-3">
                <h3 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    Как быстро вы отвечаете на обращения?
                  </button>
                </h3>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFaq">
                  <div class="accordion-body">
                    Мы стараемся ответить на все обращения в течение 1 часа в рабочее время (Пн-Пт 9:00-18:00). Обращения, полученные в нерабочее время, обрабатываются на следующий рабочий день.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    Можно ли приехать в офис без предварительной записи?
                  </button>
                </h3>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                  <div class="accordion-body">
                    Для вашего удобства рекомендуем предварительно согласовать встречу по телефону или email. Так мы сможем подготовиться к встрече и уделить вам максимум внимания.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    Работаете ли вы с регионами?
                  </button>
                </h3>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                  <div class="accordion-body">
                    Да, мы успешно работаем с клиентами по всей России и странам СНГ. Все коммуникации проходят онлайн через видеоконференции, email и мессенджеры.
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    Предоставляете ли вы бесплатную консультацию?
                  </button>
                </h3>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#contactFaq">
                  <div class="accordion-body">
                    Да, первичная консультация по вашему проекту абсолютно бесплатна. Мы оценим задачу, предложим решения и рассчитаем стоимость работ.
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="section bg-light">
      <div class="container text-center">
        <h2 class="mb-4">Готовы обсудить ваш проект?</h2>
        <p class="lead mb-4">Свяжитесь с нами удобным способом</p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="tel:+79991234567" class="btn btn-primary btn-lg">
            <i class="bi bi-telephone me-2"></i>Позвонить
          </a>
          <a href="mailto:info@company.com" class="btn btn-outline-primary btn-lg">
            <i class="bi bi-envelope me-2"></i>Написать email
          </a>
          <a href="#" class="btn btn-outline-primary btn-lg">
            <i class="bi bi-telegram me-2"></i>Telegram
          </a>
        </div>
      </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>