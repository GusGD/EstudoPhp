<?php 

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error){
    echo "Error: " . $conn->connect_error;
}
/* INSERINDO NO BANCO
$stmt = $conn->prepare("INSERT INTO tb_usuario (usuario, senha) VALUES (?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "usuario4";
$pass = "senhaaa4";

$stmt->execute();
*/

$result = $conn->query("SELECT*FROM tb_usuario ORDER BY usuario");

$data = array();

while($row = $result->fetch_array()){
    array_push($data, $row);

}

echo json_encode($data);
?>