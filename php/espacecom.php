<?php include_once '../header/header.php' ?>
<?php require_once '../espacecomm.php' ?>
 <?php require_once '../espaceaffiche.php' ?>
 
<main>
    <?php foreach ($affichages as $affichage) : ?>
    <div class="container3">

        <div class="right3">
            <img src="<?php echo $affichage['img'] ?>" class="profille">
        </div>
        <div class="left3">
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. In dolore aperiam et culpa necessitatibus
                molestiae, sed porro enim asperiores ad corrupti aspernatur voluptatibus saepe? Earum culpa
                exercitationem mollitia sapiente magni.
                Quas, sequi quae. Nihil, dignissimos natus? Dolores quam temporibus eum maiores accusamus, distinctio
                expedita perferendis maxime. Recusandae nihil officiis qui placeat, quisquam dolores illum rem incidunt
                eos, est esse unde?
                Perspiciatis quae adipisci voluptas, modi fugiat est mollitia minima at tempora ab, sit exercitationem
                laudantium aliquid placeat velit doloribus illo, dignissimos consequuntur porro? Asperiores, repudiandae
                officia rerum atque et quia!</P>
        </div>

</main>
<div class="commentaires">
    <div class="commente">
        <h4>Laisser un commentaire</h4>
        <label for="pseudo"></label>
        <div class="pseudo2">
            <input type="pseudo" name="<?php echo $user['pseudo'];?>" placeholder="pseudo" required>
        </div>
        <textarea type="text" id="text" name="espacecomm" rows="15" cols="85" placeholder="Commentaire"
            required></textarea>
    </div>
    <button name="submitcom3" class="classbutt"><a href="#">Envoyer</a>
</div>
</div>
<?php endforeach ?>







<?php include_once '../footer/footer.php' ?>