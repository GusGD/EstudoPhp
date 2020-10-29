<?php 
    function ola($texto = "muundo", $periodo = "dia"){
        $argumentos = func_get_args();

        return $argumentos;
    }
    var_dump(ola("teste", 10))
?>