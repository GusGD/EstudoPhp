<?php 

$conn= new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuario 
                        SET usuario = :LOGIN,
                        senha = :PASSWORD
                        WHERE id = :ID");

$login = "Gustavo PDO - UPDATE";
$password = "updatePDO";
$id = 4;

$stmt -> bindParam(":LOGIN", $login);
$stmt -> bindParam(":PASSWORD", $password);
$stmt -> bindParam(":ID", $id);

$stmt -> execute();

echo "alteração OK";




?>