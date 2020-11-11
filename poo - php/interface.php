<?php 
//INTERFACE PARA ORGANIZAR O CÓDIGO
//QUANDO HÁ COMUNICAÇÃO COM TERCERIOS

interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo{

    public function acelerar($velocidade){
        echo "O Veículo acelerou até " . $velocidade . "km/h";
    }

    public function frenar($velocidade){
        echo "O Veículo frenou até " . $velocidade . "km/h";
    } 

    public function trocarMarcha($marcha){
        echo "O Veículo engatou a marcha " . $marcha;
    } 
}

$carro = new Civic();
$carro->trocarMarcha (3);
echo "<br/>";
$carro->acelerar(100);
echo "<br/>";
$carro->trocarMarcha(2);
echo "<br/>";
$carro->frenar(40);

?>