<?php B_PROLOG_INCLUDED === true || die();

define('DEFAULT_TEMPLATE_PATH', '/local/templates/.default');

use Bitrix\Main\Localization\Loc;

require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/init.php';
require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/header.php';
require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/header_visible.php';
?>

<section class="section bg-primary text-white text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-lg-start">
                <h1 class="display-4 fw-bold mb-3">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/include/home/header/title.php"
                        ]
                    );
                    ?>
                </h1>
                <p class="lead mb-4">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        [
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/local/include/home/header/slogan.php"
                        ]
                    );
                    ?>
                </p>
                <div class="d-flex gap-3 justify-content-center justify-content-lg-start flex-wrap">
                    <a href="/services/" class="btn btn-light btn-lg"><?= Loc::getMessage('TEMPLATE.MAIN.HEADER.BUTTON_OUR_SERVICES') ?></a>
                    <a href="/cases/" class="btn btn-outline-light btn-lg"><?= Loc::getMessage('TEMPLATE.MAIN.HEADER.BUTTON_SHOW_CASES') ?></a>
                </div>
            </div>
            <div class="col-lg-6">
                <?$APPLICATION->IncludeComponent(
                    "lancy:Image",
                    ".default",
                    Array(
                        "ALT" => "Корпоративные порталы",
                        "COLLECTION" => "1",
                        "COLLECTION_URL" => "/upload/medialibrary/101/h48dhbdempeyfs9qsumb23kdgrfi0em2.png",
                        "COMPONENT_TEMPLATE" => ".default",
                        "TYPE" => "MEDIA_LIBRARY",
                    )
                );?>
            </div>
        </div>
    </div>
</section>