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
    require_once(__DIR__ . '/oeuvres.php');

    $getData = $_GET['id'];

    // Vérification de la présence d'un id dans $_GET
    if (!isset($getData) || empty($getData))
    {
        echo "Il faut l'id de l'oeuvre";
        return;
    }
 
    // Vérification que l'id est valide (supérieur à 0 et inférieur au nombre d'oeuvres) 
    if ($getData < 0 || $getData > count($oeuvres))
    {
        echo "id non valide";
        return;
    }

    $i = 0;
    $find = false;
    $oeuvre;

    // Recherche de l'oeuvre
    while ($i < count($oeuvres) && !$find)
    {
        $oeuvre_temp = $oeuvres[$i];
        if ($oeuvre_temp['id'] == $getData)
        {
            $oeuvre = $oeuvre_temp;
            $find = true;
        }
        $i++;
    }

?>
    <main>
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src=<?php echo $oeuvre['image'] ?> alt=<?php echo $oeuvre['titre'] ?>>
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['titre'] ?></h1>
                <p class="description"><?php echo $oeuvre['artiste'] ?></p>
                <p class="description-complete">
                    <?php echo $oeuvre['description'] ?>
                </p>
            </div>
        </article>
    </main>


    <?php require_once(__DIR__ . '/footer.php') ?>

</body>
</html>