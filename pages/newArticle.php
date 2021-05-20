<?php

require __DIR__ . '/partials/startTheme.php';

if (!empty($_POST)) {
    // ETAPE 1 : Se connécter à la base de données
    $pdo = new PDO('mysql:dbname=php-poo-blog;host=localhost', 'root');
    var_dump('Nous sommes connectés à la base de données');

    // ETAPE 2 : Envoyer une requête de création d'article
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];

    var_dump($title, $description, $content);

    // ETAPE 3 : Création de la requète SQL.
    // Attention à ne pas concaténer les valeurs
    // diréctement mais à plutôt utiliser des ?
    $sql = 'INSERT INTO articles (title, description, content) VALUES (?, ?, ?)';

    // ETAPE 4 : Nous préparons la requète SQL et nous récupérons une requète
    $request = $pdo->prepare($sql);

    // ETAPE 5 : Envoyer ma requète à la base de données. C'est cette commande
    // qui enregistre l'article dans la base.
    $request->execute([
        $title,
        $description,
        $content,
    ]);
}

?>
<h1>Page de création d'article</h1>

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