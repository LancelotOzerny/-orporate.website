<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?>
<!-- About Section -->
<section class="section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
          <?$APPLICATION->IncludeComponent(
	"lancy:Image", 
	".default", 
	[
		"ALT" => "",
		"COLLECTION" => "1",
		"COLLECTION_URL" => "/upload/medialibrary/4f4/o4a0hc6ct2uyfh0bi9nxvw0kf4imgzqb.jpg",
		"COMPONENT_TEMPLATE" => ".default",
		"TYPE" => "MEDIA_LIBRARY",
		"WIDTH" => "100%",
		"HEIGHT" => ""
	],
	false
);?>
      </div>
      <div class="col-lg-6">
        <h2 class="mb-4">Профессиональные IT-решения с 2010 года</h2>
        <p class="lead mb-4">Мы — команда экспертов в области разработки и внедрения цифровых решений на платформе 1С-Битрикс.</p>
        <p>За 16 лет работы мы реализовали более 500 проектов для компаний из различных отраслей: от малого бизнеса до крупных федеральных корпораций. Наша миссия — создавать технологии, которые помогают бизнесу расти и развиваться.</p>
        <p>Мы специализируемся на разработке корпоративных порталов, интернет-магазинов, интеграции с внешними системами и создании кастомных модулей. Каждый проект для нас уникален, и мы находим индивидуальный подход к каждому клиенту.</p>
      </div>
    </div>
  </div>
</section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>