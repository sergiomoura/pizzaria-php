<?php 

    // Includes
    include('../includes/functions.php');

    // Carregando usuários
    $usuarios = carregaUsuarios();

    // Mostrar usuários
    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";

?>