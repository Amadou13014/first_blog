<?php include_once '../header/header.php' ?>
<?php require_once "../config.php"  ?>
<?php require_once "../indexco.php" ?>

<h1>Connexion</h1>
<form method="POST">
    <div class="contact">
        <div class="emaill">
            <form action="connexion.php" method="post">
                <label for="email "></label>
                <input type="email" name="email" placeholder="E-mail">
        </div>

        <div class="passwordd">
            <label for="password"></label>
            <input type="password" name="password" placeholder="Mot de passe">
        </div>


        <button class="envoyer1" name="submit"> Connexion</button>
        <button><a href="inscription.php" class="envoyer5" name="submit2"> Inscription</a></button>

    </div>
</form>


<?php include_once '../footer/footer.php' ?>