<?php require_once "config.php";

$email = "";
$message = "";

if (isset($_REQUEST['submitMsg3'])) {

    $email =  $_REQUEST['email'];
    $message = $_REQUEST['message'];

    $stmt5 = $db->prepare("INSERT INTO `message` (`message`, `email`) VALUES (:message, :email)");
    $stmt5->bindParam(':message', $message, PDO::PARAM_STR);
    $stmt5->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt5->execute();

     if ($stmt5){
        echo "<script>alert(\"Le message a bien était envoyer\")</script>";  
     }else{
        echo "<script>alert(\"Erreur veuillez recommencer\")</script>";  
     }
   


}