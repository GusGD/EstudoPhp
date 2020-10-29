<?php 
/*    $a = 10;

    function trocaValor($a){
        $a += 50;
        return $a;
    }
    echo trocaValor ($a);
    echo "<br>";
    echo $a;*/
    $pessoa = array(
        'nome' => 'Gustavo',
        'idade' => 22
    );
    foreach ($pessoa as &$value){
        if(gettype($value)=== 'integer')$value += 20;
        echo $value."<br>";
    }

    print_r($pessoa);
?>

