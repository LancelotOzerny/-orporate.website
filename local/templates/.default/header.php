<?php
B_PROLOG_INCLUDED === true || die();

/** @var CMain $APPLICATION */

require_once \Bitrix\Main\Application::getDocumentRoot() . '/' . SITE_TEMPLATE_PATH . '/include/init.php';
?>

<!DOCTYPE html>
<html lang="<?= LANGUAGE_ID ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?php $APPLICATION->ShowHead(); ?>
</head>
<body>
<?php $APPLICATION->ShowPanel(); ?>

<?php
    $APPLICATION->IncludeComponent('lancy:cookie.accept', 'corporate-default', []);
?>

<!-- Header -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-building"></i> Компания
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
                     "DELAY" => "N"
                 )
             );

            ?>
        </div>
    </nav>
</header>