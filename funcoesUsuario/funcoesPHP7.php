<?php 
//Tipos escalares
function soma (float ...$valores){
    
    return array_sum($valores);
}
echo var_dump (soma(4, 5));
echo "<br>";

echo soma(5.9, 6.7);
echo "<br>";echo "<br>";echo "<br>";
?>

<?php 
//Tipos escalares
function soma1 (float ...$valores1):string{
    
    return array_sum($valores1);
}
echo var_dump (soma1(4, 5));
echo "<br>";

echo soma1(5.9, 6.7);

?>