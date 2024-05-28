<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
</head>
<body>
    <h1>Você está logado</h1>
    <form action="#" method="post">
        <input type="submit" name="deslogar" value="Deslogar">
    </form>
    <?php
        session_start();

        if(!isset($_SESSION['user'])) {
            header("location: index.php");
            die();
        }    

        if(array_key_exists('deslogar', $_POST)) { 
            session_unset();
            session_destroy();
            header("location: index.php");
            die();
        } 
    ?>
</body>
</html>