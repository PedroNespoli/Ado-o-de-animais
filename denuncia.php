<?php
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $descricao = $_POST["descricao"];

    $msg = "Denúncia enviada com sucesso! 🐾 Obrigado por ajudar!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Denúncia</title>
    <link rel="stylesheet" href="CSS/denuncia.css">
</head>

<body>

<header>
    <h1>🐾 Adote um Amigo</h1>

    <nav>
        <a href="index.html">Home</a>
        <a href="sobre.html">Sobre</a>
        <a href="adoção.html">Adoção</a>
        <a href="contato.html">Contato</a>
    </nav>

    <div class="buttons">
        <a href="login.php" class="login">Entrar</a>
        <a href="cadastro.php" class="signup">Cadastrar</a>
    </div>
</header>

<main>

<form method="POST" class="formulario">

    <h2>Denunciar maus-tratos 🐾</h2>

    <?php if ($msg != ""): ?>
        <p class="sucesso"><?= $msg ?></p>
    <?php endif; ?>

    <input type="text" name="nome" placeholder="Seu nome" required>

    <input type="email" name="email" placeholder="Seu email" required>

    <textarea name="descricao" placeholder="Descreva a situação..." required></textarea>

    <button type="submit">Enviar denúncia</button>

</form>

</main>

<footer>
    <p>© 2026 Adote um Amigo - Todos os direitos reservados</p>
</footer>

</body>
</html>