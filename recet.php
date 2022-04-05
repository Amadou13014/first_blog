<?php require_once "config.php";



try {
    $sql = "SELECT * FROM article";

    $post = $db->query($sql);

    $recettes = $post->fetchAll();

    // var_dump($stmt1[0]['img']);

} catch (PDOException $e) {
    $error = $e->getMessage();
}
