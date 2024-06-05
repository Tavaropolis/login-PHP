<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Estilização -->
    <link rel="shortcut icon" href="./assets/iconsPlanner.png" type="image/x-icon">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="cadastrarUsuario.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <script src="./cadastrarUsuario.js" defer></script>
    
    <title>APMS - Cadastro</title>
</head>
<body>
    <main>
        <h1>Cadastrar usuário</h1>
        <form action="#" method="post">
            <div class="input-container">
                <label for="user">Usuário</label>
                <input required type="text" name="user" id="" placeholder="Digite o nome de usuário" required>
                <label for="emil">Email</label>
                <input type="email" name="email" id="" placeholder="Digite o email de cadastro" required>
                <label for="password">Senha</label>
                <div class="password-container">
                    <input required type="password" name="password" id="password-input-1" placeholder="Digite a senha" required>
                    <img class="visible-icon" src="./assets/visibility.svg" alt="" id="visible-icon-1">
                </div>
                <label for="password-confirmation">Confirmar Senha</label>
                <div class="password-container">
                    <input required type="password" name="password-confirmation" id="password-input-2" placeholder="Confirme a senha" required>
                    <img class="visible-icon" src="./assets/visibility.svg" alt="" id="visible-icon-2">
                </div>
                <button type="submit">Criar usuário</button>
            </div>
        </form>
    </main>
</body>
</html>