<?php require_once "config.php"; ?>
<?php

if (isset($_REQUEST['submit4'])) {

    $pseudo = $_REQUEST['pseudo'];
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['prenom'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $param_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt1 = $db->prepare("INSERT INTO user (pseudo, nom, prenom, email, password, role) VALUES (:pseudo, :nom, :prenom, :email, :password, 'user')");
    $stmt1->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt1->bindParam(':nom', $nom, PDO::PARAM_STR);
    $stmt1->bindParam(':prenom', $prenom, PDO::PARAM_STR);
    $stmt1->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt1->bindParam(':password', $param_password, PDO::PARAM_STR);
    $stmt1->execute();

    if ($stmt1 == true) {
        echo "<script>alert(\"Bienvenue vous être inscrits\")</script>";
        // header("Location: /php/connexion.php");
    } else {
        echo "<script>alert(\"Erreur veuillez réeseyer\")</script>";
    }
}
