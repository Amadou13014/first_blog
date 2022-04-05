<?php require_once "config.php"; 

$id = $_REQUEST['id_article'];

$sql = $db->prepare("SELECT titre, img, categorie FROM article WHERE id_article = :id_article");
$sql->bindParam('id_article', $id);
$sql->execute();
$affichages = $sql->fetchAll();


?>