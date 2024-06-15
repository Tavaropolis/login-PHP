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
            <form action="./index.php" method="post">
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
                <span>Novo no APMS? </span><a href="./cadastrarUsuario.php">Criar usuario</a>
            </div>
            <?php
                //Carregando o banco
                $db = new SQLite3('db.db');

                //Iniciando variavéis de sessão
                session_start();

                //Se já tiver Cookie, não cai no login
                if(isset($_COOKIE['usuario'])) {
                    $_SESSION['id'] = $_COOKIE['id'];
                    $_SESSION['email'] = $_COOKIE['email'];
                    $_SESSION['usuario'] = $_COOKIE['usuario'];
                    header("location: main.php");
                    die();
                }

                if(isset($_POST['email'])) {
                    $email = strip_tags($_POST['email']);
                    $password = $_POST['password'];
                    
                    //Buscando o usuário no bando através do email
                    $resultado = $db->query("SELECT * FROM Users WHERE email = '{$email}';");

                    $usuarios = [];

                    while( $dados = $resultado->fetchArray(SQLITE3_ASSOC)){
                        array_push($usuarios,$dados);
                    }

                    foreach ($usuarios as $key => $usuario) {
                        //Validando usuário e senha
                        if(password_verify($password, $usuario['password']) && ($email == $usuario['email'])) {
                            // Definindo variáveis de sessão
                            $_SESSION['id'] = $usuario['idUsuario'];
                            $_SESSION['email'] = $email;
                            $_SESSION['usuario'] = $usuario['usuario'];

                            //Definindo os Cookies
                            setcookie("id", $usuario['idUsuario'], time() + (24 * 60 * 60), '/');
                            setcookie("usuario", $usuario['usuario'], time() + (24 * 60 * 60), '/'); //Expira em um dia
                            setcookie("email", $usuario['email'], time() + (24 * 60 * 60), '/');

                            //Transferindo para outra página web
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
