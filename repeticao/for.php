<?php


    //for ($contador = 0; $contador <= 1000; $contador+=10){
        //nao exibir do 200 ao 800
    //    if ($contador >=200 && $contador <=800) continue;
      //  if ($contador === 900) break;
        //echo $contador . "<br>";
    //}
        //LOO INFINITO
    //for ($i = 0; $i < 10; $i--){
    //    echo $i . " ";
    //}

    // SELECT HTML
    echo "<select>";
        for ($i = date("Y"); $i >= date("Y")-100 ; $i--){
            echo '<option value="' . $i .'">' .$i. '</option>';
        }
    echo "</select>";
?>