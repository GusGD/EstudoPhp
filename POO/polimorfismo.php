<?php 

abstract class Animal{

    public function falar(){
        return "Som";
    }

    public function comer(){
        return "Alimento";
    }

    public function mover(){
        return "Anda";
    }
} 

class Cachorro extends Animal{
    
    public function falar(){
        return "Late";
    }

    public function comer(){
        return "Ração de Cachorro";
    }

    public function mover(){
        return "Anda";
    }
}

class Passarinho extends Animal{
    
    public function falar(){
        return "Pia";
    }

    public function comer(){
        return "Minhoca";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}

$pintinho = new Passarinho();
$bolinha = new Cachorro();

echo $pintinho->falar() . "<br/>";
echo $pintinho->comer() . "<br/>";
echo $pintinho->mover() . "<br/>";
echo "<br/>";
echo "<br/>";
echo $bolinha->falar() . "<br/>";
echo $bolinha->comer() . "<br/>";
echo $bolinha->mover() . "<br/>";
?>