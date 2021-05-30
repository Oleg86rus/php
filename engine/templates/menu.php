<?php
$menu = [
	[
		"title" => "Главная",
		"href" => "/"
	],
	[
		"title" => "Каталог",
		"href" => "/templates/catalog.php",
		"subitems" => [
			[
				"title" => "Пицца",
				"href" => "/catalog/pizza.php"
			],
			[
				"title" => "Чай",
				"href" => "/catalog/tea.php",
				"subitems" => [
						[
							"title" => "Зеленый",
							"href" => "/catalog/tea.php"
						],
						[
							"title" => "Черный",
							"href" => "/catalog/tea.php"
						]
					]
            ],
            [
                "title" => "Яблоки",
				"href" => "/catalog/apple.php"
            ]
		]
	],
	[
		"title" => "О нас",
		"href" => "/templates/about.php"
	],
];

$result = "<ul>";
$result .= menuRender($menu);
$result .= "</ul>";

echo $result;


function menuRender($menu_array){
	$result = "";
	
	foreach($menu_array as $item){
		$result .= "<li><a href='{$item['href']}'>{$item['title']}</a>";
		
		if(isset($item["subitems"])){
			$result .= "<ul>";
			$result .= menuRender($item["subitems"]);
			$result .= "</ul>";
		}
		
		$result .= "</li>";
	}
	
	return $result;
}