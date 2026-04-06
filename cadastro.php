<?php
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>

<header>
    <div class="logo">🐾 Adote <span>um Amigo</span></div>

    <nav>
        <a href="index.html">Home</a>
        <a href="sobre.html">Sobre</a>
        <a href="adoção.html">Adoção</a>
        <a href="contato.html">Contato</a>
    </nav>

    <div>
        <a href="login.php" class="btn btn-entrar">Entrar</a>
        <a href="cadastro.php" class="btn btn-cadastrar">Cadastrar</a>
    </div>
</header>

<main>

<form method="POST" class="formulario">

    <h2>Cadastro 💌</h2>

    <label>Nome completo</label>
    <input type="text" name="nome" required>  

    <label>Email</label>
    <input type="email" name="email" required>

    <label>CPF (somente números)</label>
    <input type="text" name="cpf" pattern="\d{11}" maxlength="11" required>

    <label>Telefone / WhatsApp</label>
    <input type="text" name="telefone" required>

    <button type="submit" class="btn">Cadastrar</button>

</form>

</main>

<footer>
    <p>© 2026 Adote um Amigo - Todos os direitos reservados</p>
</footer>

</body>
</html>