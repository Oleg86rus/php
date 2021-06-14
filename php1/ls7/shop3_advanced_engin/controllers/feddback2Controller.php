<?php
function feedback2Controller(&$params, $action)
{

    if (!empty($action)) {
        doApiFeedbackAction($action);
    }

    $params['feedback'] = getAllFeedback();

    $templateName = 'feedback2';

    return render($templateName, $params);
}