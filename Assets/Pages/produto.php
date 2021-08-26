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

include("./Assets/Pages/estoques.php");

if(isset($_GET["id"]) && !empty($_GET["id"])){
    $id = $_GET["id"];
} else {
    return 0;
}

foreach ($produto as $value) {
    if ($value["id"] == $id) {
?>

    <p>
        <?=$value["nome"];?><br />
        <?=$value["image"];?><br />
        <?=$value["contem"];?><br />
        Preço: <?=$value["preco"];?>
    </p>

<?php
    } else {
        //
    }
}
?>

</body>
</html>