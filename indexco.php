<?php
require_once "config.php";


if (isset($_POST['submit'])) {

    if ($_POST['email'] != "" || isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];


        $sql = " SELECT * FROM user WHERE email=? ";
        $query = $db->prepare($sql);
        $query->execute(array($email));
        $count = $query->rowCount();
        $user = $query->fetch(); 
        $role = $user['role'];


        // var_dump($user);exit;
        

        if ($count > 0) {
            if (password_verify($password, $user['password'])) {
                $_POST['password'];
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $role;
                header("location:accueil.php");
            } 
            else {
                echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'connexion.php'</script>
				";
            }
        } else {
            echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'connexion.php'</script>
			";
        }
    }
}
