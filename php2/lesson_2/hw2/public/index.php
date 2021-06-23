<?php

use app\models\{Product, User};
use app\engine\Db;
use app\engine\Autoload;

include "../config/config.php";
include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

$product = new Product(new Db());


$product->getOne(15);
//$product->getAll();

$db = new Db();
$user = new User($db);


$user->getOne(2);
$user->getAll();




/*
function foo(IModel $model) {
    $model->getAll();
}

foo($product);
foo($user);
*/
var_dump($product);



























die();
/*
//CREATE
$product = new Product();
$product->name = 'Чай';
$product->price = 23;
$product->insert();

//READ
$product = new Product();
$product->getOne(5);
$product->getAll();

//UPDATE
$product = new Product();
$product->getOne(5);
$product->price = 25;
$product->update();

//DELETE
$product = new Product();
$product->getOne(5);
$product->delete();
*/