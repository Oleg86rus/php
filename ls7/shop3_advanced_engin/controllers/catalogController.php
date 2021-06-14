<?php

function catalogController($params, $action)
{

    if (empty($action)) $action = 'index';

    switch ($action) {
        case 'index':
            $params['catalog'] = getCatalog();
            break;

        case 'item':
            $params['value'] = getCatalogItem($_GET['id']);
            break;

      //  case 'addlike':

          //return json_encode();

    }

    $templateName = '/catalog/' . $action;

    return render($templateName, $params);
}