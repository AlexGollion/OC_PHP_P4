<?php require_once(__DIR__ . '/header.php'); ?>

<form action="traitement.php" method="POST">
    <div class="champ-formulaire">
        <label>Nom de l'oeuvre</label>
        <input type="text" name="oeuvre" id="oeuvre"></input>
    </div>
    <div class="champ-formulaire">
        <label>Nom de l'auteur</label>
        <input type="text" name="auteur" id="auteur"></input>
    </div>
    <div class="champ-formulaire">
        <label>URL de l'oeuvre</label>
        <input type="url" name="photo" id="photo"></input>
    </div>
    <div class="champ-formulaire">
        <label>Description de l'oeuvre</label>
        <textarea name="description" id="description"></textarea>
    </div>

    <input type="submit" value="Valider" name="submit"></input>
</form>

<?php require_once(__DIR__ . '/footer.php'); ?>