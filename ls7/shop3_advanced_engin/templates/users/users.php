<h2>Пользователи</h2>

<? foreach ($users as $user): ?>
    <div>
        <?= $user['login'] ?>
        <? if ($user['role'] == 0): ?>
            <button data-id="<?= $user["id"] ?>" class="toggleAdmin"><span id="text<?= $user["id"] ?>">Назначить админа</span></button>
        <? else: ?>
            <button data-id="<?= $user["id"] ?>" class="toggleAdmin"><span id="text<?= $user["id"] ?>">Снять админа</span></button>
        <? endif; ?>
    </div><br>
<? endforeach; ?>

<script>
    let buttonsBuy = document.querySelectorAll('.toggleAdmin');
    buttonsBuy.forEach((elem) => {
        elem.addEventListener('click', () => {
            let id = elem.getAttribute('data-id');
            (async () => {
                const response = await fetch('/api/toggleAdmin/?id=' + id);
                const answer = await response.json();
                document.getElementById('text' + id).innerText = answer.text;
            })();
        })
    })
</script>