<?php B_PROLOG_INCLUDED === true || die();

/** @var CMain $APPLICATION */

define('DEFAULT_TEMPLATE_PATH', '/local/templates/.default');

require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/init.php';
require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/header.php';
require_once \Bitrix\Main\Application::getDocumentRoot() . DEFAULT_TEMPLATE_PATH . '/include/header_visible.php';
?>

<section class="page-banner">
    <div class="container">
        <h1><?php $APPLICATION->ShowTitle(); ?></h1>
    </div>
</section>