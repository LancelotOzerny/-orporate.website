<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arResult */
/** @var array $arParams */

if (empty($arResult))
{
    return;
}

$depth = $prevDepth = 0;
?>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ms-auto">
<?php
foreach ($arResult as $item)
{
    $text = $item['TEXT'];
    $url = $item['LINK'];
    $strActiveClass = $item['SELECTED'] ? 'active' : '';
    $depth = $item['DEPTH_LEVEL'];

    if ($depth < $prevDepth)
    {
        echo "</ul></li>";
    }

    if($item['IS_PARENT'])
    {
        echo "<li class='nav-item dropdown'>";
        echo "<a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>О компании</a>";
        echo '<ul class="dropdown-menu">';
    }
    else if ($depth > 2)
    {
        echo "<li><a class='dropdown-item' href='{$url}'>{$text}</a></li>";
    }
    else
    {
        echo "<li class='nav-item'><a class='nav-link {$strActiveClass}' href='{$url}'>{$text}</a></li>";
    }

    $prevDepth = $depth;
}

for ($i = $depth; $i > 0; --$i)
{
    echo '</ul></li>';
}

?>
</ul>
</div>