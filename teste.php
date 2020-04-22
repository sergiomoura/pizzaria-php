<?php 
    /**
     * Nessa parte você deve incluir os arquivos
     * pizzas.php e o functions php para realizar
     * os testes das funções desenvolvidas em
     * functions.php
     */

    include("includes/pizzas.php");
    include("includes/functions.php");

    $pizzas = pizzasSemDestaque();

    echo "<pre>";
    print_r($pizzas);
    
?>