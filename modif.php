<?php require_once "config.php"; ?>
<?php require_once "recet.php"; ?>
<?php require_once "publi.php";



if (isset($_POST['submitMsg20'])) {
    $id = $_REQUEST['id_article'];
    $titre = $_POST['titre'];
    $img = $_POST['img'];
    $contenue = $_POST['contenue'];
    $categorie = $_POST['categorie'];
    $auteur = $_POST['auteur'];

    $update = $db->prepare("UPDATE article SET titre= :titre, img=:img, contenue=:contenue, categorie=:categorie, auteur=:auteur WHERE id_article= :id_article");
    $update->bindParam(':id_article', $id);
    $update->bindParam(':titre', $titre, PDO::PARAM_STR);
    $update->bindParam(':img', $img, PDO::PARAM_STR);
    $update->bindParam(':contenue', $contenue, PDO::PARAM_STR);
    $update->bindParam(':categorie', $categorie, PDO::PARAM_STR);
    $update->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $update->execute();
    // echo '<body onLoad="alert('Modification effectuée...')">';
    // echo '<meta http-equiv="refresh" content="0;URL=index.php">';
    // mysql_close();
}


?>