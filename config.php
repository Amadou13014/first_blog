<html>

<head>
    <title>Co</title>
    <meta charset="utf-8">
</head>

<body>
    
    <?php

    $serveurname = '127.0.1.1';
    $username = 'root';
    $pwd = 'Azerty@13014';


    try {
        $db = new PDO("mysql:host=$serveurname;dbname=blog;", $username, $pwd);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }


    ?>
</body>

</html>