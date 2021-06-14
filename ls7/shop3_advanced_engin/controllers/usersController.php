<?php

function usersController(&$params, $action)
{

    if (empty($action)) $action = 'users';

    $params['users'] = getUsers();

    $templateName = '/users/' . $action;

    return render($templateName, $params);
}