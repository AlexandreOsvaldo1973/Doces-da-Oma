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

return $produto = array(
    array(
        'id'=> 1,
        'nome' => 'Apfelstrudel',
        'image' => '<img src="./Assets/Images/apfelstrudel.jpg" alt="apfelstrudel" width="350 height="250">',
        'contem' => 'O strudel de maçã é uma sobremesa bastante tradicional do sul da Alemanha, com origens na influência austrí­aca nessa região do país. Trata-se de uma massa folhada recheada de maçãs cortadas, canela, passas e migalhas de pão, cozida no forno e polvilhada com açucar para servir, muitas vezes acompanhada por sorvete de baunilha e chantilly.',
        'preco' => 10.00),
    array(
        'id'=> 2,
        'nome' => 'Berliner',
        'image' => '<img src="./Assets/Images/berliner.jpg" alt="berliner" width="350 height="250">',
        'contem' => 'O berliner é um doce semelhante ao sonho das padarias brasileiras. Trata-se de uma massa frita em formato de bola, normalmente recheada de creme ou geleia e polvilhada com açucar. Berliner em alemão também é como se chamam os cidadãos de Berlim, mas, curiosamente, na cidade o doce é chamado de pfannkuchen, termo que é usado na maior parte do país para se referir a panquecas.',
        'preco' => 5.00),
    array(
        'id'=> 3,
        'nome' => 'Dampfnudeln',
        'image' => '<img src="./Assets/Images/dampfnudeln.jpg" alt="dampfnudeln" width="350 height="250">',
        'contem' => 'Os dampfnudeln são bolinhos assados no forno e posteriormente cozidos na panela com leite, formando uma crosta. Podem ser servidos recheados com compotas de frutas ou creme de baunilha, perfeitos para acompanhar um café.',
        'preco' => 30.00),
    array(
        'id'=> 4,
        'nome' => 'Donauwelle',
        'image' => '<img src="./Assets/Images/donauwelle.jpg" alt="donauwelle" width="350 height="250">',
        'contem' => 'Donauwelle é um bolo gelado composto de camadas de massa de pão de ló e chocolate, cobertas creme de manteiga e cereja, finalizado com uma crosta de chocolate.  Seu nome em alemão significa ondas do Danúbio, em referência ao rio mais longo da Europa.',
        'preco' => 10.00),
    array(
        'id'=> 5,
        'nome' => 'Eierschecke',
        'image' => '<img src="./Assets/Images/eierschecke.jpg" alt="eierschecke" width="350 height="250">',
        'contem' =>'O Eierschecke é uma sobremesa tradicional da cidade de Dresden, com sabores tí­picos da região da Saxônia em que está localizada. A receita é composta de maçã, coalhada e sementes de papoula, em formato retangular.  ',
        'preco' => 20.00),
    array(
        'id'=> 6,
        'nome' => 'Lebkuchen',
        'image' => '<img src="./Assets/Images/lebkuchen.jpg" alt="lebkuchen" width="350 height="250">',
        'contem' =>'Tí­picos do Natal alemão, os lebkuchen são uma espécie de biscoito doce ou pão de mel fino, feitos com farinha, ovos, açucar, mel, especiarias, nozes e frutas cristalizadas. Eles podem ser encontrados em feiras e festas tradicionais da Alemanha, e são normalmente servidos em formato de coração, decorados com confeitos coloridos e frases divertidas, tornando-se atÃ© um souvenir para os turistas.',
        'preco' => 1.00),
    array(
        'id'=> 7,
        'nome' => 'Nussschnecken',
        'image' => '<img src="./Assets/Images/nussschnecken.jpg" alt="anussschnecken" width="350 height="250">',
        'contem' =>'Encontrado nas padarias, o doce é uma massa de pão folhada, recheada e coberta por glacê, nozes, avelã ou amêndoas. Há variados tipos deles, como o Nussschnecken (caracol de nozes) e Mohnschecken (caracol de semente de papoula).',
        'preco' => 10.00),
    array(
        'id'=> 8,
        'nome' => 'Ofenschlupfer',
        'image' => '<img src="./Assets/Images/ofenschlupfer.jpg" alt="ofenschlupfer" width="350 height="250">',
        'contem' =>'Ofenschlupfer é um pudim de pão com maçãs. Ele é feito com pedaços de pão cortados intercalados com pedaços de maçã e nozes, posteriormente cobertos com ovos e leite, e assados no forno por 30 minutos. A sobremesa pode ser servida acompanhada de creme de baunilha.',
        'preco' => 15.00),
    array(
        'id'=> 9,
        'nome' => 'Rote Grutze',
        'image' => '<img src="./Assets/Images/rote_grutze.jpg" alt="rote_grutze" width="350 height="250">',
        'contem' =>'Essa sobremesa é bastante tradicional dos poucos dias de calor do norte da Alemanha ao longo do ano. Trata-se de uma compota de frutas vermelhas (morangos, cerejas e framboesas) servidas com sorvete de creme ou chantilly.',
        'preco' => 30.00),
    array(
        'id'=> 10,
        'nome' => 'Shwarzwalder Kirschtorte',
        'image' => '<img src="./Assets/Images/shwarzwalder_kirschtorte.jpg" alt="shwarzwalder_kirschtorte" width="350 height="250">',
        'contem' =>'O Schwarzwalder Kirschtorte é o famoso bolo Floresta Negra, tí­pico da região da Floresta Negra no sudoeste da Alemanha (Schwarzwalder), feito com licor de cerejas ginja que são encontradas por lá¡, e dão o sabor caracterí­stico da sobremesa. O bolo possui várias camadas de chocolate, com creme de chantilly e cerejas intercalados, que, junto com o licor, garantem um sabor inigualável.',
        'preco' => 10.00),
    array(
        'id'=> 11,
        'nome' => 'Stollen',
        'image' => '<img src="./Assets/Images/stollen.jpg" alt="stollen" width="350 height="250">',
        'contem' =>'O stollen é um bolo tradicional de frutas secas coberto com manteiga e açucar de confeiteiro, comumente consumido na Alemanha durante o Natal. É semelhante ao panetone dos natais brasileiros, com a massa menos elástica e o formato mais achatado.',
        'preco' => 20.00),
    array(
        'id'=> 12,
        'nome' => 'Waffle ou Waffel',
        'image' => '<img src="./Assets/Images/waffle-waffel.jpg" alt="waffle-waffel" width="350 height="250">',
        'contem' =>'O waffel foi importado da Bélgica e amplamente servido no café da manhã, lanche da tarde, sobremesa e vendidos nos mercados de natal. A versão tradicional consiste na massa prensada e servida com açúcar de confeiteiro. Porém, podem ser encontradas versões com cereja, calda de frutas vermelhas, nutella e morango, acompanhadas de sorvete de baunilha ou chantilly.',
        'preco' => 5.00),
);

?>
</body>
</html>