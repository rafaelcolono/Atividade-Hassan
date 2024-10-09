<?php

session_start();

if (!isset($_SESSION['usuario']) || $_SESSION['tipo_usuario'] !== 'ADM') {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do ADM</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Você só vai conseguir acessar esta página se seu usuário de login e senha forem de ADM.</h1>
    <p>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</p>
    <button><a href="index.php">Voltar à página inicial!</a></button>
</body>
</html>
