<?php include_once '../header/header.php' ?>
<?php include_once '../recet.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php foreach ($recettes as $recette):

?>
    <div class="carre">
        <img src="<?php echo $recette['img']?>" class="imgtext">

        <div class="textrecette">


            <p>Nom Prenom Le <?php echo $recette['date_creation'] ?>. Plat </p>

            <p class="textrecette1"><?php echo $recette['titre'] ?> </p>
            <p><?php echo $recette['contenue'] ?></p>
            <button type="button" class="button"><a href="http://localhost:3000/php/espacecom.php?id_article=<?php echo $recette['id_article'] ?>" name="voirespace"> Voir plus</a></button>
            <hr class="montrait">
            <div class="commentaire1">
                <img src="/photo/chat-square-fill.svg">
                <p class="commentaire">1 commentaire</p>
            </div>
        </div>
    </div>

<?php endforeach ?>

</body>
</html>
<?php include_once '../footer/footer.php' ?>