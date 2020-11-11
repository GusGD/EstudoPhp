<?php 
//SE TUDO DA CERTO VC CONFIRMA
//SE TUDO DA ERRADO VC RETORNA

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuario
                        WHERE id = ?");

$id = 3;

$stmt->execute(array($id));

//cancelar processo de exclusão
//$conn->rollback();

//confirmar exclusãp
//$conn->commit();


echo "delete OK";

?>