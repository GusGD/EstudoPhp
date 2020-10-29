<?php 

$ts = strtotime("1998-09-17");
echo date("l, d/m/Y", $ts);
echo "<br>";
echo"<br>";
echo "<hr>";
//DATA DE HOJE
$ts1 = strtotime("now");
echo date("l, d/m/Y", $ts1);
//DATA DE AMANHA
echo "<br>";
echo"<br>";
echo "<hr>";
$ts2 = strtotime("+1 day");
echo date("l, d/m/Y", $ts2);
//DATA  MÊS
echo "<br>";
echo"<br>";
echo "<hr>";
$ts3 = strtotime("+1 week");
echo date("l, d/m/Y", $ts3);
//DATA ANO
echo "<br>";
echo"<br>";
echo "<hr>";
$ts4 = strtotime("+1 year");
echo date("l, d/m/Y", $ts4);
?>