<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';


echo '<pre>';
print_r(\Bitrix\Landing\Template::getList());
echo '</pre>';