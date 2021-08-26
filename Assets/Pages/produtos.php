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

include("estoques.php");

foreach ($produto as $value) {
?>
    <nav>
        <ul>
            <li>
                <p><a href="index.php?pagina=Assets/Pages/produto.php&id=<?=$value ["id"];?>"><?=$value["nome"];?></a></p></a>
            </li>
        </ul>
    </nav>
<?php
}
?>
</body>
</html>