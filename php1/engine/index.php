<?php
define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
$params = [
    'name' => 'Админ'
];

switch ($page) {
    case 'index':
    break;
    case 'catalog':
        $params['catalog'] = getCatalog();
    break;
}

echo render($page, $params);

function getCatalog() {
    return[
        [
            'name' => 'Пицца',
            'price' => 24
        ],
        [
            'name' => 'Чай',
            'price' => 1
        ],
        [
            'name' => 'Яблоко',
            'price' => 12
        ]
        
        ];
}
var_dump($params);
function render($page, $params = []) { 
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params)
    ]);
}


function renderTemplate($page, $params) {
    extract($params);
    // foreach ($params as $key => $value) {
    //     $$key = $value;
    // }
    
    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)) {
        include $fileName;
    }
    return ob_get_clean();
}