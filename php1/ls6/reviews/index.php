<?php
$db = mysqli_connect('localhost:3306','test','12345','test');

$message = '';
$row = [];
$buttonText = "Добавить";
$action = "add";

$messages = [
    'OK' => 'Сообщение добавлено',
    'DELETE' => 'Сообщение удалено',
    'EDIT' => 'Сообщение изменено',
    'ERROR' => 'Ошибка'
];

if ($_GET['action'] == 'edit') {
    $id = (int)$_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM feedback WHERE id = {$id}");
    if ($result) $row = mysqli_fetch_assoc($result);
    $buttonText = "Править";
    $action = "save";
}

if ($_GET['action'] == 'save') {
    $id = (int)$_POST['id'];
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['feedback'])));

    $sql = "UPDATE feedback SET name='{$name}', feedback='{$feedback}' WHERE id = {$id}";
    mysqli_query($db, $sql);

    header('Location: /?message=EDIT');
}

if ($_GET['action'] == 'add') {

    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['feedback'])));

    $sql = "INSERT INTO feedback(name, feedback) VALUES ('{$name}','{$feedback}')";
    mysqli_query($db, $sql);

    header('Location: /?message=OK');
}

$feedbacks = mysqli_query($db, "SELECT * FROM `feedback` WHERE 1 ORDER BY id DESC");

if (isset($_GET['message'])) {
    $message = $messages[$_GET['message']];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Отзывы</h2>
<?=$message?><br>
<form method="post" action="?action=<?=$action?>">
    <input type="text" name="id" value="<?=$row['id']?>" hidden>
    <input type="text" name="name" value="<?=$row['name']?>"><br>
    <input type="text" name="feedback" value="<?=$row['feedback']?>"><br>
    <input type="submit" value="<?=$buttonText?>">

</form>
<br>
<?php foreach ($feedbacks as $feedback): ?>
<div>
    <b><?=$feedback['name']?></b>: <?=$feedback['feedback']?>
    <a href="?action=edit&id=<?=$feedback['id']?>">[edit]</a>
    <a href="?action=delete&id=<?=$feedback['id']?>">[x]</a>
</div>
<?php endforeach;?>
</body>
</html>
