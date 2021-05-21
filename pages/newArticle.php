<?php

require __DIR__ . '/partials/startTheme.php';

?>
<h1>Page de création d'article</h1>

<?php if ($success) { ?>
    <div class="alert alert-success" role="alert">
        L'article a bien été créé
    </div>
<?php } ?>

<form method="POST" action="./index.php?page=newArticle">
    <div class="mb-3">
        <label for="title" class="form-label">Titre de l'article</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description de l'article</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Contenue de l'article</label>
        <textarea class="form-control" id="content" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
</form>

<?php

require __DIR__ . '/partials/endTheme.php';

?>