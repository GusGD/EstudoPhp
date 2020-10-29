<?php 
    //operadores de string
    // = atribuidor de valor
    //$nome = "Gustavo";
    //echo "<br/>";
    // . concatenação
    //echo $nome . " ". "mais algumas coisa ";
    // a variavel tem o valor dela e mais alguma coisa
    //echo "<br/>";
    //$nome .= " treinamentos";
    //echo $nome;
    //echo "<br/>";
?>

<?php 
//echo "<br/>";
    //$valorTotal = 0;
    //$valorTotal += 100;
    //$valorTotal += 25;
    //$valorTotal *= 1.9;
    //echo $valorTotal;
?>

<!-- ============= OPERADORES SPACE  ============= -->
<?php 
    //echo "<br/>";
    //$a = 135;
    //$b = 135;
    //var_dump($a <=> $b);
?>
<?php 
    $a = NULL;
    $b = NULL;
    $c = 20;
    //mostra pra mim A, mas se não existir me mostre B,
    //se não me mostre C
    echo $a ?? $b ?? $c;
    echo "<br/>";
    echo "<br/>";
?>

<?php 
    $a = NULL;
    $b = 8;
    $c = 20;
    //mostra pra mim A, mas se não existir me mostre B,
    //se não me mostre C
    //por existir o b ele vai mostrar 8
    echo $a ?? $b ?? $c;
?>