<?php
session_start();
$db = mysqli_connect("localhost", "root", "root", "shop");
$session = session_id();

if ($_GET['action'] == 'buy') {
    $id = (int)$_GET['id'];
    mysqli_query($db, "INSERT INTO `basket`(`session_id`, `goods_id`) VALUES ('{$session}','{$id}')");
    header("Location: /");
    die();
}

$result = mysqli_query($db, "SELECT count(id) as count FROM `basket` WHERE `session_id` = '{$session}'");
$count = mysqli_fetch_assoc($result)['count'];

$catalog = mysqli_query($db, "SELECT * FROM `goods` WHERE 1");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include "menu.php";?>
<h2>Каталог</h2>
<?php foreach ($catalog as $value): ?>
    <div>
        <?= $value['name'] ?><br>
        price: <?= $value['price'] ?><br>
        <a href="/?action=buy&id=<?= $value['id'] ?>">КУПИТЬ</a>
    </div>
    <hr>
<?php endforeach; ?>
</body>
</html>
