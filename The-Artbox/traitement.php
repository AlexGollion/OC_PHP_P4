<?php 
    require_once(__DIR__ . '/utils.php');
    
    $postData = $_POST;

    if(empty($postData['titre']) || empty($postData['auteur']) || empty($postData['photo']) || empty($postData['description']) 
        || strlen($postData['description']) < 3 || !filter_var($postData['photo'], FILTER_VALIDATE_URL))
    {
        redirect();
    } else {
        $titre = htmlspecialchars($postData['titre']);
        $auteur = htmlspecialchars($postData['auteur']);
        $photo = htmlspecialchars($postData['photo']);
        $description = htmlspecialchars($postData['description']);

        require_once(__DIR__ . '/bdd.php');
        $mysqlClient = connexion();
        $sqlQuery = 'INSERT INTO oeuvres(id, nom, auteur, image, description) VALUES (:id, :titre, :auteur, :photo, :description)';
        $addOeuvre = $mysqlClient->prepare($sqlQuery);

        $addOeuvre->execute([
            'id' => NULL,
            'titre' => $titre,
            'auteur' => $auteur,
            'photo' => $photo,
            'description' => $description,
        ]);

        header('Location:'.URL.'/oeuvre.php?id=' . $mysqlClient->lastInsertId());
    }
?>