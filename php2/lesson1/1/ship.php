<?php
$ship = [

    'x' => 3,
    'y' => 4,
    'speed' => 100,
    'fly' => function($speed) {
        echo 'Корабль летит со скоростью ' . $speed;
    }

];
$ship2 = [

    'x' => 3,
    'y' => 4,
    'speed' => 100,
    'fly' => function($speed) {
        echo 'Корабль летит со скоростью ' . $speed;
    }

];

$ship['fly']($ship['speed']);