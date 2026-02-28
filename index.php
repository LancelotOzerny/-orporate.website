<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

/** @var CMain $APPLICATION */

$APPLICATION->SetTitle("Главная - Корпоративный портал");
?>

    <main class="main">
        <!-- Hero Section -->
        <section class="section bg-primary text-white text-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 text-lg-start">
                        <h1 class="display-4 fw-bold mb-3">Лидер в корпоративных IT‑решениях</h1>
                        <p class="lead mb-4">Создаем удобные и надежные решения для бизнеса на платформе 1С‑Битрикс и не только.</p>
                        <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                            <a href="services.html" class="btn btn-light btn-lg">Наши услуги</a>
                            <a href="cases.html" class="btn btn-outline-light btn-lg">Посмотреть кейсы</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Изображение-заглушка для главной (не Unsplash, а простой placeholder) -->
                        <img src="https://placehold.co/600x400/0d6efd/ffffff?text=Корпоративные+порталы" alt="Корпоративные порталы и сайты" class="img-fluid rounded hero-image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Статистика (цифры компании) -->
        <section class="section bg-light">
            <div class="container">
                <h2 class="section_title">Компания в цифрах</h2>
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">15</div>
                            <div class="stat-label">Лет на рынке</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Проектов реализовано</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">300+</div>
                            <div class="stat-label">Довольных клиентов</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="stat-card">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Специалистов в команде</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Преимущества -->
        <section class="section">
            <div class="container">
                <h2 class="section_title">Почему клиенты выбирают нас</h2>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-award card-icon"></i>
                                <h3 class="card-title">Экспертиза</h3>
                                <p class="card-text">15 лет опыта в разработке корпоративных порталов на 1С‑Битрикс.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-shield-check card-icon"></i>
                                <h3 class="card-title">Безопасность</h3>
                                <p class="card-text">Сертификация ISO 27001 и поддержка 24/7 для клиентов.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body text-center">
                                <i class="bi bi-rocket card-icon"></i>
                                <h3 class="card-title">Инновации</h3>
                                <p class="card-text">Использование облачных решений, AI‑интеграций и R&D‑центра.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Блок "Команда" -->
        <section class="section bg-light" id="team">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="https://placehold.co/500x400/6c757d/ffffff?text=Команда+специалистов" alt="Наши специалисты" class="img-fluid rounded shadow">
                    </div>
                    <div class="col-lg-6">
                        <h2 class="mb-4">Команда профессионалов</h2>
                        <p class="lead mb-4">50+ специалистов, увлеченных своим делом.</p>
                        <p>В нашей команде работают опытные разработчики, дизайнеры, аналитики и менеджеры проектов. Средний опыт специалистов — 12 лет. Мы постоянно развиваемся, проходим обучение и получаем сертификаты.</p>
                        <a href="team.html" class="btn btn-primary mt-3">Познакомиться с командой</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Кейсы -->
        <section class="section">
            <div class="container">
                <h2 class="section_title">Наши кейсы</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="https://placehold.co/400x250/0d6efd/ffffff?text=Корпоративный+портал" class="card-img-top" alt="Корпоративный портал">
                            <div class="card-body">
                                <h4 class="card-title">Корпоративный портал для промышленного холдинга</h4>
                                <p class="card-text">Объединили workflow, CRM и ERP‑системы в единую платформу.</p>
                                <a href="cases.html" class="btn btn-outline-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="https://placehold.co/400x250/198754/ffffff?text=Интернет-магазин" class="card-img-top" alt="Интернет‑магазин">
                            <div class="card-body">
                                <h4 class="card-title">E‑commerce платформа B2B</h4>
                                <p class="card-text">Масштабируемый интернет‑магазин с интеграцией 1С.</p>
                                <a href="cases.html" class="btn btn-outline-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="https://placehold.co/400x250/dc3545/ffffff?text=Облачный+портал" class="card-img-top" alt="Облачный корпоративный портал">
                            <div class="card-body">
                                <h4 class="card-title">Облачный корпоративный портал</h4>
                                <p class="card-text">Полный переход клиента в облако с SLA 99,9%.</p>
                                <a href="cases.html" class="btn btn-outline-primary">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Кратко о миссии -->
        <section class="section bg-light" id="mission">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="mb-4">Наша миссия</h2>
                        <p class="lead mb-4">Делать сложные IT‑решения простыми и доступными.</p>
                        <p>Мы считаем, что технологии должны помогать бизнесу развиваться, а не мешать. Наша цель — создавать удобные, надежные и масштабируемые решения для наших клиентов.</p>
                        <a href="mission.html" class="btn btn-primary mt-3">Подробнее о ценностях</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="section">
            <div class="container text-center">
                <h2 class="mb-4">Готовы начать проект?</h2>
                <p class="lead mb-4">Свяжитесь с нами для консультации без обязательств.</p>
                <div class="d-flex gap-3 justify-content-center flex-wrap">
                    <a href="contacts.html" class="btn btn-primary btn-lg">
                        <i class="bi bi-envelope me-2"></i>Связаться с нами
                    </a>
                    <a href="services.html" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-list me-2"></i>Услуги и цены
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>