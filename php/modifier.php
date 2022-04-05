<?php include_once '../header/header.php' ?>
<?php require_once "../modif.php" ?>
<?php require_once "../config.php"; ?>

<?php 
$id = $_GET['id_article'];


$sql = "SELECT * FROM article WHERE id_article = :id" ;

$post = $db->prepare($sql);
$post->bindParam(':id', $id, PDO::PARAM_INT);
$post->execute();
$recup = $post->fetch();

?>

<div class="container1">

    <form method="POST" action="/modif.php?id_article=<?php echo $recup['id_article'] ?>">
        <div class="contact1">
            <label for="titre ">Titre</label>
            <input type="titre" name="titre" id="titrepu" required>

            <label for="text">Contenu</label>
            <textarea type="text" id="story" name="contenue" rows="18" cols="35"></textarea>

            <label for="imagepu ">Image</label>
            <input type="text" name="img" id="imagepu" required>

            <label for="titre ">Catégorie</label>
            <select id="category" name="categorie">
                <option value="Plat" selected>Plat</option>
                <option value="Pâtisserie">Pâtisserie</option>
                <option value="Apéritif">Apéritif</option>
                <option value="dessert">dessert</option>
                <option value="Entrée">Entrée</option>
            </select>

            <label for="titre ">Auteur</label>
            <input type="autheur" name="auteur" id="auteurpu" required>



        </div>
        <button class="submitPubl" name="submitMsg20">Modifier</button>

    </form>



</div>