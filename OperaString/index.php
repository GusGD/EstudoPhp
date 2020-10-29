<?php 
    //$nome = "Gustavo";
    //echo $nome;
    //echo "<br/>"
    //var_dump($nome);
?>

<?php /* 
//unser retira da memoria a variável
$nome = "Gustavo";
echo $nome;
echo "<br/>";
$nomeUnset = "Oliveira";
echo $nome  . " " . $nomeUnset;

unset($nomeUnset);
echo "<br/>";
echo "a variável nomeUnset passou pelo unset";
echo $nomeUnset;
echo "para tirar o notice a solução é passar pelo if isset";
echo "<br/>";
if (isset($nomeUnset)){
    echo "ela existe";
}
else {echo "a variável nomeUnset foi removida da memória e 
    ela não existe mais";
}
echo "<br/>";echo "<br/>";echo "<br/>";

if (isset($nome)){
    echo "a variável nome não passou foi removida da memória e 
    ela existe";
}
else {
    echo "a variável nomeUnset foi removida da memoria e 
    ela nao existe mais";
}
*/?>
<!-- ============= ARRAY ============= -->

<?php 
/* $nome = "Gustavo";
    $site = 'Oliveira';
    $ano = 1998;
    $salario = 4500.00;
    $bloqueado = false;
    $frutas = array("maçã","abacaxi","laranja", "limão");
    //echo $frutas[3];
    //echo "<br/>";

    $nascimento = new DateTime();
    //var_dump($nascimento);

    $arquivo = fopen("index.php", "r");
    //var_dump($arquivo)
    $nulo = NULL;*/
?>
<!-- ============= ARRAY ============= -->

<!-- ============= GET STRING ============= -->
<?php 
    // a variavel super global GET vai ter todas as variaveis
    //que receberemos da URL 
    //QueryString dividi A URL para VARIAVEL
    //O simbolo da queryString que dividi é o ?
    //$nome = $_GET["a"];
    //QueryString http://localhost/estudoPHP/?a=gustavo
    //todo informação que vir por get ou post sempre será STRING 
    //var_dump($nome);
?>

<!-- ============= GET INT ============= -->
<?php 
    // a variavel super global GET vai ter todas as variaveis
    //que receberemos da URL 
    //QueryString dividi A URL para VARIAVEL
    //O simbolo da queryString que dividi é o ?
    //$nome = (int)$_GET["b"];
    //QueryString http://localhost/estudoPHP/?a=gustavo
    //todo informação que vir por get ou post sempre será STRING 
    //var_dump($nome);
?>

<!-- ============= VER O IP DO USUARIO  para criar LOG============= -->
<?php /*
    $ip = $_SERVER["REMOTE_ADDR"];
    $pasta = $_SERVER["SCRIPT_NAME"];
    echo $ip . " " . $pasta;*/
?>

<!-- ============= ESCOPO DE VARIAVEL ============= -->
<?php 
    $nome = "Gustavo";

    function teste(){
        global $nome;
        echo $nome;
        echo "<br/>";
    }
    

    function teste2(){
        $nome = "João";
        echo $nome . "agora no teste2";
    }
    teste();
    echo "<br/>";
    teste2();
?>
<!-- ============= ESCOPO DE VARIAVEL ============= -->