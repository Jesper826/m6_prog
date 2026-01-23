<?php
require_once __DIR__ . '/../dataclasses/user.php';

$users = getAllUsers();
?>

<section id="wall">
    <?php foreach ($users as $user): ?>
    <article class="post">
        <div class="post-header">
            <strong><?php echo ($user->name); ?></strong>
        </div>
        <div class="post-content">
            <p><?php echo ($user->bericht); ?></p>
        </div>
    </article>
    <?php endforeach; ?>
</section>
