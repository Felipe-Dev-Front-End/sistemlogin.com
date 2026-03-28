<?php

if (isset($_POST['submit'])) {
    // print_r('Nome: '. $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Senha: ' . $_POST['senha']);
    // print_r('<br>');
    // print_r('Telefone: ' . $_POST['telefone']);
    // print_r('<br>');
    // print_r('Gênero: ' . $_POST['genero']);
    // print_r('<br>');
    // print_r('Data de Nascimento: ' . $_POST['dataNasc']);
    // print_r('<br>');
    // print_r('Endereço: ' . $_POST['endereco']);
    // print_r('<br>');
    // print_r('Cidade: ' . $_POST['cidade']);
    // print_r('<br>');
    // print_r('Estado: ' . $_POST['estado']);
    // print_r('<br>');
    // print_r('País: ' . $_POST['nacionalidade']);
    // print_r('<br>');

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $dataNasc = $_POST['dataNasc'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $nacionalidade = $_POST['nacionalidade'];

    $result = mysqli_query($conexao, "INSERT INTO acesso(nome,email,senha,telefone,genero,dataNasc,endereco,cidade,estado,nacionalidade) 
    VALUES('$nome', '$email', '$senha', '$telefone', '$genero', '$dataNasc', '$endereco', '$cidade', '$estado', '$nacionalidade')");
    header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylee.css">
    <title>Criar Cadastro</title>
</head>

<body>
    <div class="container-form">
        <div class="boxform">

            <form action="formulario.php" method="POST">
                <fieldset>
                    <legend>Registro</legend>
                    <div class="box">

                        <div class="boxInput">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label class="labelInput" for="nome">Nome</label>
                        </div>

                        <div class="boxInput">
                            <input type="text" name="email" id="email" class="inputUser" required>
                            <label class="labelInput" for="email">Email</label>
                        </div>

                        <div class="boxInput">
                            <input type="password" name="senha" id="senha" class="inputUser" required>
                            <label class="labelInput" for="senha">Senha</label>
                        </div>

                        <div class="boxInput">
                            <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                            <label class="labelInput" for="telefone">Telefone</label>
                        </div>

                        <div class="genero">
                            <p>Gênero</p>
                            <input type="radio" name="genero" id="feminino" value="feminino">
                            <label for="feminino">Feminino</label>

                            <input type="radio" name="genero" id="masculino" value="masculino">
                            <label for="masculino">Masculino</label>

                            <input type="radio" name="genero" id="outro" value="outro">
                            <label for="outro">Outro</label>
                        </div>

                        <div class="dataNasc">
                            <label for="dataNasc">Data de Nascimento</label>
                            <input type="date" name="dataNasc" id="dataNasc" required>
                        </div>

                        <div class="boxInput">
                            <input type="text" name="endereco" id="endereco" class="inputUser" required>
                            <label class="labelInput" for="endereco">Endereço</label>
                        </div>

                        <div class="boxInput">
                            <input type="text" name="cidade" id="cidade" class="inputUser" required>
                            <label class="labelInput" for="cidade">Cidade</label>
                        </div>

                        <div class="boxInput">
                            <input type="text" name="estado" id="estado" class="inputUser" required>
                            <label class="labelInput" for="estado">Estado</label>
                        </div>

                        <div class="boxInput">
                            <input type="text" name="nacionalidade" id="nacionalidade" class="inputUser" required>
                            <label class="labelInput" for="nacionalidade">País</label>
                        </div>
                        <input type="submit" id="submit" name="submit" value="Enviar">
                    </div>
                    <a href="index.php">Já Tem Cadastro ??</a>
                </fieldset>
            </form>
        </div>
    </div>
</body>

</html>