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

$nome = htmlspecialchars($_POST['nome']);
$sobrenome = htmlspecialchars($_POST['sobrenome']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
$data_nascimento = $_POST['data_nascimento'];
$senha = $_POST['senha'];
$confirma_senha = $_POST['confirma_senha'];

if ($senha !== $confirma_senha) {
    $_SESSION['erro'] = "As senhas não conferem.";
    header("Location: cadastro.php");
    exit();
}

$senha_hash = password_hash($senha, PASSWORD_BCRYPT);

$sql = "INSERT INTO usuarios (nome, sobrenome, email, telefone, data_nascimento, senha, tipo_usuario)
        VALUES ('$nome', '$sobrenome', '$email', '$telefone', '$data_nascimento', '$senha_hash', 'CLIENTE')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['sucesso'] = "Cadastro realizado com sucesso! Faça login.";
    header("Location: login.php");
} else {
    $_SESSION['erro'] = "Erro: " . $sql . "<br>" . $conn->error;
    header("Location: cadastro.php");
}

$conn->close();
?>
