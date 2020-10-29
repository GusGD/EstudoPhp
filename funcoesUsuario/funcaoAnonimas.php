<?php 

    function test($callback){
        //processo lento
        $callback();
    }
test(function(){
    echo "terminou";
});

    echo "<br>";
    echo "<br>";
    echo "Funcao dentro da variavel";
    echo "<br>";
    echo "<br>";

    $fn = function($a){
        var_dump($a);
    };
    
$fn("oi");
?>