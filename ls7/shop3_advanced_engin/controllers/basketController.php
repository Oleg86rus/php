<?php
function basketController(&$params, $action)
{
    if (empty($action)) $action = 'basket';

    $params['summ'] = getSummBasket();
    $params['basket'] = getBasket();

    $templateName = '/basket/' . $action;

    return render($templateName, $params);
}