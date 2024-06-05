<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilização -->
    <link rel="shortcut icon" href="./assets/iconsPlanner.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

    <title>APMS - Login</title>
</head>
<body>
    <main>
        <h1>Login</h1>
        <div class="main-container">
            <form action="#" method="post">
                <div class="input-container">
                    <label for="user">Email</label>
                    <input type="text" name="user" id="">
                    <label for="password">Senha</label>
                    <div class="">
                        <input type=<?php $tipoInput ?> name="password" id="">
                        <button class="icon-button" type="submit" name="visualizar"><img src="./assets/visibility.svg" alt=""></button>
                    </div>
                    <a href="" id="esqueci-minha-senha">Esqueci minha senha</a>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <div class="new-account-container">
                <span>Novo no APMS? </span><a href="./cadastrarUsuario.php" target="__blank">Criar usuario</a>
            </div>
            <?php 
                session_start();
                $tipoInput = "password";


                if(isset($_POST['user'])) {
                    $_SESSION['user'] = strip_tags($_POST['user']);
                }

                if(array_key_exists('visualizar', $_POST)) {
                    if($visivel) {
                        $tipoInput = "text";
                    }
                }

                // if(isset($_SESSION['user'])) {
                //     header("location: main.php");
                //     die();
                // }    
            ?>
        </div>
    </main>
</body>
</html>
