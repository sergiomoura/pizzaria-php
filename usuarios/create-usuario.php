<?php

    // Valores padrãos
    $nome = '';
    $endereco = '';
    $senha = '';
    $confirmacao = '';

    // Variáveis de controle de erro
    $nomeOk = true;
    $enderecoOk = true;
    $senhaOk = true;


    // Verificar se o usuário enviou o formulário
    if($_POST){

        // Guardando o nome em $nome
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $senha = $_POST['senha'];
        $confirmacao = $_POST['confirmacao'];
        
        // Validando o nome
        if( strlen($_POST['nome']) < 5){
            $nomeOk = false;
        }

        // Validando o endereço
        if( strlen($endereco) < 20 ){
            $enderecoOk = false;
        }

        // Validando senha
        if(strlen($senha) < 5 || $senha != $confirmacao){
            $senhaOk = false;
        }

        // Se tudo estiver ok, salva o usuário e redireciona para 
        // um dado endereço
        // if($senhaOk && $nomeOk && $enderecoOk){
        //     addUsuario($nome, $telefone, $email, $endereço, $senha, $imagem);

        // }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pizzaria Fantástica</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<link rel="stylesheet" href="../css/form-usuario.css">
	<form id="form-usuario" method="POST">
		<label>
            Nome:
            <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?= $nome ?>">
            <?= ($nomeOk ? '' : '<span class="erro">Preencha o campo com um nome válido</span>');  ?>
        </label>
		<label>
            Telefone:
            <input type="text" name="telefone" id="telefone" placeholder="Digite seu telefone">
        </label>
		<label>
            E-mail:
            <input type="email" name="email" id="email" placeholder="Digite seu email">
        </label>
		<label>
            Endereço:
            <input type="text" name="endereco" id="endereco" placeholder="Digite seu endereco" value="<?= $endereco ?>">
            <?= ($enderecoOk ? '' : '<span class="erro">Preencha o campo com um pelo menos 20 caracteres</span>');  ?>
        </label>
		<label>
            Senha:
            <input type="password" name="senha" id="senha" placeholder="Digite uma senha" value="<?= $senha ?>">
            <?= ($senhaOk ? '' : '<span class="erro">Senha inválido</span>');  ?>
        </label>
		<label>
            Confirmação:
            <input type="password" name="confirmacao" id="confirmacao" placeholder="Confirme a senha digitada" value="<?= $confirmacao ?>">
        </label>
		<label>
            <img src="../img/no-image.png" id="foto-carregada">
            <div>Clique para selecionar sua foto</div>
            <input type="file" name="foto" id="foto">
        </label>
        <div class="controles">
            <button type="reset" class="secondary">Resetar</button>
            <button type="submit" class="primary">Cadastrar-se!</button>
        </div>
    </form>
    <script>
        document.getElementById("foto").onchange = (evt) => {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("foto-carregada").src = e.target.result;
            };
            reader.readAsDataURL(evt.target.files[0]);
        };
    </script>
</body>
</html>