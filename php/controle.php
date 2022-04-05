<?php include_once '../header/header.php' ?>
<?php include_once '../recet.php' ?>

<body>
    <h1 class="adminstration">Administration</h1>
    <div class="ajtcontact">
        <button><a href="publication.php" class="ajtbutton">Ajouter un article</a></button>
        <button><a href="contact.php" class="ajtbutton1">Contact</a></button>
        <button><a href="contact.php" class="ajtbutton1">Message</a></button>
        <button><a href="listecomm.php" class="ajtbutton1">Commentaire</a></button>
    </div>
    <div class="ajtsupp">
        <?php foreach ($recettes as $controls) :


        ?>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Actions</th>

                </tr>

                <tr>

                    <td><?php echo $controls['id_article'] ?></td>
                    <td><?php echo $controls['titre'] ?></td>
                    <td><?php echo $controls['categorie'] ?></td>
                    <td>
                        <button><a href="http://localhost:3000/php/modifier.php?id_article=<?php echo $controls['id_article'] ?>" name="modarticle">Modifier</a></button>
                        <button><a href="http://localhost:3000/supp.php?id_article=<?php echo $controls['id_article'] ?>" name="supparticle">Supprimer</a></button>
                    </td>
                </tr>

            </table>
        <?php endforeach ?>
    </div>

</body>