<h2>Каталог товаров:</h2>

<?php foreach ($catalog as $value):?>
<div>
    Like: <span id="like<?=$value["id"]?>"><?=$value["likes"]?></span>
    <a href="/catalog/item/?id=<?=$value["id"]?>">
    <h2><?=$value["name"]?></h2>
    <img src="/img/<?=$value["image"]?>" alt="" width="150"><br>
    Стоимость: <?=$value["price"]?><br></a>
    <button class="like" data-id="<?=$value["id"]?>">like</button><br>
    <button class="buy" data-id="<?=$value["id"]?>">Купить</button><hr>
</div>
<? endforeach;?>

<script>
    let buttonsBuy = document.querySelectorAll('.buy');
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/buy/?id=' + id);
                const answer = await response.json();
                document.getElementById('count').innerText = answer.count;

            })();

        })
    })

    let buttonslike = document.querySelectorAll('.like');
    buttonslike.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/addlike/?id=' + id);
                const answer = await response.json();
                document.getElementById('like' + id).innerText = answer.likes;
                console.log(answer.likes);

            })();

        })
    })
</script>
