<?php require_once "config.php"; ?>
<?php require_once "recet.php"; 

$id = $_GET['id_article'];


$sql = $db->prepare("DELETE FROM article WHERE id_article = :id");
$sql->execute(['id'=> $id]);
header('location: /php/controle.php');

?> 