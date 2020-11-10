<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Gustavo de Oliveira");
$cad->setEmail("go_gustavo@Outlook.com");
$cad->setSenha("123456789");
echo $cad;

echo "<br>";
echo "<br>";
echo "---------------------------------------------------------------------------------------------------";
echo "<br>";
echo "<br>";


$cad->registrarVenda();

?>