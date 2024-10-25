<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php require_once(__DIR__ . '/header.php'); ?>

    <form action="traitement.php" method="POST">
        <div class="champ-formulaire">
            <label>Nom de l'oeuvre</label>
            <input type="text" name="titre" required id="titre"></input>
        </div>
        <div class="champ-formulaire">
            <label>Nom de l'auteur</label>
            <input type="text" name="auteur" required id="auteur"></input>
        </div>
        <div class="champ-formulaire">
            <label>URL de l'oeuvre</label>
            <input type="url" name="photo" required id="photo"></input>
        </div>
        <div class="champ-formulaire">
            <label>Description de l'oeuvre</label>
            <textarea name="description" required id="description"></textarea>
        </div>

        <input type="submit" value="Valider" name="submit"></input>
    </form>

    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>