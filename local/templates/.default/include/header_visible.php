<?php B_PROLOG_INCLUDED === true || die(); ?>

<!-- Header -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-building"></i>
                <?php
                $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    [
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/local/include/header/header-company-name.php"
                    ]
                );
                ?>
            </a>
            <?php
            $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "main-navigation",
                array(
                    "ROOT_MENU_TYPE" => "top",
                    "MENU_CACHE_TYPE" => "N",
                    "MAX_LEVEL" => "2",
                    "CHILD_MENU_TYPE" => "left",
                    "USE_EXT" => "N",
                    "DELAY" => "N",
                    "ALLOW_MULTI_SELECT" => "Y",
                )
            );

            ?>
        </div>
    </nav>
</header>

<main>