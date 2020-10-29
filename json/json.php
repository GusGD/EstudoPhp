<?php 

    $pessoas = array();

    array_push($pessoas, array(
        'nome'=>'Gustavo',
        'idade'=>22
    ));
    
    array_push($pessoas, array(
        'nome'=>'Oliveira',
        'idade'=>22
    ));
    echo json_encode($pessoas);
?>