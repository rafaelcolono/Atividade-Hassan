<?php
session_start();

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "seu_banco_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$email = htmlspecialchars($_POST['email']);
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $usuario = $result->fetch_assoc();
    if (password_verify($senha, $usuario['senha'])) {
        $_SESSION['usuario'] = $usuario['nome'] . ' ' . $usuario['sobrenome'];
        $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
        header("Location: index.php");
    } else {
        $_SESSION['erro'] = "Senha incorreta.";
        header("Location: login.php");
    }
} else {
    $_SESSION['erro'] = "Usuário não encontrado.";
    header("Location: login.php");
}

$conn->close();
?>
