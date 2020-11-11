<?php 

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuario (usuario, senha) 
VALUES (:LOGIN,:PASSWORD)");

$login = "Gustavo PDO2";
$password = "123489";

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);

$stmt -> execute();

echo "inserido OK";




?>