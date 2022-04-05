<?php include_once "../header/header.php" ?>
<?php require_once "../config.php"  ?>
<?php require_once "../indexIns.php" ?>

<body>
    <h1>Inscription</h1>
    <form action="/indexIns.php" method="post">
        <div class="contact">

            <div class="pseudo">
                <label for="pseudo"></label>
                <input type="pseudo" name="pseudo" placeholder="pseudo">
                <div class="nom">
                    <label for="nom"></label>
                    <input type="nom" name="nom" placeholder="nom">

                    <div class="prenom">
                        <label for="prenom"></label>
                        <input type="prenom" name="prenom" placeholder="prenom">

                        <div class="emaill">
                            <label for="email "></label>
                            <input type="email" name="email" placeholder="E-mail">

                            <div class="passwordd">
                                <label for="password"></label>
                                <input type="password" name="password" placeholder="Mot de passe">

                            </div>

                            <button class="envoyer1" name="submit4"> Inscription</button><br>

                            <button><a href="connexion.php" class="envoyer5" name="submit9"> Connexion</a></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

<?php include_once '../footer/footer.php'  ?>