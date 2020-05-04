<?php 

    // Iniciar a session
    session_start();
    
    // Testar se tem session para esse visitante
    if(!$_SESSION){

        // Visitante não tem session.
        // Redirecionando para página de login
        header('location: ../login/login.php');

    }

    // Includes
    include('../includes/functions.php');

    // Carregando usuários
    $usuarios = carregaUsuarios();

    // Mostrar usuários
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Seja bem vind(o), <?= $_SESSION['nome'] ?></h1>
    <?php 
        echo "<pre>";
        print_r($usuarios);
        echo "</pre>";
    ?>
</body>
</html>