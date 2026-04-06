<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    
    <link rel="stylesheet" href="css/cadastro.css">
</head>

<body>
    <h1></h1>

<form action="resultado_cadastro.php"></form>

<form method="POST" class="formulario">

    <h2>Cadastro 💌</h2>

<label for="name">Nome completo</label>
<input type="text" id="nome" name="nome" required>  

<label for="email">Email</label>
<input type="text" id="" name="" required >

<label for="cpf">Cpf (somente o números)</label>
<input type="text" id="" name="" pattern="\d{11}" maxlength="11" required >

<label for="telefone">Telefone / WhatsApp</label>
<input type="text" id="" name="" required >

<button type="subimt" class="btn" > Cadastrar </button>

</form> 

</body>
</html>