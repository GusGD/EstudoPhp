<?php 
    //valores obrigatorios sempre a esquerda
    function ola($texto = "muundo", $periodo = "dia"){
        return "ola $texto $periodo <br>";
    }
    echo ola();
    echo ola("", "Noite");
    
    echo ola("", "Tarde");
?>