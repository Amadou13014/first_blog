<?php require_once "config.php"; ?>

<?php

if (isset($_REQUEST['submitMsg17'])) {
    $titre = $_POST['titre'];
    $img = $_POST['img'];
    // $date = $_POST['date'];
    // $date_creation = $_POST['date_creation'];
    // $date_maj = $_POST['date_maj'];
    $contenue = $_POST['contenue'];
    $categorie = $_POST['categorie'];
    $auteur = $_POST['auteur'];

    $stmt1 = $db->prepare("INSERT INTO article (titre, img, date, contenue, categorie, auteur, date_creation) VALUES (:titre, :img, now(), :contenue, :categorie, :auteur, now())");
    $stmt1->bindParam(':titre', $titre, PDO::PARAM_STR);
    $stmt1->bindParam(':img', $img, PDO::PARAM_STR);
    $stmt1->bindParam(':contenue', $contenue, PDO::PARAM_STR);
    $stmt1->bindParam(':categorie', $categorie, PDO::PARAM_STR);
    $stmt1->bindParam(':auteur', $auteur, PDO::PARAM_STR);
    $stmt1->execute();

}

?>