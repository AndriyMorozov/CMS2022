<?php
/** @var array $rows */
use models\User;
?>
<h2>Список категорій</h2>
<?php if (User::isAdmin()) : ?>
    <a href="/category/add" class="btn btn-primary">Додати категорію</a>
<?php endif; ?>
<ul>
    <?php foreach ($rows as $row) : ?>
        <li>
            <img style="width:100px;" src="/files/category/<?=$row['photo'] ?>" />
            <a href="/category/view/<?=$row['id'] ?>">
                <?=$row['name'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>