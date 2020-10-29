<?php 
$condicao = true;

while($condicao){
    $numero = rand (1,10);

    if($numero ===3) {
        echo "TrÊs";
        $condicao = false;
    }
    echo $numero . " ";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$total = 300;
$desconto = 0.9;

//executa mesmo se for false 
do {
    $total *= $desconto;

} while ($total > 100);
echo $total;
?>