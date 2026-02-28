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

<!-- Cookie Banner -->


<!-- Header -->
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-building"></i> Компания
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.html">Главная</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            О компании
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.html">О нас</a></li>
                            <li><a class="dropdown-item" href="team.html">Команда</a></li>
                            <li><a class="dropdown-item" href="history.html">История</a></li>
                            <li><a class="dropdown-item" href="mission.html">Миссия и ценности</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="services.html">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link" href="cases.html">Кейсы</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacts.html">Контакты</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>