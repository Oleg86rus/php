<h2>Корзина</h2>
Оформить заказ:<br>
<form action="/basket/addorder/" method="post">
    <input type="text" name="name" placeholder="Имя">
    <input type="text" name="phone" placeholder="Телефон">
    <input type="submit" value="Оформить заказ">
</form>


Итого: <span id="summ"><?=$summ?></span> <br>



<? foreach ($basket as $item): ?>
    <div id="item<?= $item['basket_id'] ?>">
        <h3><?= $item['name'] ?></h3>
        <img src="/img/<?= $item['image'] ?>" width="50" alt=""><br>
        Цена: <?= $item['price'] ?><br><br>

        <button class="delete" data-id="<?= $item['basket_id'] ?>">Удалить</button>

        <hr>
    </div>
<? endforeach; ?>

<script>
    let buttonsBuy = document.querySelectorAll('.delete');
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/delete/?id=' + id);
                const answer = await response.json();
                document.getElementById('item'+id).remove();
                document.getElementById('count').innerText = answer.count;
                document.getElementById('summ').innerText = answer.summ;

            })();

        })
    })
</script>
