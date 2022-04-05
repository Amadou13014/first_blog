<?php session_start() ?>
<?php include '../php/fonction.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="http://<?= style() ?>/css/style.css">
</head>

<body>
    <header>

        <nav>

            <ul class="barre">
                <li><a href="/php/accueil.php">ACCUEIL</a></li>
                <li><a href="/php/recettes.php">RECETTES</a></li>
                <li><a href="/php/apropos.php">A PROPOS</a></li>
                <li><a href="/php/contact.php">CONTACT</a></li>
                <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') : ?>
                    <li><a href="/php/controle.php">ADMIN</a></li>
                <?php endif; ?>

                <?php if (isset($_SESSION['email'])) : ?>
                    <li><a href="../logout.php">DECONNEXION</a></li>
                <?php elseif (!isset($_SESSION['email'])) : ?>
                    <li><a href="/php/connexion.php">CONNEXION</a></li>
                <?php endif; ?>
            </ul>

        </nav>
        <img src="/photo/logo.png" class="logo">

        <h1>AVENTURES GUSTATIVES</h1>


        <hr class="trait">

    </header>