<h2>Отзывы</h2>

<form action="/feedback/add/" method="post">
    Оставьте отзыв: <br>
    <input type="text" name="name" placeholder="Ваше имя"><br>
    <input type="text" name="message" placeholder="Ваш отзыв"><br>
    <input type="submit" value="Добавить">
</form>

<?foreach ($feedback as $value): ?>
    <div><strong><?=$value['name']?></strong>: <?=$value['feedback']?></div>
<?endforeach;?>