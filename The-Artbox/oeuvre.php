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

<?php 

    require_once(__DIR__ . '/header.php');
    require_once(__DIR__ . '/bdd.php');

    $mysqlClient = connexion();

    $getData = $_GET;

    // Vérification de la présence d'un id dans $_GET
    if (!isset($getData) || empty($getData['id']))
    {
        header('Location:'.'/P4/The-Artbox');
        die();
    }

    $sqlQuery = 'SELECT * FROM oeuvres WHERE id = :id';
    $oeuvreStatement = $mysqlClient->prepare($sqlQuery);
    $oeuvreStatement->execute([
        'id' => $getData['id'],
    ]);
    $oeuvreTemp = $oeuvreStatement->fetchAll();
    if($oeuvreTemp)
    {
        $oeuvre = $oeuvreTemp[0];
    }
    else 
    {
        header('Location:'.'/P4/The-Artbox');
        die();  
    }

?>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src=<?php echo $oeuvre['image'] ?> alt=<?php echo $oeuvre['nom'] ?>>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['nom'] ?></h1>
                <p class="description"><?php echo $oeuvre['auteur'] ?></p>
                <p class="description-complete">
                    <?php echo $oeuvre['description'] ?>
                </p>
            </div>
        </article>
    </main>


    <?php require_once(__DIR__ . '/footer.php') ?>

</body>
</html>