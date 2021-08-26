<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./Assets/CSS/estilo.css">
    <title>Doces da Oma</title>
</head>
<body>
    <header>
        <img src="./Assets/Images/omalogo.jpg" alt="oma" width="120" height="150" style="float: left;" >
        <h1>Doces da Oma</h1>
        <nav>
            <div id="all">
                <ul class="menu">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="index.php?pagina=Assets/Pages/produtos.php">Nossos Produtos</a></li>
                    <li><a href="index.php?pagina=Assets/Pages/historia.php">Quem somos</a></li>
                    <li><a href="index.php?pagina=Assets/Pages/contato.php">Entre em Contato</a></li>
                    <li><a href="index.php?pagina=Assets/Pages/local.php">Onde estamos</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <?php

            if(isset($_GET["pagina"]) && !empty($_GET["pagina"])){
                $pagina = $_GET["pagina"];
                include ($pagina);
            } else {
                echo "<h1>Com amor e carinho</h1><br/>
                <p>O Doces da Oma conta com uma equipe simpática de funcionários treinados para atender ao seu paladar.<br/>
                Cardápios que vão desde café colonial a almoço ou jantares, casamentos ou até mesmo uma reunião de família o Doces da Oma vai até você.<br/>
                Acesse nossas páginas no instagram@docesdaoma ou Facebook/docesdaoma<br/>
                Também atendemos pelo Whats (41) 99660077
                </p>";
            }
        ?>

    </main>

    <footer><p>Unicesumar - Sistemas para Internet</p><p>Alexandre Osvaldo</p><p>R.A.200139525</p></footer>
</body>
</html>