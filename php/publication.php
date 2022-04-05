<?php include_once '../header/header.php' ?>
<?php require_once "../publi.php" ?>

<div class="container1">
    <form method="POST" action="publication.php">
        <div class="contact1">
            <label for="titre ">Titre</label>
            <input type="titre" name="titre" id="titrepu" required>

            <label for="text">Contenu</label>
            <textarea type="text" id="story" name="contenue" rows="18" cols="35"></textarea>

            <label for="imagepu ">Image</label>
            <input type="text" name="img" id="imagepu" required>

            <label for="titre ">Catégorie</label>
            <select id="category" name="categorie">
                <option value="Plat" selected>Plat</option>
                <option value="Pâtisserie">Pâtisserie</option>
                <option value="Apéritif">Apéritif</option>
                <option value="dessert">dessert</option>
                <option value="Entrée">Entrée</option>
            </select>

            <label for="titre ">Auteur</label>
            <input type="autheur" name="auteur" id="auteurpu" required>



        </div>
        <button class="submitPubl" name="submitMsg17">Crée</button>
    </form>



</div>