<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Cliente</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Nesta página, o usuário terá:</h1>
    <ol>
        <li>Uma planilha de controle financeiro</li>
        <li>Os ativos da carteira dele</li>
        <li>Um gráfico mostrando a % de renda fixa, variável, etc., que ele possui.</li>
        <li>Conteúdos de Matemática, Programação, Educação Financeira e Economia</li>
    </ol>
    <button><a href="index.php">Voltar à página inicial!</a></button>
</body>
</html>
