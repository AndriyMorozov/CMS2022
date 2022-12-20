<?php
/** @var array $rows */
use models\User;
?>
<h2>Список категорій</h2>
<ul>
    <?php foreach ($rows as $row) : ?>
    <li>
        <a href="/category/view/<?=$row['id'] ?>">
            <?=$row['name'] ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>