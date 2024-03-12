<h2><?= esc($title) ?></h2>

<?php if (! empty($guests) && is_array($guests)): ?>

    <?php foreach ($guests as $guests_item): ?>

        <h3><?= esc($guests_item['name']) ?></h3>

        <div class="main">
            <?= esc($guests_item['email']) ?>
            <?= esc($guests_item['website']) ?>
            <?= esc($guests_item['comment']) ?>
            <?= esc($guests_item['gender']) ?>
        </div>
        <p><a href="./guests/<?= esc($guests_item['email'], 'url') ?>">View Guest detail</a></p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Guests</h3>

    <p>Unable to find any guest for you.</p>

<?php endif ?>