<?php
function renderTemplate($page, $content = "") {
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}

$about = renderTemplate('templates/about');
echo renderTemplate('templates\layout', $about);
?>