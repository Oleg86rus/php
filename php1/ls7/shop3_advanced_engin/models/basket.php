<?php
function deleteFromBasket($id) {
    $id = (int)$id;
    $session = session_id();
    $basketSession = getAssocResult("SELECT `session_id` FROM `basket` WHERE `id`={$id}")[0]['session_id'];
    if ($session == $basketSession) {
     return executeQuery("DELETE FROM `basket` WHERE `basket`.`id` = {$id}");
    }

}

function getSummBasket() {
    $session = session_id();
    return getAssocResult("SELECT  SUM(goods.price) summ FROM basket,goods WHERE basket.good_id=goods.id AND session_id = '{$session}'")[0]['summ'];
}

function getBasket() {
    $session = session_id();
    return getAssocResult("SELECT basket.id basket_id, goods.image, goods.id good_id, goods.name, goods.description, goods.price FROM basket,goods WHERE basket.good_id=goods.id AND session_id = '{$session}'");
}

function addToBasket($id) {
    $id = (int)$id;
    $session = session_id();
    executeQuery("INSERT INTO `basket`(`good_id`, `session_id`) VALUES ({$id},'{$session}')");
}

function getBasketCount() {
    $session = session_id();
    return getAssocResult("SELECT COUNT(id) as count FROM `basket` WHERE `session_id`='{$session}'")[0]['count'];;
}