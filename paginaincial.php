<?php

session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Esta é a Home Page</h1>
    <p>Aqui, você vai inserir todos os dados do seu produto ou serviço.</p>
    <nav>
        <ul>
            <?php if (isset($_SESSION['usuario'])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php if ($_SESSION['tipo_usuario'] === 'ADM'): ?>
                    <li><a href="adm.php">Página do ADM</a></li>
                <?php endif; ?>
                <li><a href="cliente.php">Página do Cliente</a></li>
            <?php else: ?>
                <li><a href="login.php">Faça seu login!</a></li>
                <li><a href="cadastro.php">Faça seu cadastro!</a></li>
            <?php endif; ?>
            <li><a href="contato.php">Entre em contato!</a></li>
            <li><a href="#">Veja meus trabalhos!</a></li>
        </ul>
    </nav>
    <section>
        <main>
            <h2>Meus conteúdos</h2>
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quos deleniti nostrum sunt ipsa harum nihil tenetur eius illo rem, sed alias! Laudantium ipsam eveniet doloremque alias voluptate error magni.</p>
            </div>
        </main>
    </section>
</body>
</html>
