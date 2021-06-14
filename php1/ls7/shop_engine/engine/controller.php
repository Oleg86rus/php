<?php

function prepareVariables($page, $action = "")
{
    $params = [];
    $params['name'] = get_user();
    $params['auth'] = isAuth();

    switch ($page) {

        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            if (auth($login, $pass)) {
                if (isset($_POST['save'])) {
                    $hash = uniqid(rand(), true);
                    $id = $_SESSION['id'];
                    //TODO завернуть рабоуту с хеш в модель
                    $sql = "UPDATE users SET hash = '{$hash}' WHERE id = {$id}";
                    $result = mysqli_query(getDb(), $sql);
                    setcookie("hash", $hash, time() + 3600, "/");
                }
                header("Location: /");
                die();
            } else {
                die("Не верный логин пароль");
            }
            break;

        case 'logout':
            setcookie("hash", "", time()-1, "/");
            session_regenerate_id();
            session_destroy();
            header("Location: /");
            die();
            break;

        case 'index':
            break;

        case 'catalog':
            $params['catalog'] = getCatalog();
            break;

        case 'files':
            // if ($_POST[$_FILES]) {
            //upload();
            /// header();
            //  }
            // $params['message'] = $mes[$_GET['message']];
            $params['files'] = getGallery();
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'newsone':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'feedback':
            //$message = doFeedbackAction($action);

            $params['feedback'] = getAllFeedback();
            //$params['message'] = $message;
            break;

        case 'apicatalog':
            echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
            die();

    }
    return $params;
}