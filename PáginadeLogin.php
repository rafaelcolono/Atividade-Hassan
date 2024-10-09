<?php
// login.php
session_start();

// Verificar se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <button><a href="index.php">Voltar à página inicial!</a></button>
    <section>
        <?php
            if (isset($_SESSION['erro'])) {
                echo "<p style='color:red;'>".$_SESSION['erro']."</p>";
                unset($_SESSION['erro']);
            }
            if (isset($_SESSION['sucesso'])) {
                echo "<p style='color:green;'>".$_SESSION['sucesso']."</p>";
                unset($_SESSION['sucesso']);
            }
        ?>
        <form action="processa_login.php" method="POST">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" placeholder="E-mail" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <button type="submit">Confirmar!</button>
        </form>
        <p>Não possui cadastro? Cadastre-se: <a href="cadastro.php">Cadastre-se!</a></p>
    </section>
</body>
</html>
