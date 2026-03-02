<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наша команда");
?>
<!-- Intro Section -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="mb-4">50+ профессионалов в сфере IT</h2>
        <p class="lead">Мы — команда опытных специалистов, увлеченных своим делом. Каждый член команды вносит свой уникальный вклад в успех наших проектов.</p>
      </div>
    </div>
  </div>
</section>

<!-- Team Filter -->
<section class="section bg-light">
  <div class="container">
    <div class="team-filters text-center mb-5">
      <button class="btn btn-outline-primary active" data-role="all">Все сотрудники</button>
      <button class="btn btn-outline-primary" data-role="management">Руководство</button>
      <button class="btn btn-outline-primary" data-role="dev">Разработка</button>
      <button class="btn btn-outline-primary" data-role="marketing">Маркетинг</button>
      <button class="btn btn-outline-primary" data-role="support">Поддержка</button>
    </div>

    <!-- Management Team -->
    <div id="management-section" class="mb-5">
      <h2 class="section_title">Руководство</h2>
      <div class="row g-4">
        <div class="col-md-4 team-card" data-role="management">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop" alt="Александр Петров" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Александр Петров</h3>
              <p class="text-muted mb-2">Генеральный директор</p>
              <p class="card-text">Основатель компании, эксперт в области цифровой трансформации с 20-летним опытом в IT-индустрии</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="management">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" alt="Елена Смирнова" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Елена Смирнова</h3>
              <p class="text-muted mb-2">Технический директор</p>
              <p class="card-text">Архитектор сложных IT-решений, сертифицированный специалист по 1С-Битрикс с опытом 15+ лет</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="management">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop" alt="Михаил Соколов" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Михаил Соколов</h3>
              <p class="text-muted mb-2">Коммерческий директор</p>
              <p class="card-text">Эксперт в области развития бизнеса и стратегического партнерства, MBA</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Development Team -->
    <div id="dev-section" class="mb-5">
      <h2 class="section_title">Отдел разработки</h2>
      <div class="row g-4">
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop" alt="Иван Иванов" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Иван Иванов</h3>
              <p class="text-muted mb-2">Senior Bitrix Developer</p>
              <p class="card-text">10+ лет опыта разработки на 1С-Битрикс, архитектор сложных корпоративных решений</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop" alt="Мария Петрова" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Мария Петрова</h3>
              <p class="text-muted mb-2">Frontend Developer</p>
              <p class="card-text">Специалист по адаптивной верстке и интеграции с Битрикс-компонентами, Vue.js эксперт</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop" alt="Дмитрий Новиков" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Дмитрий Новиков</h3>
              <p class="text-muted mb-2">Backend Developer</p>
              <p class="card-text">Специалист по интеграциям и разработке REST API, эксперт PHP и MySQL</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop" alt="Сергей Васильев" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Сергей Васильев</h3>
              <p class="text-muted mb-2">Full Stack Developer</p>
              <p class="card-text">Универсальный разработчик с опытом в frontend и backend разработке</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=400&h=400&fit=crop" alt="Андрей Козлов" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Андрей Козлов</h3>
              <p class="text-muted mb-2">DevOps Engineer</p>
              <p class="card-text">Специалист по автоматизации развертывания и поддержке инфраструктуры</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="dev">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1463453091185-61582044d556?w=400&h=400&fit=crop" alt="Павел Морозов" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Павел Морозов</h3>
              <p class="text-muted mb-2">QA Engineer</p>
              <p class="card-text">Специалист по тестированию и обеспечению качества программного обеспечения</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-github"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Marketing Team -->
    <div id="marketing-section" class="mb-5">
      <h2 class="section_title">Отдел маркетинга</h2>
      <div class="row g-4">
        <div class="col-md-4 team-card" data-role="marketing">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop" alt="Алексей Сидоров" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Алексей Сидоров</h3>
              <p class="text-muted mb-2">Marketing Manager</p>
              <p class="card-text">Эксперт по цифровому маркетингу и продвижению веб-проектов, SEO специалист</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="marketing">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop" alt="Ольга Васильева" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Ольга Васильева</h3>
              <p class="text-muted mb-2">Content Manager</p>
              <p class="card-text">Контент-менеджер и специалист по SEO-оптимизации, копирайтер</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="marketing">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=400&h=400&fit=crop" alt="Анна Королева" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Анна Королева</h3>
              <p class="text-muted mb-2">SMM Manager</p>
              <p class="card-text">Специалист по продвижению в социальных сетях и управлению сообществами</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Support Team -->
    <div id="support-section">
      <h2 class="section_title">Отдел поддержки</h2>
      <div class="row g-4">
        <div class="col-md-4 team-card" data-role="support">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop" alt="Елена Козлова" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Елена Козлова</h3>
              <p class="text-muted mb-2">Support Manager</p>
              <p class="card-text">Руководитель отдела технической поддержки клиентов, 8+ лет опыта</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="support">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=400&fit=crop" alt="Татьяна Романова" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Татьяна Романова</h3>
              <p class="text-muted mb-2">Technical Support Specialist</p>
              <p class="card-text">Специалист технической поддержки первой линии, эксперт по Битрикс24</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 team-card" data-role="support">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&h=400&fit=crop" alt="Наталья Федорова" class="card-img-top">
            <div class="card-body text-center">
              <h3 class="card-title">Наталья Федорова</h3>
              <p class="text-muted mb-2">Customer Success Manager</p>
              <p class="card-text">Менеджер по работе с клиентами и обеспечению их успеха</p>
              <div class="mt-3">
                <a href="#" class="text-primary me-3"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-envelope"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-telegram"></i></a>
              </div>
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
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-lightbulb card-icon"></i>
            <h3 class="card-title">Обучение и развитие</h3>
            <p class="card-text">Регулярные тренинги, конференции и курсы повышения квалификации за счет компании</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-people card-icon"></i>
            <h3 class="card-title">Командная работа</h3>
            <p class="card-text">Дружная атмосфера, корпоративные мероприятия и тимбилдинги</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100">
          <div class="card-body text-center">
            <i class="bi bi-house card-icon"></i>
            <h3 class="card-title">Гибкий график</h3>
            <p class="card-text">Возможность удаленной работы и гибкое начало рабочего дня</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section">
  <div class="container text-center">
    <h2 class="mb-4">Хотите присоединиться к нашей команде?</h2>
    <p class="lead mb-4">Мы всегда рады талантливым специалистам</p>
    <a href="index.html#career" class="btn btn-primary btn-lg">Посмотреть вакансии</a>
  </div>
</section>


<script>
    // Team filtering
    $(document).ready(function() {
      $('.team-filters .btn').click(function() {
        $('.team-filters .btn').removeClass('active');
        $(this).addClass('active');
        
        const filter = $(this).data('role');
        
        if (filter === 'all') {
          $('.team-card').fadeIn(400);
          $('#management-section, #dev-section, #marketing-section, #support-section').show();
        } else {
          $('.team-card').hide();
          $('#management-section, #dev-section, #marketing-section, #support-section').hide();
          $(`.team-card[data-role="${filter}"]`).fadeIn(400);
          
          // Show relevant section title
          if (filter === 'management') $('#management-section').show();
          if (filter === 'dev') $('#dev-section').show();
          if (filter === 'marketing') $('#marketing-section').show();
          if (filter === 'support') $('#support-section').show();
        }
      });
    });
  </script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>