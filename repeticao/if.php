<?php 

$idadeMinha = 66;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($idadeMinha < $idadeCrianca){
    echo "crianca";
}else if ($idadeMinha < $idadeMaior){
    echo "adolescente";
}else if ($idadeMinha < $idadeMelhor) {
    echo "adulto";
}else {
    echo "idoso";
}

echo "<br>";
//Usar isso apenas para condições simples
echo($idadeMinha < $idadeCrianca)?"menor de idaide" : "maior de idade";

echo "<br>";
echo "<br>";
echo "<br>";

$salario = 10000;

if ($salario <= 1200){
    echo "pouco";
}else if ($salario <= 10000){
    echo "razoável";
}else if ($salario <= 15000){
    echo "alto";
}else {
    echo "muito altoo";
}

?>