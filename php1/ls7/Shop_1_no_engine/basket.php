<?php
session_start();
$db = mysqli_connect("localhost", "root", "root", "shop");
$session = session_id();

$basket = mysqli_query($db, "SELECT * FROM basket, goods WHERE basket.goods_id = goods.id AND session_id = '{$session}'");

$result = mysqli_query($db, "SELECT count(id) as count FROM `basket` WHERE `session_id` = '{$session}'");
$count = mysqli_fetch_assoc($result)['count'];

$result2 = mysqli_query($db, "SELECT SUM(goods.price) as summ FROM basket, goods WHERE basket.goods_id=goods.id AND session_id = '{$session}'");
$summ = mysqli_fetch_assoc($result2)['summ'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include "menu.php";?>
<h2>Корзина</h2>
<?php foreach ($basket as $value): ?>
    <div>
        <?=$value['name']?><br>
        price: <?=$value['price']?><br>
        <a href="">Удалить</a>
    </div><hr>

<?php endforeach;?>
ИТОГО: <?=$summ?>
</body>
</html>
