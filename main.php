<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilização -->
    <link rel="shortcut icon" href="./assets/iconsPlanner.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="main.css">
    
    <title>APMS - Main</title>
</head>
<body>
    <h1>Você está logado</h1>
    <form action="#" method="post">
        <img src="./assets/image.jpg" alt="uma pessoa feliz">
        <input type="submit" name="deslogar" value="Deslogar">
    </form>
    <?php
        session_start();

        // if(!isset($_SESSION['email'])) {
        //     header("location: index.php");
        //     die();
        // }    

        if(array_key_exists('deslogar', $_POST)) { 
            session_unset();
            session_destroy();
            header("location: index.php");
            die();
        } 
    ?>
</body>
</html>