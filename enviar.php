<?php
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $texto = $_POST["mensagem"];

    $mensagem = "Mensagem enviada com sucesso! 🐾";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="CSS/enviar.css">
</head>

<body>

<header>
    <h1>🐾 Adote um Amigo</h1>

    <nav>
        <a href="index.html">Home</a>
        <a href="sobre.html">Sobre</a>
        <a href="adoção.html">Adoção</a>
        <a href="contato.php">Contato</a>
    </nav>

    <div class="buttons">
        <a href="login.html" class="login">Entrar</a>
        <a href="cadastro.html" class="signup">Cadastrar</a>
    </div>
</header>

<main>

<form method="POST" class="formulario">

    <h2>Fale com a gente 💌</h2>

    <?php if ($mensagem != ""): ?>
        <p class="sucesso"><?= $mensagem ?></p>
    <?php endif; ?>

    <input type="text" name="nome" placeholder="Seu nome" required>

    <input type="email" name="email" placeholder="Seu email" required>

    <textarea name="mensagem" placeholder="Digite sua mensagem..." required></textarea>

    <button type="submit">Enviar mensagem</button>

</form>

</main>

<footer>
    <p>© 2026 Adote um Amigo - Todos os direitos reservados</p>
</footer>

</body>
</html>