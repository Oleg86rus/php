<?php
include "Page.php";

$params = [
    "title" => "Главная",
    "menu" => "Главное меню",
    "content" => "Содержимое",
    "footer" => "(c)2019"
];

$page = new Page("main", $params);
$page->render();