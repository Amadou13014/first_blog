<?php include_once '../header/header.php' ?>
<?php require_once "../config.php"  ?>
<?php require_once "../message.php" ?>


<body>

    <h1>Contact</h1>
    <form  method="POST" action="../message.php">
    <div class="contact">
        <label for="email1 ">Email</label>
        <input type="email" name="email" id="email1"     required>

        <label for="text">Message</label>
        <textarea type="text" id="story" name="message" rows="18" cols="35"></textarea>

   
    <button class="submitMsg31" name="submitMsg3"> Envoyer</button>
    </div>
    </form>




</body>

<?php include_once '../footer/footer.php' ?>