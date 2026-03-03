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
        <?php
        $APPLICATION->IncludeComponent(
            "bitrix:news.detail",
            "sta",
            Array(
                "ELEMENT_ID" => "44",
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
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>