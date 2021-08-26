<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/estilo.css">
</head>
<body>

<?php
    
    echo "<p>Entre em contato conosco, será um prazer atendê-los!</p>"


?>

<form action='entreEmContato.php' method='$_POST'>
    <label for='nome'><p>Nome:</p></label>
    <input type='text' name='nome' placeholder='Informe seu nome'/><br />
    <label for='email'><p>E-mail:</p></label>
    <input type='email' name='email' placeholder='Informe seu e-mail'/><br />
    <label for='telefone'><p>Telefone:</p></label>
    <input type='number' name='telefone' placeholder='Informe seu telefone'/><br />
    <label for='mensagem'><p>Mensagem:</p></label>
    <textarea name='mensagem' placeholder='Deixe sua mensagem'></textarea><br />
    <input type='submit' value='Enviar' />
</form>

</body>
</html>