<?php 
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    //die();

    // Includes
    include("../includes/functions.php");
    
    // Definindo o valor para login
    $loginOk = true;

    // Verificar se o form de login foi enviado
    if($_POST){
        
        // Buscar um usuário com o email enviado no $_POST['email']
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $usuarios = carregaUsuarios();

        foreach($usuarios as $usuario){
            
            // testando se usuário com o email passado
            if($usuario['email'] == $email){
                
                // Usuário está ok. Testar senha
                // if($usuario['senha'] == $senha){
                if(password_verify($senha,$usuario['senha'])){
                    
                    // Iniciar a session
                    session_start();

                    // Criando a session para o usuário
                    $_SESSION['email'] = $usuario['email'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['imagem'] = $usuario['imagem'];
                    $_SESSION['telefone'] = $usuario['telefone'];

                    // Redirecionando para a página que lista usuarios
                    header('location: ../usuarios/list-usuarios.php');

                }
            }
        }

        $loginOk = false;

        // Se não achar usuário, mostrar erro
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="email"><input id="email" name="email" type="text" placeholder="E-mail"></label>
        <label for="senha"><input id="senha" name="senha" type="password" placeholder="Senha"></label>
        <?= ($loginOk?'':'<span class="error">Falha no login</span>'); ?>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>