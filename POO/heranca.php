<?php 

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }


}

class CPF extends Documento{
    public function validar():bool{
        //validação do CPF
        $numeroCPF = $this->getNumero();

        return true;

    }
}

$documento = new CPF();

$doc->setNumero("111222333-44");
$doc->validar();
?>