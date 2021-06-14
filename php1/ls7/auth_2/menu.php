<?php if ($allow): ?>
    Добро пожаловать <?=$user?> <a href="?logout">[Выход]</a>
<?php else:?>
    <form action="" method="post">
        <input type="text" name="login">
        <input type="password" name="pass">
        Save? <input type='checkbox' name='save'>
        <input type="submit" name="ok">
    </form>
<?php endif;?>
<br>
<a href="/">Главная</a>
<a href="second.php">Вторая</a>
<br>