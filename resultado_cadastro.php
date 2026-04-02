<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro realizado com sucesso!</h1>

<div class="resultado">
      <div class="campo"><span class="label">Nome:</span> <?= htmlspecialchars($_POST['nome'] ?? '—') ?></div>
        <div class="campo"><span class="label">E-mail:</span> <?= htmlspecialchars($_POST['email'] ?? '—') ?></div>
        <div class="campo"><span class="label">CPF:</span> <?= htmlspecialchars($_POST['cpf'] ?? '—') ?></div>
        <div class="campo"><span class="label">Telefone:</span> <?= htmlspecialchars($_POST['telefone'] ?? '—') ?></div>
</div>

<p><a href="index.html" class="voltar">← Voltar para a página inicial</a></p>
</body>
</html>