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
    <script src="./index.js" defer></script>

    <title>APMS - Login</title>
</head>
<body>
    <main>
        <h1>Login</h1>
        <div class="main-container">
            <form action="#" method="post">
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="">
                    <label for="password">Senha</label>
                    <div class="password-container">
                        <input type="password" name="password" id="password-input">
                        <img src="./assets/visibility.svg" alt="" id="visible-icon">
                    </div>
                    <a href="" id="esqueci-minha-senha">Esqueci minha senha</a>
                </div>
                <button type="submit">Entrar</button>
            </form>
            <div class="new-account-container">
                <span>Novo no APMS? </span><a href="./cadastrarUsuario.php" target="__blank">Criar usuario</a>
            </div>
            <?php
                $db = new SQLite3('db.db');

                session_start();

                if(isset($_POST['email'])) {

                    $email = strip_tags($_POST['email']);
                    $password = $_POST['password'];
                    
                    $resultado = $db->query("SELECT * FROM Users WHERE email = '{$email}';");

                    $usuarios = [];

                    while( $dados = $resultado->fetchArray(SQLITE3_ASSOC)){
                        array_push($usuarios,$dados);
                    }

                    foreach ($usuarios as $key => $usuario) {
                        //Validando usuário e senha
                        if(password_verify($password, $usuario['password']) && ($email == $usuario['email'])) {
                            // Definindo variáveis de sessão
                            $_SESSION['email'] = $email;
                            $_SESSION['password'] = $password;

                            header("location: main.php");
                            die();
                        }
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>
