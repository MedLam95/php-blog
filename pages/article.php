<?php

require __DIR__ . '/partials/startTheme.php';

$article = $articleTable->findOne($_GET['id']);

?>

<h1><?= $article['title'] ?></h1>

<p>
    <?= $article['content'] ?>
</p>

<?

require __DIR__ . '/partials/endTheme.php';

?>