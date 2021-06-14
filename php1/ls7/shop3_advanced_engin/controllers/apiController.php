<?php
function apiController(&$params, $action)
{
    if ($action == 'toggleAdmin') {

        if (is_admin()) {
            if (toggleAdmin($_GET['id']) == 1) {
                $message = "Снять админа";
            } else {
                $message = "Назначить админа";
            }
            return json_encode(['text' => $message]);

        }

    }


    if ($action == 'buy') {
        addToBasket($_GET['id']);
        return json_encode(['count' => getBasketCount()]);

    }
    if ($action == 'delete') {
        deleteFromBasket($_GET['id']);
        return json_encode(['summ' => getSummBasket(), 'count' => getBasketCount()]);

    }
}