<h3>Listagem de Usuários</h3>
<?php if (isset($users) && !empty($users)) : ?>
    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user["first_name"]; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>