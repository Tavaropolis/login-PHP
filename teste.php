<?php
$db = new SQLite3("db.db");
            

    $usuario = strip_tags('teste');
    $email = strip_tags('teste@teste.com.br');
    $password = 'password';
    
    //Checando se o email já está cadastrado
    $resultado = $db->query(" SELECT email from Users where email = '$email' ");
    
    echo var_dump($resultado[0]);
    // $usuarios = [];
    //     if($resultado != $email) {                   
            
    //         //Inserindo os dados no banco
    //         echo "INSERT INTO Users ('email', 'password', 'usuario') VALUES ('{$email}', '{$password}', '{$usuario}')";
            
    //         echo "Usuario cadastrado com sucesso 🙂";
            
    //     } else {
    //         echo "Email já cadastrado";
    //     }