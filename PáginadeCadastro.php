<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <button><a href="index.php">Voltar à página inicial!</a></button>
    <div class="container">
        <form action="processa_cadastro.php" method="POST">
            <h2>Cadastro de Cliente</h2>
            
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="sobrenome">Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" pattern="[0-9]{2}-[0-9]{5}-[0-9]{4}" placeholder="xx-xxxxx-xxxx" required>

            <label for="data_nascimento">Data de Nascimento:</label>
            <input type="date" id="data_nascimento" name="data_nascimento" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" minlength="8" required>

            <label for="confirma_senha">Confirmar Senha:</label>
            <input type="password" id="confirma_senha" name="confirma_senha" minlength="8" required>

            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
