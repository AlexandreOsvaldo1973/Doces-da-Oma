<?php

$lugar = "Platz 1, 60313 Frankfurt am Main, Deutsch";
 
$maps = "https://www.google.com/maps/place/Gugelhupf+%26+Du/data=!4m5!3m4!1s0x47bd0ffd8235adff:0x96a736ccc94f9c00!8m2!3d50.1151442!4d8.6801421?authuser=0&hl=pt-BR&rclk=1".$lugar;

echo "<img src='./Assets/Images/doces.jpg' alt='doces' width='550' height='400' ><br />
<a href={$maps} target=_blank rel='noopener noreferrer'><p>Veja no mapa</p></a>"

/*echo "<a href='https://www.google.com/maps/place/Gugelhupf+%26+Du/data=!4m5!3m4!1s0x47bd0ffd8235adff:0x96a736ccc94f9c00!8m2!3d50.1151442!4d8.6801421?authuser=0&hl=pt-BR&rclk=1'>Localização</a>";*/
?>