<?php 
    // Ler conteúdo de um arquivo e retornar a string que
    // tem dentro desse arquivo
    $string_json = file_get_contents('includes/usuarios.json');

    $usuarios = json_decode($string_json,true);

    var_dump($string_json);

    echo "<pre>";
    print_r($usuarios);
    echo "</pre>";

    // Transformando $usuarios de volta para uma string json
    $string_json = json_encode($usuarios);

    file_put_contents('includes/teste.txt',$string_json);
?>

