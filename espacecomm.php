<?php require_once "config.php" ?>

<?php 
if(isset($POST['submitcom3'])) {
// $id_comments = $_POST['id_comments'];
// $id_user = $_POST['id_user'];
// $id_article = $_POST['id_article'];
$contenu = $_POST['contenu'];

$sql = $db->prepare("INSERT INTO (comments) VALUE (:contenu)");
$sql->bindParam(':contenu', $contenu, PDO::PARAM_STR);
$sql->execute();

} 



// else{              
//     echo "<script>alert(\"Le message n'a pas était envoyer resseyer\")</script>";
// }









?>