<?php

    $json ='[{"nome":"Gustavo","idade":22},
            {"nome":"Oliveira","idade":22}]';
    $data = json_decode($json, true);

    var_dump($data);
?>